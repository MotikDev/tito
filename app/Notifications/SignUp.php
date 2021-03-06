<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class SignUp extends Notification implements ShouldQueue
{
    use Queueable;

    protected $signUp;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($signUp)
    {
        //
        $this->signUp = $signUp;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    // public function toDatabase($notifiable)
    // {
    //     return [
    //         'customerId' => $this->customer->id,
    //         'customerEmail' => $this->customer->email,
    //         'customerPhone' => $this->customer->phoneNo,
    //     ];
    // }
    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
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
    public function toDatabase($notifiable)
    {
        return [
            //
            $this->signUp,            
        ];
    }
}
