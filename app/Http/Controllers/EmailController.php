<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function enviarcorreo(Request $request){
        $nombre = $request->input('nombre');
        $asunto = $request->input('asunto');
        $email = $request->input('email');
        $mensaje = $request->input('mensaje');
        $para = 'Nosotros@gmail.com';

        Mail::send('correo.email', $request->all(), function($msg) use($asunto,$nombre,$email,$para){
            $msg->from($email,$nombre);
            $msg->subject($asunto);
            $msg->to($para);
        });
        return view('welcome');
    }

    //
}
