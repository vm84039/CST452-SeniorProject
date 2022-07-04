<?php
namespace App\Services\Business\DTO\Gameplay;

interface GameMethodsInterface{

    public function createBoard();
    public function userTurn();
    public function computerTurn();
    public function checkWin();
    public function gameResults();
    public function gameTime();
    public function highScore();

}
