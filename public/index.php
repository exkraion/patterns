<?php
include __DIR__ . '/../vendor/autoload.php';

use App\Factory\Simple\V1\PersonFactory;
//use App\Factory\StaticF\V1\PersonFactory;

$personFactory = new PersonFactory();
//
//$person1 = $personFactory->createPerson('Oleg');
//$person2 = $personFactory->createPerson('Vasa');
try {
    $person3 = $personFactory->createPerson('mag', 'Oleg');
} catch (Exception $e) {
    var_dump([
        'status' => 'ERROR',
        'message' => $e->getMessage(),
    ]);
}

echo $person3->getName();


