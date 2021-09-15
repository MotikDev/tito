<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class CartItemAdded extends Notification implements ShouldQueue
{
    use Queueable;

    protected $checkOutItems;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($checkOutItems)
    {
        //
        $this->checkOutItems = $checkOutItems;
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
        // return ['mail', 'database']; //ONLY USE WHEN ONLINE
    }

    public function routeNotificationForMail($notification)
    {
        return auth()->user()->email;
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
                    ->greeting('Hello!')
                    ->subject('Someone just got to the checkout page of your website.')
                    ->line('To see the order and details, follow the link below:')
                    ->action('Dashboard notification', route('notification'))
                    ->line('Thank you for using our application!');
    }

    public function toDatabase($notifiable)
    {
        return [
            $this->checkOutItems,
        ];
    }


}
