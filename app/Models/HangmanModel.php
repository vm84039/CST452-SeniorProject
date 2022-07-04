<?php

namespace App\Models;

class HangmanModel
{
    private mixed $letters;
    private mixed $answer;
    private mixed $board;

    /**
     * @param mixed $letters
     * @param mixed $answer
     * @param mixed $board
     */
    public function __construct(mixed $letters, mixed $answer, mixed $board)
    {
        $this->letters = $letters;
        $this->answer = $answer;
        $this->board = $board;
    }

    /**
     * @return mixed
     */
    public function getLetters(): mixed
    {
        return $this->letters;
    }

    /**
     * @param mixed $letters
     */
    public function setLetters(mixed $letters): void
    {
        $this->letters = $letters;
    }

    /**
     * @return mixed
     */
    public function getAnswer(): mixed
    {
        return $this->answer;
    }

    /**
     * @param mixed $answer
     */
    public function setAnswer(mixed $answer): void
    {
        $this->answer = $answer;
    }

    /**
     * @return mixed
     */
    public function getBoard(): mixed
    {
        return $this->board;
    }

    /**
     * @param mixed $board
     */
    public function setBoard(mixed $board): void
    {
        $this->board = $board;
    }



}
