<?php

namespace Tests\Factory\Simple\V1;


use App\Factory\Simple\V1\PersonAbstract;
use PHPUnit\Framework\TestCase;
use App\Factory\Simple\V1\PersonFactory;

class V1Test extends TestCase
{
    /**
     * @throws Exception
     */
    public function testName()
    {
        $name = 'Oleg';

        $personFactory = new PersonFactory();
        $person = $personFactory->createPerson('mag', $name);
        $this->assertEquals($name, $person->getName());
    }

    /**
     * @throws \Exception
     */
    public function testInstanceOfPerson()
    {
        $personFactory = new PersonFactory();
        $person = $personFactory->createPerson('fighter', 'Gogi');

        $this->assertInstanceOf(PersonAbstract::class, $person);
    }

    /**
     * @return array
     */
    public function statsProvider()
    {
        return [
            [
                'mag', [
                    'dex' => 2,
                    'int' => 40,
                    'str' => 3,
                ]
            ],
            [
                'fighter', [
                    'dex' => 10,
                    'int' => 1,
                    'str' => 33,
                ]
            ]
        ];
    }

    /**
     * @dataProvider statsProvider
     * @param $profession
     * @param $stats
     * @throws Exception
     */
    public function testProfessionStats($profession, $stats)
    {
        $personFactory = new PersonFactory();
        $personMag = $personFactory->createPerson($profession, 'Gogi1');
        $this->assertEquals($stats, $personMag->getStats());
    }
}