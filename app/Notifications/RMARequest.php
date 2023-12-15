<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RMARequest extends Notification
{
    use Queueable;

    public $rma;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($rma)
    {
        $this->rma = $rma;
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
        return (new MailMessage)
            ->subject('New RMA Request')
            ->line('A new RMA request has been generated by ' . $this->rma->users->first_name . ' ' . $this->rma->users->last_name)
            ->line('Model: ' . $this->rma->asset->model->name)
            ->line('Serial Number: ' . $this->rma->asset->serial)
            ->action('View RMA', route('rma.show', $this->rma->id))
            ->line('Click the link above to view the RMA request.');
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
            //
        ];
    }
}
