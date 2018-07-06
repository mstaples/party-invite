<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class EmailGuestRSVPReminder extends Notification
{

    /**
     * The callback that should be used to build the mail message.
     *
     * @var \Closure|null
     */
    public static $toMailCallback;

    /**
     * Create a notification instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Get the notification's channels.
     *
     * @param  mixed  $notifiable
     * @return array|string
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Build the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        if (static::$toMailCallback) {
            return call_user_func(static::$toMailCallback, $notifiable, NULL);
        }

        return (new MailMessage)
            ->subject('Margaret wants you at her party!')
            ->greeting("Greetings Precious Friend Human!")
            ->line('You are receiving this email because you have not yet provided an RSVP to Oldfest 2018.')
            ->action('RSVP', url(config('app.url').route('rsvp')))
            ->line('Please, follow the link to RSVP. If you want to change that info later, you may update it as often as needs be <3');
    }

    /**
     * Set a callback that should be used when building the notification mail message.
     *
     * @param  \Closure  $callback
     * @return void
     */
    public static function toMailUsing($callback)
    {
        static::$toMailCallback = $callback;
    }
}
