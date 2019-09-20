<?php

namespace NotificationChannels\AwsPinpoint;

use Illuminate\Notifications\Notification;
use NotificationChannels\AwsPinpoint\Exceptions\CouldNotSendNotification;

class AwsPinpointChannel
{
    public function __construct()
    {
        // Initialisation code here
    }

    /**
     * Send the given notification.
     *
     * @param mixed $notifiable
     * @param \Illuminate\Notifications\Notification $notification
     *
     * @throws \NotificationChannels\AwsPinpoint\Exceptions\CouldNotSendNotification
     */
    public function send($notifiable, Notification $notification)
    {
        // $response = [a call to the api of your notification send]

        // if ($response->error) { // replace this by the code need to check for errors
        //     throw CouldNotSendNotification::serviceRespondedWithAnError($response);
        // }
    }
}
