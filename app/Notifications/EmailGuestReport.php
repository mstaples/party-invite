<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class EmailGuestReport extends Notification{

    /**
     * The callback that should be used to build the mail message.
     *
     * @var \Closure|null
     */
    public static $toMailCallback;

    private $report;

    /**
     * Create a notification instance.
     *
     * @return void
     */
    public function __construct(array $report)
    {
        $this->report = $report;
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

        $mailMessage = (new MailMessage)
            ->from('party-bot@cyborg.love','Party Bot')
            ->subject('Oldfest 2018 Guest Report')
            ->greeting("Greetings Party Throwing Human!");

        foreach ($this->report as $title => $lines)
        {
            $mailMessage->line($title);
            foreach ($lines as $line) {
                $mailMessage->line($line);
            }
        }

        return $mailMessage;
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
