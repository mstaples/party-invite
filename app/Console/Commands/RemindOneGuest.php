<?php

namespace App\Console\Commands;

use App\Traits\GuestsTrait;
use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Password;

class RemindOneGuest extends Command
{
    use GuestsTrait;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'message:guest {email}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send out reminder email to specified guest.';

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

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $message = $this->resendGuestInvite($this->argument('email'), $this->tokens);

        $user = User::where('email', '=', config('mail.admin_email'))->first();

        $this->line($message);
    }
}
