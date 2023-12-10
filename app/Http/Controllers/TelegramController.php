<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;

class TelegramController extends Controller
{
    public function via($notifiable){
        return [TelegramChannel::class];
    }
    public function toTelegram(){
        return TelegramMessage::create()
        >content("hola");
    }
}
