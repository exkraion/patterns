<?php
include __DIR__ . '/../vendor/autoload.php';

use App\Factory\Method\V1\MessageSenders\{MessageSenderAbstract, FacebookMessageSender, TelegramMessageSender};

function execute(MessageSenderAbstract $messageSender)
{
    $messageSender->send('test message');
}

execute(new FacebookMessageSender('exbers', '***querty***'));
execute(new TelegramMessageSender('exbers', '***querty***'));