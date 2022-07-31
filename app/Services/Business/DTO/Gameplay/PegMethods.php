<?php
/*Vinson Martin CST-452
Brain Games App
Peg Methods
Supports Peg Gameplay */
namespace App\Services\Business\DTO\Gameplay;

use App\Services\Data\DAO\StatisticsDAO;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Session;

class PegMethods {
//Jump methods has takes the input of the current position chosen by the player and returns all available positions
//players can choose to jump and remove a peg.
    public function jump(mixed $position): Collection
    {
        $temp = collect();
        $board = session('board');
        switch ($position){
            case 0:
                if ($board[1] != -1)
                {$temp->add(['position'=> 3]);}
                if ($board[2] != -1)
                {$temp->add(['position'=> 5]);}
                break;
            case 1:
                if ($board[3] != -1)
                {$temp->add(['position'=> 6]);}
                if ($board[4] != -1)
                {$temp->add(['position'=> 8]);}
                break;
            case 2:
                if ($board[4] != -1)
                {$temp->add(['position'=> 7]);}
                if ($board[5] != -1)
                {$temp->add(['position'=> 9]);}
                break;
            case 3:
                if ($board[1] != -1)
                {$temp->add(['position'=> 0]);}
                if ($board[6] != -1)
                {$temp->add(['position'=> 10]);}
                if ($board[4] != -1)
                {$temp->add(['position'=> 5]);}
                if ($board[7] != -1)
                {$temp->add(['position'=> 12]);}
                break;
            case 4:
                if ($board[7] != -1)
                {$temp->add(['position'=> 11]);}
                if ($board[8] != -1)
                {$temp->add(['position'=> 13]);}
                break;
            case 5:
                if ($board[2] != -1)
                {$temp->add(['position'=> 0]);}
                if ($board[4] != -1)
                {$temp->add(['position'=> 3]);}
                if ($board[9] != -1)
                {$temp->add(['position'=> 14]);}
                if ($board[8] != -1)
                {$temp->add(['position'=> 12]);}
                break;
            case 6:
                if ($board[3] != -1)
                {$temp->add(['position'=> 1]);}
                if ($board[7] != -1)
                {$temp->add(['position'=> 8]);}
                break;
            case 7:
                if ($board[4] != -1)
                {$temp->add(['position'=> 2]);}
                if ($board[8] != -1)
                {$temp->add(['position'=> 9]);}
                break;
            case 8:
                if ($board[7] != -1)
                {$temp->add(['position'=> 6]);}
                if ($board[4] != -1)
                {$temp->add(['position'=> 1]);}
                break;
            case 9:
                if ($board[5] != -1)
                {$temp->add(['position'=> 2]);}
                if ($board[8] != -1)
                {$temp->add(['position'=> 7]);}
                break;
            case 10:
                if ($board[11] != -1)
                {$temp->add(['position'=> 12]);}
                if ($board[6] != -1)
                {$temp->add(['position'=> 3]);}
                break;
            case 11:
                if ($board[7] != -1)
                {$temp->add(['position'=> 4]);}
                if ($board[12] != -1)
                {$temp->add(['position'=> 13]);}
                break;
            case 12:
                if ($board[11] != -1)
                {$temp->add(['position'=> 10]);}
                if ($board[13] != -1)
                {$temp->add(['position'=> 14]);}
                if ($board[7] != -1)
                {$temp->add(['position'=> 3]);}
                if ($board[8] != -1)
                {$temp->add(['position'=> 5]);}
                break;
            case 13:
                if ($board[8] != -1)
                {$temp->add(['position'=> 4]);}
                if ($board[12] != -1)
                {$temp->add(['position'=> 11]);}
                break;
            case 14:
                if ($board[9] != -1)
                {$temp->add(['position'=> 5]);}
                if ($board[13] != -1)
                {$temp->add(['position'=> 12]);}
                break;
        }
        return $temp;
    }

//remove takes input of the original array position and the jump array position to
//assign a remove value that represents the peg piece to remove and pass to removeNum method
    public function remove(mixed $original, mixed $jump): void
    {
        $remove =0;
        if ($original==0){
            if ($jump==3){$remove=1;}
            if ($jump==5){$remove=2;}
        }
        if ($original==1){
            if ($jump==6){$remove=3;}
            if ($jump==8){$remove=4;}
        }
        if ($original==2){
            if ($jump==7){$remove=4;}
            if ($jump==9){$remove=5;}
        }
        if ($original==3){
            if ($jump==0){$remove=1;}
            if ($jump==10){$remove=6;}
            if ($jump==5){$remove=4;}
            if ($jump==12){$remove=7;}
        }
        if ($original==4){
            if ($jump==11){$remove=7;}
            if ($jump==13){$remove=8;}
        }
        if ($original==5){
            if ($jump==0){$remove=2;}
            if ($jump==14){$remove=9;}
            if ($jump==3){$remove=4;}
            if ($jump==12){$remove=8;}
        }
        if ($original==6){
            if ($jump==1){$remove=3;}
            if ($jump==8){$remove=7;}
        }
        if ($original==7){
            if ($jump==2){$remove=4;}
            if ($jump==9){$remove=8;}
        }
        if ($original==8){
            if ($jump==1){$remove=4;}
            if ($jump==6){$remove=7;}
        }
        if ($original==9){
            if ($jump==7){$remove=8;}
            if ($jump==2){$remove=5;}
        }
        if ($original==10){
            if ($jump==3){$remove=6;}
            if ($jump==12){$remove=11;}
        }
        if ($original==11){
            if ($jump==13){$remove=12;}
            if ($jump==4){$remove=7;}
        }
        if ($original==12){
            if ($jump==10){$remove=11;}
            if ($jump==14){$remove=13;}
            if ($jump==3){$remove=7;}
            if ($jump==5){$remove=8;}
        }
        if ($original==13){
            if ($jump==11){$remove=12;}
            if ($jump==4){$remove=8;}
        }
        if ($original==14){
            if ($jump==12){$remove=13;}
            if ($jump==5){$remove=9;}
        }

        $this->removeNum($original, $jump, $remove);

    }
//remove Num takes the original peg position, new peg position after jump, and which position
//to remove a peg and updates the game board
    private function removeNum(mixed $original, mixed $jump, int $remove): void
    {
        $board = session('board');
        $piece = session('piece');
        $i=0;
        foreach($board as $square=> $entry){
            if ($i==$original){$board[$square]=-1;}
            if ($i==$jump){$board[$square]=$piece;}
            if ($i==$remove){$board[$square]=-1;}
            $i++;
        }
    }
    //clears the $jump session Collection
    public function clearJump(): void
    {
        $jump = session('jump');
        $jump->forget('key');
        $jump = collect();
        Session::put('jump', $jump);
    }
    //clears the $button session Collection
    public function clearButton(): void
    {
        $button = session('button');
        $button->forget('key');
        $button = collect();
        Session::put('button', $button);
    }
//sets the new values of the $button Collection which are the movable pieces in
//the peg game
    public function newButtons(): void
    {

        $button = collect();
        $empties=$this->getEmpties();

        Session::put('empties', $empties);
        $i=0;
        foreach($empties as $square=> $entry){
            $temps = $this->jump($entry);
            Session::put('temps', $temps);
            foreach($temps as $temp=> $num){

                $button->add($num);
            }
            $i++;
        }
        Session::put('button', $button);
    }
//sets the new values of the $pieces Collection which are the non-movable pieces in
//the peg game
    public function getPiece(mixed $position){
        $i=0;
        $piece =0;
        $board = session('board');
        foreach($board as $square=> $entry){
            if ($i==$position) {$piece = $entry; }
            $i++;
        }
        return $piece;
    }
//gets the values of the $empties Collection which are the empty elements in
//the peg game
    private function getEmpties(): Collection
    {
        $board = session('board');
        $empties = collect();
        $i=0;
        foreach($board as $square=> $entry){
            if ($entry ==-1) {
                $empties->add($i);
            }
            $i++;
        }
        return $empties;
    }
//gets the values of the $full Collection which are the non-empty elements in
//the peg game
    public function getFull(): Collection
    {
        $board = session('board');
        $full = collect();
        $i=0;
        foreach($board as $square=> $entry){
            if ($entry !=-1) {
                $full->add($i);
            }
            $i++;
        }
        Session::put('full', $full);
        return $full;
    }

//checks to see if there are any jumps available in the game.  If no jumps
//are available, $over array is empty, returns 0 which means the game is over.
    public function gameOver(): int
    {
        $full=$this->getFull();
        $over = collect();
        $i=0;
        foreach($full as $square=> $entry){
            $temps = $this->jump($entry);
            foreach($temps as $temp=> $num){
                $over->add($num);
            }
            $i++;
        }
        Session::put('check', $over);

        if ($over->count()>0) {return 0;}
        return 1;
    }
// Displays game results messaged based upon the number of pegs remaining
    public function getMessage(mixed $num){
        return match ($num) {
            1 => 'You are a genious!!',
            2 => 'You are pretty smart',
            3 => 'You are just plain dumb',
            default => 'You are just a plain "EG-NO-RA-Moose"'
        };
    }
//input of user id number and number of pegs remaining to send to database to save game results
    public function record(mixed $id, mixed $num): void
    {
        $DAO = new StatisticsDAO();
         switch ($num)
         {
             case 1:
                 $DAO->peg1($id);
                 break;
             case 2:
                 $DAO->peg2($id);
                 break;
             case 3:
                 $DAO->peg3($id);
                 break;
             case 4:
                 $DAO->peg4($id);
                 break;
        };
    }


}
