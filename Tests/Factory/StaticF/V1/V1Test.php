<?php

namespace Tests\Factory\StaticF\V1;


use App\Factory\StaticF\V1\PersonAbstract;
use PHPUnit\Framework\TestCase;
use App\Factory\StaticF\V1\PersonFactory;

class V1Test extends TestCase
{

    /**
     * @throws \Exception
     */
    public function testName()
    {
        $name = 'Oleg';
        $person = PersonFactory::createPerson('mag', $name);

        $this->assertEquals($name, $person->getName());
    }

    /**
     * @throws \Exception
     */
    public function testInstanceOfPerson()
    {
        $person = PersonFactory::createPerson('fighter', 'Gogi');

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
     * @throws \Exception
     */
    public function testProfessionStats($profession, $stats)
    {
        $personMag = PersonFactory::createPerson($profession, 'Gogi1');
        $this->assertEquals($stats, $personMag->getStats());
    }
}