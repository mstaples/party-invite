<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class EmailGuestCalendarReminder extends Notification{

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
            ->subject('Looking forward to seeing you!')
            ->greeting("Greetings Precious Friend Human!")
            ->line('Oldfest 2018 is fast approaching!')
            ->action('Set Your Password', url(config('app.url').route('password.reset', NULL, false)))
            ->line('Please, follow the link to set your password. Then read all about the party plans and let me know when/if I will have the pleasure of your company <3');
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
