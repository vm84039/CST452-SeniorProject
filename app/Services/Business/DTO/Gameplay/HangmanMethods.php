<?php

/*Vinson Martin CST-451
Brain Games App
HangmanMethods
Supports Hangman Gameplay */
namespace App\Services\Business\DTO\Gameplay;
use App\Models\HangmanEdit;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Services\Data\DAO\HangmanDao;
class HangmanMethods {

    private static $player1;
    private static $player2;

    public function getIndex(mixed $letter): int
    {
        return match ($letter) {
            'a' => 0,
            'b' => 1,
            'c' => 2,
            'd' => 3,
            'e' => 4,
            'f' => 5,
            'g' => 6,
            'h' => 7,
            'i' => 8,
            'j' => 9,
            'k' => 10,
            'l' => 11,
            'm' => 12,
            'n' => 13,
            'o' => 14,
            'p' => 15,
            'q' => 16,
            'r' => 17,
            's' => 18,
            't' => 19,
            'u' => 20,
            'v' => 21,
            'w' => 22,
            'x' => 23,
            'y' => 24,
            'z' => 25,
        };
    }
    public function getChar(mixed $index): string
    {
        return match ((int) $index) {
            0 => 'a',
            1 => 'b',
            2 => 'c',
            3 => 'd',
            4 => 'e',
            5 => 'f',
            6 => 'g',
            7 => 'h',
            8 => 'i',
            9 => 'j',
            10 => 'k',
            11 => 'l',
            12 => 'm',
            13 => 'n',
            14 => 'o',
            15 => 'p',
            16 => 'q',
            17 => 'r',
            18 => 's',
            19 => 't',
            20 => 'u',
            21 => 'v',
            22 => 'w',
            23 => 'x',
            24 => 'y',
            25 => 'z',
        };
    }
    public function match(mixed $i, mixed $wordId){
        $DAO = new HangmanDao();
        $answer = $DAO->selectWord($wordId);
        return Str::contains($answer, strtolower($i));
    }
    public function time ($startTime): float|int
    {
        $endTime = Carbon::now()->format('h:i:s');;
        $time =  Carbon::parse($startTime)->diffInSeconds(Carbon::parse($endTime));
        return $time;
    }
    public function displayTime($time): string
    {
        return gmdate('s', $time);
    }

    public function userTurn(){
    }
    public function computerTurn(){
    }
    public function checkWin(){
    }
    public function gameResults(){
    }

}
