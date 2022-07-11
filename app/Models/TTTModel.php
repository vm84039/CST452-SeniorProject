<?php

namespace App\Models;
/*Vinson Martin CST-451
Brain Games App
TicTacToe Model
Model sets starting information for TicTacToe game*/
class TTTModel
{
    private mixed $first;
    private mixed $turn;
    private mixed $win;

    /**
     * @param int|mixed $first
     * @param int|mixed $turn
     * @param bool|mixed $win
     */
    public function __construct(mixed $first, mixed $turn, mixed $win)
    {
        $this->first = $first;
        $this->turn = $turn;
        $this->win = $win;
    }

    /**
     * @return mixed
     */
    public function getFirst(): mixed
    {
        return $this->first;
    }

    /**
     * @param mixed $first
     */
    public function setFirst(mixed $first): void
    {
        $this->first = $first;
    }

    /**
     * @return mixed
     */
    public function getTurn(): mixed
    {
        return $this->turn;
    }

    /**
     * @param mixed $turn
     */
    public function setTurn(mixed $turn): void
    {
        $this->turn = $turn;
    }

    /**
     * @return mixed
     */
    public function getWin(): mixed
    {
        return $this->win;
    }

    /**
     * @param mixed $win
     */
    public function setWin(mixed $win): void
    {
        $this->win = $win;
    }




}
