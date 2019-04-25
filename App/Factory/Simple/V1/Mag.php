<?php

namespace App\Factory\Simple\V1;


class Mag extends PersonAbstract
{
    private $dex = 2;
    private $int = 40;
    private $str = 3;

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