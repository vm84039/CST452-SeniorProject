<?php
namespace App\Services\Business\DTO\Gameplay;

class TTTMethods {

    private static $player1;
    private static $player2;

    public function createBoard(): \Illuminate\Support\Collection
    {
        return collect([0, 0, 0, 0, 1, 2, 0, 0, 0]);
    }
    public function userTurn(){
    }
    public function computerTurn(){
    }
    public function checkWin(){
    }
    public function gameResults(){
    }
    public function gameTime(){}
    public function highScore(){}
}
