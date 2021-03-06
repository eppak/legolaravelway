<?php

namespace Agronomist\Notifications;
use Log;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

/**
 * Class SeedRequest
 * @package Agronomist\Notifications
 */
class SeedRequest extends Notification
{
    use Queueable;

    /**
     * @var null
     */
    private $from_user = null;
    private $seed = null;
    private $qty = null;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($from_user, $seed, $qty)
    {
        $this->from_user = $from_user;
        $this->seed = $seed;
        $this->qty = $qty;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {

	Log::info("Sending request from {$this->from_user->email} to {$notifiable->email}");
        return (new MailMessage)
                    //->from($this->from_user->email, $this->from_user->name)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
	  'type' => 'request',
	  'from' => $this->from_user->email,
	  'seed_id' => $this->seed->id,
	  'qty' => $this->qty
        ];
    }
}
