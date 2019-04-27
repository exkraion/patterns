<?php

namespace Tests\Factory\Method\V1;

use App\Factory\Method\V1\Connectors\FacebookConnector;
use App\Factory\Method\V1\Connectors\TelegramConnector;
use App\Factory\Method\V1\MessageSenders\FacebookMessageSender;
use App\Factory\Method\V1\MessageSenders\TelegramMessageSender;
use PHPUnit\Framework\TestCase;

class V1Test extends TestCase
{
    public function testCanCreateTelegramConnector()
    {
        $factory = new TelegramMessageSender('exbers', 'qwerty');
        $connector = $factory->getMessenger();

        $this->assertInstanceOf(TelegramConnector::class, $connector);
    }

    public function testCanCreateFacebookConnector()
    {
        $factory = new FacebookMessageSender('exbers', 'qwerty');
        $connector = $factory->getMessenger();

        $this->assertInstanceOf(FacebookConnector::class, $connector);
    }
}