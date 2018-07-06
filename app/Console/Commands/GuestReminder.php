<?php

namespace App\Console\Commands;

use App\Traits\GuestsTrait;
use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Password;

class GuestReminder extends Command
{
    use GuestsTrait;
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

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $report['Resent Guest Invites'] = $this->resendGuestsInvites($this->tokens);
        $report['Reminded Guests to RSVP'] = $this->remindGuestsToRSVP();
        $report['Current Guest List'] = $this->currentGuestList();

        $user = User::where('email', '=', config('mail.admin_email'))->first();
        $user->sendGuestReport($report);

        foreach ($report as $title=>$lines) {
            $this->line($title);
            foreach ($lines as $line) {
                $this->line($line);
            }
        }
    }
}
