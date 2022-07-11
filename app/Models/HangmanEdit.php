<?php
/*Vinson Martin CST-451
Brain Games App
Hangman Edit Model
Model Allows Admin to manipulate Hangman Dictionary */
namespace App\Models;
class HangmanEdit
{
    private mixed $id;
    private mixed $word;

    /**
     * @param mixed $id
     * @param mixed $word
     */
    public function __construct(mixed $id, mixed $word)
    {
        $this->id = $id;
        $this->word = $word;
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
    public function getWord(): mixed
    {
        return $this->word;
    }

    /**
     * @param mixed $word
     */
    public function setWord(mixed $word): void
    {
        $this->word = $word;
    }




}
