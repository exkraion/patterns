<?php
include __DIR__ . '/../vendor/autoload.php';

use App\Factory\Method\V2\Connectors\InsightlyConnector;

$c = new InsightlyConnector('MjJiYWE1YWMtNGI1Ni00NGM1LTlhNjUtZTIwNTNiZWNhMWIz');

try {
    $c->auth();

    $response = $c->request('POST', 'Contacts', [
        "FIRST_NAME" =>"Oleg22sss",
        "LAST_NAME" => "Bran12ss",
        "SOCIAL_FACEBOOK" => "facebook.com",
        "DATE_OF_BIRTH" => "2019-05-06T12:17:19.475Z",
        "PHONE" => "test phone",
        "PHONE_HOME" => "test PHONE_HOMEe",
        "PHONE_MOBILE" => "test PHONE_MOBILEw",
        "EMAIL_ADDRESS" => "test EMAIL_ADDRESSw",
        "ADDRESS_OTHER_STREET" => "test ADDRESS_OTHER_STREET",
        "ADDRESS_OTHER_CITY" => "test ADDRESS_OTHER_CITY",
        "ADDRESS_OTHER_COUNTRY" => "test ADDRESS_OTHER_COUNTRY",
        "TITLE" => "test TITLE"
    ]);

    var_dump($response['CONTACT_ID']);
} catch (\Exception $exception) {
    echo $exception->getMessage() . PHP_EOL;
}


//function execute(MessageSenderAbstract $messageSender)
//{
//    $messageSender->send('test message');
//}
//
//execute(new FacebookMessageSender('exbers', '***querty***'));
//execute(new TelegramMessageSender('exbers', '***querty***'));