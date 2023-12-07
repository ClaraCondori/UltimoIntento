<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramChannel;
use NotificationChannels\Telegram\TelegramMessage;

class NuevoMensajeTelegram extends Notification
{
    public function toTelegram($notifiable)
    {
        return TelegramMessage::create()
            ->to('@Laravelito_2023_bot') // puse el nombre del bot aqui
            ->content('¡Nuevo mensaje en tu canal de Telegram!');
    }
}
