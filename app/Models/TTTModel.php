<?php

namespace App\Models;

class TTTModel
{
    private mixed $player1;
    private mixed $player2;
    private mixed $result;
    private mixed $time;

    /**
     * @param mixed $player1
     */
    public function __construct(){  }

    /**
     * @return mixed
     */
    public function getPlayer1(): mixed
    {
        return $this->player1;
    }

    /**
     * @param mixed $player1
     */
    public function setPlayer1(mixed $player1): void
    {
        $this->player1 = $player1;
    }

    /**
     * @return mixed
     */
    public function getPlayer2(): mixed
    {
        return $this->player2;
    }

    /**
     * @param mixed $player2
     */
    public function setPlayer2(mixed $player2): void
    {
        $this->player2 = $player2;
    }

    /**
     * @return mixed
     */
    public function getResult(): mixed
    {
        return $this->result;
    }

    /**
     * @param mixed $result
     */
    public function setResult(mixed $result): void
    {
        $this->result = $result;
    }


    /**
     * @return mixed
     */
    public function getTime(): mixed
    {
        return $this->time;
    }

    /**
     * @param mixed $time
     */
    public function setTime(mixed $time): void
    {
        $this->time = $time;
    }



}
