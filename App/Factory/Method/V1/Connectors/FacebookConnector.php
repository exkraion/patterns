<?php

namespace App\Factory\Method\V1\Connectors;


class FacebookConnector implements MessengerConnector
{
    private $login, $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function login(): void
    {
        var_dump('login by ' . self::class  . ' as ' . $this->login);
    }

    /**
     * @param string $message
     * @return mixed
     */
    public function send(string $message): void
    {
        var_dump('send message by ' . self::class);
    }
}