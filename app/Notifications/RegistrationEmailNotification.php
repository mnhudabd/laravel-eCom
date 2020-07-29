<?php

namespace App\Notifications;

use App\Models\User;
use App\Notifications\RegistrationEmailNotification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Http\Controllers\Frontend\AuthController;

class RegistrationEmailNotification extends Notification implements ShouldQueue
{
    use Queueable;

    private $user;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable): array 
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage)
        ->line('Welcome '. $this->user->name . ' to srishty.net ecommerce platform.')
        ->line('Please click the following link to activate your account.')
        ->action('click Here', route('activate', $this->user->email_verification_token))
        ->line('Thank you for using our website!');

    }

    
}
