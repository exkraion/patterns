<?php

namespace App\Factory\Method\V1\Connectors;


interface MessengerConnector
{
    /**
     * @return mixed
     */
    public function login(): void;

    /**
     * @param string $message
     * @return mixed
     */
    public function send(string $message): void;
}