<?php

namespace App\Factory\Simple\V1;


abstract class PersonAbstract
{
    private $name;
    private $profession;
    private $lvl = 1;
    /**
     * PersonInterface constructor.
     *
     * @param string $profession
     * @param string $name
     */
    public function __construct(string $profession, string $name)
    {
        $this->name = $name;
        $this->profession = $profession;
    }

    /**
     * Get person name
     *
     * @return mixed
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get person lvl
     *
     * @return mixed
     */
    public function getLvl(): int
    {
        return $this->lvl;
    }

    /**
     * Get stats by profession
     *
     * @return array
     */
    public function getStats(): array
    {
        return [
            'dex' => $this->getDex(),
            'int' => $this->getInt(),
            'str' => $this->getStr(),
        ];
    }

    /**
     * @return int
     */
    abstract public function getDex(): int;

    /**
     * @return int
     */
    abstract public function getInt(): int;

    /**
     * @return int
     */
    abstract public function getStr(): int;
}