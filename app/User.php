<?php

namespace App;

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

    public function sendPasswordResetNotification($token)
    {
        $createdAt = $this->created_at->timestamp;
        $diff = (time() - $createdAt) / 60;
        if ($diff < 15) {
            $this->notify(new EmailNewGuest($token));
        } else {
            parent::sendPasswordResetNotification($token);
        }
    }
}
