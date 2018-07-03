<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Password;

class GuestReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'remind:guest';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send out reminder email to guests who have not responded.';

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
        $this->tokens = Password::getRepository();
    }

    public function createNewUser($name, $email)
    {
        $this->line("Create new user $name: $email");
        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = hash('md2', $email);
        $user->save();

        $user->sendInvitation(
            $this->tokens->create($user)
        );
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $users = User::where(['rsvp' => NULL])->get();
        if (empty($users)) {
            $this->line("All guests have responded.");
        } else {
            $this->line(count($users) . " guests have not responded.");
            foreach ($users as $user)
            {
                $user->sendInvitation(
                    $this->tokens->create($user)
                );
            }
        }
    }
}
