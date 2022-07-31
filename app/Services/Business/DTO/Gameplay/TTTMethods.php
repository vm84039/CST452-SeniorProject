<?php
/*Vinson Martin CST-451
Brain Games App
TicTacToe Methods
Supports TicTacToe Gameplay */
namespace App\Services\Business\DTO\Gameplay;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class TTTMethods {

//send to computerTurn method if it was the computer's turn.
    public function turn(mixed $square, mixed $board): Collection
    {
        if ($square == -1)
            $board = $this->computerTurn($board);
        return $board ;
    }
 //chooses a random number, checks if the array square is available ( =0  ) if available, sets array position to 2
// which is the computers number
    public function computerTurn(mixed $board): Collection
    {
        $i = rand(0, 8);
        while ($board[$i] !=0 ){
            $i = rand(0, 8);
        }
        $board[$i] = 2;
        return $board ;
    }
 //check if the player or computer has won the game.  returns 0 is no player has won or returns the winning player
    public function checkWin(mixed $board): int
    {
        if (($this->winConditions($board) == -1) && ($this->checkTie($board)) )
        {
            return 0;
        }
            return $this->winConditions($board);
    }
    // record the length in time of the current game.
    public function time ($startTime): float|int
    {
        $endTime = Carbon::now()->format('h:i:s');;
        $time =  Carbon::parse($startTime)->diffInSeconds(Carbon::parse($endTime));
        return $time;
    }
    // displays the time is seconds format
    public function displayTime($time): string
    {
        return gmdate('s', $time);
    }
// if all array board positions are not equal to zero then the game is a tie and return true.
//else return false
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
 // checks all different scenarios a player can win, ie get three squares vertically, horizontally, or
 // diagonally in sequence for one player,  returns the condition the player or computer has won.
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
}
