<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\FacebookPoster\FacebookPosterChannel;
use NotificationChannels\FacebookPoster\FacebookPosterPost;
use NotificationChannels\Telegram\TelegramMessage;
use NotificationChannels\Telegram\TelegramFile;

class facebookpost extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        // return [FacebookPosterChannel::class, "telegram"];
        return ["telegram"];
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
            //
        ];
    }
    // public function toFacebookPoster($notifiable)
    // {

    //     return (new FacebookPosterPost($notifiable->title))
    //         ->withLink(route('news.view', ['news' => $notifiable->id]));
    // }
    public function toTelegram($notifiable)
    {
        $url = route('news.view', ['news' => $notifiable->id]);
        return TelegramFile::create()
            ->content("**" . $notifiable->title . "**" . PHP_EOL . substr(strip_tags($notifiable->content), 0, 150) . "..." . PHP_EOL . PHP_EOL . "[View Full News]({$url})")
            ->photo(public_path($notifiable->image))
            ->button('View Full News', $url);
    }
}
