<?php

namespace App;

use App\Notifications\EmailGuestCalendarReminder;
use App\Notifications\EmailGuestReport;
use App\Notifications\EmailGuestRSVPReminder;
use App\Notifications\EmailNewGuest;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'rsvp', 'arriving', 'departing', 'partner'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function sendInvitation($token)
    {
        $this->notify(new EmailNewGuest($token));
    }

    public function sendRSVPReminder()
    {
        $this->notify(new EmailGuestRSVPReminder());
    }

    public function sendCalenderReminder()
    {
        $this->notify(new EmailGuestCalendarReminder());
    }

    public function sendGuestReport($report)
    {
        if ($this->email == config('mail.admin_email')) {
            $this->notify(new EmailGuestReport($report));
        }
    }
}
