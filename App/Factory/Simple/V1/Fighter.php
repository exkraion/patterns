<?php

namespace App\Factory\Simple\V1;


class Fighter extends PersonAbstract
{
    private $dex = 10;
    private $int = 1;
    private $str = 33;

    /**
     * @return int
     */
    public function getDex(): int
    {
        return $this->dex;
    }

    /**
     * @return int
     */
    public function getInt(): int
    {
        return $this->int;
    }

    /**
     * @return int
     */
    public function getStr(): int
    {
        return $this->str;
    }
}