<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RepositoryCreated extends Notification
{
    use Queueable;

    public $repository;
    public $type;
    public $method;

    public function __construct($repository, $type, $method = 'created')
    {
        $this->repository = $repository;
        $this->type = $type;
        $this->method = $method;
    }


    public function via($notifiable)
    {
        return ['database'];
    }


    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }


    public function toArray($notifiable)
    {
        return [
            'repository' => $this->repository,
            'type' => $this->type,
            'method' => $this->method,
            'owner' => fullName(),
        ];
    }
}
