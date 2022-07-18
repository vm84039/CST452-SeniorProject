<?php

namespace App\Http\Controllers;

class PegPiece
{
    private mixed $pNum;
    private mixed $position;

    /**
     * @param mixed $pNum
     * @param mixed $position
     */
    public function __construct(mixed $pNum, mixed $position)
    {
        $this->pNum = $pNum;
        $this->position = $position;
    }


    /**
     * @return mixed
     */
    public function getPNum(): mixed
    {
        return $this->pNum;
    }

    /**
     * @param mixed $pNum
     */
    public function setPNum(mixed $pNum): void
    {
        $this->pNum = $pNum;
    }

    /**
     * @return mixed
     */
    public function getPosition(): mixed
    {
        return $this->position;
    }

    /**
     * @param mixed $position
     */
    public function setPosition(mixed $position): void
    {
        $this->position = $position;
    }



}
