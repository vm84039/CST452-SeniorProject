<?php
namespace App\Services\Business\DTO\Gameplay;
use App\Models\TTTModel;
use App\Services\Data\DAO\TitTacToeDao;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class TTTMethods {

    private static $player1;
    private static $player2;


    public function turn(mixed $square, mixed $board): Collection
    {
        if ($square == -1)
            $board = $this->computerTurn($board);
        else
            $board = $this->userTurn($board);
        return $board ;
    }


    public function userTurn($board){
        return $board ;
    }
    public function computerTurn(mixed $board): Collection
    {
        $i = rand(0, 8);
        while ($board[$i] !=0 ){
            $i = rand(0, 8);
        }
        $board[$i] = 2;
        return $board ;
    }
    public function checkWin(mixed $board): int
    {
        if (($this->winConditions($board) == -1) && ($this->checkTie($board)) )
        {
            return 0;
        }
            return $this->winConditions($board);
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

    public function checkTie(mixed $board): bool
    {
        $tie = true;
        for ($i=0; $i<9; $i++)
        {
            if ($board[$i] == 0)
                $tie = false;
        }
        return $tie;
    }
    public function winConditions(mixed $board): int
    {
        $win = -1;
        if ($board[0] != 0){
            if (($board[0]==1)&&($board[1]==1)&&($board[2]==1)){$win = 1;}
            if (($board[0]==2)&&($board[1]==2)&&($board[2]==2)){$win = 9;}
            if (($board[0]==1)&&($board[4]==1)&&($board[8]==1)){$win = 2;}
            if (($board[0]==2)&&($board[4]==2)&&($board[8]==2)){$win = 10;}
            if (($board[0]==1)&&($board[3]==1)&&($board[6]==1)){$win = 3;}
            if (($board[0]==2)&&($board[3]==2)&&($board[6]==2)){$win = 11;}
            if (($board[1]==1)&&($board[4]==1)&&($board[7]==1)){$win = 4;}
            if (($board[1]==2)&&($board[4]==2)&&($board[7]==2)){$win = 12;}
            if (($board[2]==1)&&($board[5]==1)&&($board[8]==1)){$win = 5;}
            if (($board[2]==2)&&($board[5]==2)&&($board[8]==2)){$win = 13;}
            if (($board[3]==1)&&($board[4]==1)&&($board[5]==1)){$win = 6;}
            if (($board[3]==2)&&($board[4]==2)&&($board[5]==2)){$win = 14;}
            if (($board[6]==1)&&($board[4]==1)&&($board[2]==1)){$win = 7;}
            if (($board[6]==2)&&($board[4]==2)&&($board[2]==2)){$win = 15;}
            if (($board[6]==1)&&($board[7]==1)&&($board[8]==1)){$win = 8;}
            if (($board[6]==2)&&($board[7]==2)&&($board[8]==2)){$win = 16;}
        }
        else
        {
            $win = -1;
        }
        return $win;
    }

    public function gameResults(){
    }
    public function gameTime(){}
    public function highScore(){}
}
