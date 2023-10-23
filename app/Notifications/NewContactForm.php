<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\ContactForm;

class NewContactForm extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public ContactForm $contact_form)
    {
        //
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
            ->from('hello@example.com', 'PT Pera Abadi Sentausa')
            ->subject("New Contact Form Submission at Pera Abadi Sentausa")
            ->greeting("New Contact Form Submission")
            ->line('Name: ' . $this->contact_form->name)
            ->line('Email: ' . $this->contact_form->email)
            ->line('Phone: ' . $this->contact_form->phone)
            ->line('Purpose: ' . implode(', ', $this->contact_form->purpose))
            ->line('Message: ' . $this->contact_form->message)
            ->action('Go to Dashboard', url('/admin'))
            ->line('Thank you');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
