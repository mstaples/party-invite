<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Password;

class NewGuest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'new:guest {name} {email}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create an invited guest user and email that user to change their password to claim the account.';

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

        $user->sendPasswordResetNotification(
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
        $user = User::where(['email' => $this->argument('email')])->first();
        if (empty($user)) {
            $this->createNewUser($this->argument('name'), $this->argument('email'));
        } else {
            $this->line("A user with that email address already exists");
        }
    }
}
