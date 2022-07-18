<?php
use App\Services\Data\DAO\StatisticsDAO;
use Illuminate\Support\Facades\Auth;
use App\Services\Business\DTO\Gameplay\TTTMethods;

$StatisticsDAO = new StatisticsDAO();
$DTO = new TTTMethods();

switch($win){
    case 1:
        $squares[0]= 5; $squares[1] = 5; $squares[2] =5;
        break;
    case 2:
        $squares[0]= 5; $squares[4] = 5; $squares[8] =5;
        break;
    case 3:
        $squares[0]= 5; $squares[3] = 5; $squares[6] =5;
        break;
    case 4:
        $squares[1]= 5; $squares[4] = 5; $squares[7] =5;
        break;
    case 5:
        $squares[2]= 5; $squares[5] = 5; $squares[8] =5;
        break;
    case 6:
        $squares[3]= 5; $squares[4] = 5; $squares[5] =5;
        break;
    case 7:
        $squares[6]= 5; $squares[4] = 5; $squares[2] =5;
        break;
    case 8:
        $squares[6]= 5; $squares[7] = 5; $squares[8] =5;
        break;
    case 9:
        $squares[0]= 6; $squares[1] = 6; $squares[2] =6;
        break;
    case 10:
        $squares[0]= 6; $squares[4] = 6; $squares[8] =6;
        break;
    case 11:
        $squares[0]= 6; $squares[3] = 6; $squares[6] =6;
        break;
    case 12:
        $squares[1]= 6; $squares[4] = 6; $squares[7] =6;
        break;
    case 13:
        $squares[2]= 6; $squares[5] = 6; $squares[8] =6;
        break;
    case 14:
        $squares[3]= 6; $squares[4] = 6; $squares[5] =6;
        break;
    case 15:
        $squares[6]= 6; $squares[4] = 6; $squares[2] =6;
        break;
    case 16:
        $squares[6]= 6; $squares[7] = 6; $squares[8] =6;
        break;
}
?>

<div class="results">
    @if ($win == 0)
        <p class="results">
            Tie Game
            <?php $StatisticsDAO->tieTicTacToe(Auth::ID()); ?>
        </p>
    @elseif ($win < 8)
        <?php
        $time = $DTO->time($startTime);
        $highscore = $StatisticsDAO->winTicTacToe(Auth::ID(), $time);  ?>
    <p class="results">
        Congratulations {{$user->getFirstname()}}!!! <br>you won the game<br>
        Game time was {{$DTO->displayTime($time)}} seconds
        @if ($highscore > 0)
            &nbspNew Best Time
        @endif
    </p>
    @else
    <p class="results">Sorry you lost</p>
        <?php $StatisticsDAO->loseTicTacToe(Auth::ID()); ?>
    @endif
</div>
<div class="game-board">
    @for($i=0; $i < 9; $i++)
    @if ($squares[$i] == 0)
    <div class="box player disabled"><button type="button">&nbsp&nbsp&nbsp</button></div>
    @elseif($squares[$i] == 1)
    <div class="box player disabled"><button type="button">X</button></div>
    @elseif ($squares[$i] == 5)
    <div class="box player disabled"><button class="strike"  type="button">X</button></div>
    @elseif ($squares[$i] == 6)
    <div class="box computer disabled"><button class="strike" type="button">O</button></div>
    @else
    <div class="box computer disabled"><button type="button" >O</button></div>
    @endif
    @endfor
</div>
