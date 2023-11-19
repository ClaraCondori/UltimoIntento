<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta rel="stylesheet" href="/css/app.css">
    <meta rel="stylesheet" href="/css/chat.css">
</head>
<body>
    <section class="msger">
    <header class="msger-header">
    <div class="msger-header-title">
        <i class="fas fa-comment-alt"></i>
        <span class="chatWith"></span>
        <span class="typing" style="display: none;">Escribiendo</span>
    </div>
    <div class="msger-header-options">
        <span class="chatStatus offline"><i class="fas fa-globe"></i></span>
    </div>
    </header>

    <div class="msger-chat"></div>
    <form class="msg-inputarea">
        <input type="text" class="msger-input" oninput="sendTypeEvent()" placeholder="Mensaje">
        <button type="submit" class="msger-send-btn">Enviar</button>
    </form>
</section>

</body>
</html>