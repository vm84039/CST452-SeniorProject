<?php
namespace App\Services\Business\DTO\Gameplay;
use App\Models\HangmanModel;
class HangmanMethods {

    private static $player1;
    private static $player2;
    public function createBoard(): HangmanModel
    {
        $board = 1;
        $answer = "Hangman";
        $letters = collect([0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]);
        return new HangmanModel($board, $answer, $letters);
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
