<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;

class GuestList extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'list:guest';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show RSVPs';

    /**
     * The password token repository.
     *
     * @var \Illuminate\Auth\Passwords\TokenRepositoryInterface
     */
    protected $tokens;

    /**
     * Create a new command instance.
     */
    public function __construct()
    {
        parent::__construct();
    }

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

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $users = User::all();
        if (empty($users)) {
            $this->line("No guests have visited.");
        } else {
            $count = count($users);
            if ($count > 1) {
                $this->line(count($users) . " guests have visited.");

                // only users who are coming
                $users = array_filter($users, "rsvp");

                // sort by arrival date
                usort($users, 'sortByArrivalDate');
            }

            $plusOnes = 0;
            foreach ($users as $user)
            {
                $line = $user->name;
                if ($user->partner) {
                    $line .= " + 1";
                    $plusOnes++;
                }
                $line .= " " . $user->arriving . " - " . $user->departing;
                $this->line($line);
            }

            $this->line($count + $plusOnes . " guests plan to attend.");

        }
    }
}
