<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Request;

class RequestSubmittedNotification extends Notification
{
    use Queueable;

    private Request $request;

    /**
     * Create a new notification instance.
     *
     * @param  Request  $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->subject('Meeting Request Submitted')
                    ->greeting('Hello ' . $notifiable->name . ',')
                    ->line('You have submitted a meeting request for ' . $this->request->meeting_title . ' on ' . $this->request->meeting_date->format('F j, Y') . ' at ' . $this->request->meeting_time)
                    ->action('View Request', route('requests.show', $this->request->id))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'request_id' => $this->request->id,
        ];
    }
}

