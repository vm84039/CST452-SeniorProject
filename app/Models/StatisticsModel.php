<?php
/*Vinson Martin CST-451
Brain Games App
Statistcs Model
Model sets manipulates game record statistics*/

namespace App\Models;

class StatisticsModel
{
    private mixed $id = 0;
    private mixed $userId =0;
    private mixed  $tttWins = 0;
    private mixed  $tttLosses = 0;
    private mixed  $tttBestTime = "0";
    private mixed  $tttTies = "0";
    private mixed  $hangmanWins = 0;
    private mixed  $hangmanLosses = 0;
    private mixed  $hangmanBestTime = "0";
    private mixed  $peg1 = "0";
    private mixed  $peg2 = "0";
    private mixed  $peg3 = "0";
    private mixed  $peg4 = "0";


    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getId(): mixed
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId(mixed $id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUserId(): mixed
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId(mixed $userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getTttWins(): mixed
    {
        return $this->tttWins;
    }

    /**
     * @param mixed $tttWins
     */
    public function setTttWins(mixed $tttWins): void
    {
        $this->tttWins = $tttWins;
    }

    /**
     * @return mixed
     */
    public function getTttLosses(): mixed
    {
        return $this->tttLosses;
    }

    /**
     * @param mixed $tttLosses
     */
    public function setTttLosses(mixed $tttLosses): void
    {
        $this->tttLosses = $tttLosses;
    }

    /**
     * @return mixed
     */
    public function getTttBestTime(): mixed
    {
        return $this->tttBestTime;
    }

    /**
     * @param mixed $tttBestTime
     */
    public function setTttBestTime(mixed $tttBestTime): void
    {
        $this->tttBestTime = $tttBestTime;
    }

    /**
     * @return mixed
     */
    public function getHangmanWins(): mixed
    {
        return $this->hangmanWins;
    }

    /**
     * @param mixed $hangmanWins
     */
    public function setHangmanWins(mixed $hangmanWins): void
    {
        $this->hangmanWins = $hangmanWins;
    }

    /**
     * @return mixed
     */
    public function getHangmanLosses(): mixed
    {
        return $this->hangmanLosses;
    }

    /**
     * @param mixed $hangmanLosses
     */
    public function setHangmanLosses(mixed $hangmanLosses): void
    {
        $this->hangmanLosses = $hangmanLosses;
    }

    /**
     * @return mixed
     */
    public function getHangmanBestTime(): mixed
    {
        return $this->hangmanBestTime;
    }

    /**
     * @param mixed $hangmanBestTime
     */
    public function setHangmanBestTime(mixed $hangmanBestTime): void
    {
        $this->hangmanBestTime = $hangmanBestTime;
    }

    /**
     * @return mixed
     */
    public function getPegWins(): mixed
    {
        return $this->pegWins;
    }

    /**
     * @param mixed $pegWins
     */
    public function setPegWins(mixed $pegWins): void
    {
        $this->pegWins = $pegWins;
    }

    /**
     * @return mixed
     */
    public function getPegLosses(): mixed
    {
        return $this->pegLosses;
    }

    /**
     * @param mixed $pegLosses
     */
    public function setPegLosses(mixed $pegLosses): void
    {
        $this->pegLosses = $pegLosses;
    }

    /**
     * @return mixed
     */
    public function getPegBestTime(): mixed
    {
        return $this->pegBestTime;
    }

    /**
     * @param mixed $pegBestTime
     */
    public function setPegBestTime(mixed $pegBestTime): void
    {
        $this->pegBestTime = $pegBestTime;
    }

    /**
     * @return mixed|string
     */
    public function getTttTies(): mixed
    {
        return $this->tttTies;
    }

    /**
     * @param mixed|string $tttTies
     */
    public function setTttTies(mixed $tttTies): void
    {
        $this->tttTies = $tttTies;
    }

    /**
     * @return mixed|string
     */
    public function getPeg1(): mixed
    {
        return $this->peg1;
    }

    /**
     * @param mixed|string $peg1
     */
    public function setPeg1(mixed $peg1): void
    {
        $this->peg1 = $peg1;
    }

    /**
     * @return mixed|string
     */
    public function getPeg2(): mixed
    {
        return $this->peg2;
    }

    /**
     * @param mixed|string $peg2
     */
    public function setPeg2(mixed $peg2): void
    {
        $this->peg2 = $peg2;
    }

    /**
     * @return mixed|string
     */
    public function getPeg3(): mixed
    {
        return $this->peg3;
    }

    /**
     * @param mixed|string $peg3
     */
    public function setPeg3(mixed $peg3): void
    {
        $this->peg3 = $peg3;
    }

    /**
     * @return mixed|string
     */
    public function getPeg4(): mixed
    {
        return $this->peg4;
    }

    /**
     * @param mixed|string $peg4
     */
    public function setPeg4(mixed $peg4): void
    {
        $this->peg4 = $peg4;
    }



}
