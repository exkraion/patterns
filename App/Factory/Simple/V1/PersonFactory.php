<?php

namespace App\Factory\Simple\V1;


class PersonFactory
{
    const PERSON_PATH = 'App\\Factory\\Simple\\V1\\';

    /**
     * Build person by profession
     *
     * @param string $profession
     * @param string $name
     * @return PersonAbstract
     * @throws \Exception
     */
    public function createPerson(string $profession, string $name): PersonAbstract
    {
        $className = self::PERSON_PATH . ucfirst($profession);

        if (false === class_exists($className))
            throw new \Exception('Invalid profession type');

        return new $className($profession, $name);
    }
}