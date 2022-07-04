<?php

namespace App\Models;

class StatisticsModel
{
    private mixed $id;
    private mixed $userId;
    private mixed  $tttWins;
    private mixed  $tttLosses;
    private mixed  $tttBestTime;
    private mixed  $hangmanWins;
    private mixed  $hangmanLosses;
    private mixed  $hangmanBestTime;
    private mixed  $pegWins;
    private mixed  $pegLosses;
    private mixed  $pegBestTime;

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


}
