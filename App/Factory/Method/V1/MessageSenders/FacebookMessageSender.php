<?php

namespace App\Factory\Method\V1\MessageSenders;


use App\Factory\Method\V1\Connectors\{MessengerConnector, FacebookConnector};

class FacebookMessageSender extends MessageSenderAbstract
{
    private $login;
    private $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    /**
     * @return MessengerConnector
     */
    public function getMessenger(): MessengerConnector
    {
        return new FacebookConnector($this->login, $this->password);
    }
}