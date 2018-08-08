<?php namespace App\Traits;

use App\User;
use Illuminate\Auth\Passwords\TokenRepositoryInterface;
use Illuminate\Support\Facades\DB;

trait  GuestsTrait
{
    public function rsvp($user)
    {
        return $user->rsvp;
    }

    function sortByArrivalDate(User $a, User $b)
    {
        $t1 = strtotime($a->arriving);
        $t2 = strtotime($b->arriving);
        return $t1 - $t2;
    }

    public function createNewUser($name, $email, TokenRepositoryInterface $tokens)
    {
        $this->line("Create new user $name: $email");
        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = hash('md2', $email);
        $user->save();

        $user->sendPasswordResetNotification($tokens->create($user));
    }

    public function allInvitedStatus()
    {
        $list = [];
        $users = User::all();

        foreach ($users as $user) {
            $id = $user->id;
            $name = $user->name;
            $email = $user->email;
            $accountCreated = $user->RSVP == NULL ? "No" : "Yes";
            $list[$id][] = "$name ($email):";
            $list[$id][] = "Account Created? ". $accountCreated;
            if ($accountCreated != "No") {
                $rsvp = $user->RSVP == false ? "Not Coming" : "Yes";
                $list[$id][] = "RSVP: ".$rsvp;
                if ($rsvp) {
                    $plus1 = $user->partner == true ? "Yes" : "No";
                    $list[$id][] = "PlusOne? ".$plus1;
                }
            }
        }

        return $list;
    }

    public function currentGuestList()
    {
        $list = [];
        $users = User::where('rsvp', '!=', NULL)->get();
        if (empty($users)) {
            $list[] = "No guests have responded.";
        } else {
            $list[] = count($users) . " guests have responded.";

            $users = User::where('rsvp', true)->orderBy('arriving', 'ASC')->get();
            $count = count($users);
            $plusOnes = 0;
            $lines = [];
            foreach ($users as $user)
            {
                $line = $user->name;
                if ($user->partner) {
                    $line .= " + 1";
                    $plusOnes++;
                }
                $line .= " " . $user->arriving . " - " . $user->departing;
                $lines[] = $line;
            }

            $list[] = $count + $plusOnes . " guests plan to attend.";
            foreach ($lines as $line) {
                $list[] = $line;
            }
        }

        return $list;
    }

    public function resendGuestsInvites(TokenRepositoryInterface $tokens)
    {
        $users = User::where('created_at', '=', DB::raw('updated_at'))->get();
        $lines = [];
        if ($users->isEmpty()) {
            $lines[] = "All guests have created accounts.";
            return $lines;
        }

        $lines[] = $users->count() . " guests have not created accounts.";
        foreach ($users as $user) {
            $lines[] = "Sending a reminder invite to ". $user->name;
            $user->sendInvitation(
                $tokens->create($user)
            );
        }

        return $lines;
    }

    public function remindGuestsToRSVP()
    {
        $users = User::where('rsvp', '=', NULL)->where('created_at', '<', DB::raw('updated_at'))->get();
        $lines = [];
        if ($users->isEmpty()) {
            $lines[] = "All invited guests who have created accounts have also provided an RSVP.";
            return $lines;
        }

        foreach ($users as $user) {
            $lines[] = "Sending a reminder to RSVP to " . $user->name;
            $user->sendRSVPReminder();
        }

        return $lines;
    }

}