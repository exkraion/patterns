<?php

namespace App\Factory\Method\V1\MessageSenders;


use App\Factory\Method\V1\Connectors\MessengerConnector;

abstract class MessageSenderAbstract
{
    abstract public function getMessenger() : MessengerConnector;

    public function send(string $message): void
    {
        $messenger = $this->getMessenger();

        $messenger->login();
        $messenger->send($message);
    }
}