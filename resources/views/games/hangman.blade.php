<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Services\Business\DTO\Gameplay\HangmanMethods;
use App\Services\Data\DAO\StatisticsDAO;
use App\Services\Data\DAO\HangmanDao;
use App\Services\Data\DAO\UserDao;

if (!Auth::check()) { Redirect::to('home')->send();}
$UserDao = new UserDao();
$user = $UserDao->getUser(Auth::ID());
$DTO = new HangmanMethods();
$DAO = new HangmanDao();
$answer = $DAO->selectWord($wordId);
$StatisticsDAO = new StatisticsDAO();

if ($start)
{
    $letters = collect([0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]);
    $count = 0;
}
else
{
    $letters = collect([$letter0, $letter1, $letter2, $letter3, $letter4, $letter5, $letter6, $letter7,
        $letter8, $letter9, $letter10, $letter11, $letter12, $letter13, $letter14, $letter15,
        $letter16, $letter17, $letter18, $letter19, $letter20, $letter21, $letter22, $letter23,
        $letter24, $letter25,]);

    $temps = collect([['index' => $letter0], ['index' => $letter1], ['index' => $letter2], ['index' => $letter3], ['index' => $letter4], ['index' => $letter5], ['index' => $letter6], ['index' => $letter7],
        ['index' => $letter8], ['index' => $letter9], ['index' => $letter10], ['index' => $letter11], ['index' => $letter12], ['index' => $letter13], ['index' => $letter14], ['index' => $letter15],
        ['index' => $letter16], ['index' => $letter17], ['index' => $letter18], ['index' => $letter19], ['index' => $letter20], ['index' => $letter21], ['index' => $letter22], ['index' => $letter23],
        ['index' => $letter24], ['index' => $letter25] ]);
    $temp = $temps->where('index', 2);
    $count = $temp->count();
}
$j=0;

?>
@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div id = "main">
        <div class="card shadow mb-3 profile">
            <div class="card-body" style="margin: 150px;">
                 @if($board >= 8 )

                        <p class="results">Sorry you lost<br><br></p>
                        <?php $StatisticsDAO->loseHangman(Auth::ID()); ?>
                 @endif
                 @if($count == $size )
                        <?php
                        $time = $DTO->time($startTime);
                        $highscore = $StatisticsDAO->winHangman(Auth::ID(), $time);  ?>
                        <p class="results">
                            Congratulations {{$user->getFirstname()}}!!! <br>you won the game<br>
                            Game time was {{$DTO->displayTime($time)}} seconds
                            @if ($highscore > 0)
                                &nbspNew Best Time
                            @endif
                            <br><br>
                        </p>
                 @endif



                    <form method="POST" action="chooseLetter">
                        @csrf
                        <input type="hidden" id="statTime" name="startTime" value={{$startTime}}>
                        <input type="hidden" id="size" name="size" value={{$size}}>
                        <input type="hidden" id="wordId" name="wordId" value={{$wordId}}>
                        <input type="hidden" id="board" name="board" value={{$board}}>
                        <input type="hidden" id="letter0" name="letter0" value={{$letter0}}>
                        <input type="hidden" id="letter1" name="letter1" value={{$letter1}}>
                        <input type="hidden" id="letter2" name="letter2" value={{$letter2}}>
                        <input type="hidden" id="letter3" name="letter3" value={{$letter3}}>
                        <input type="hidden" id="letter4" name="letter4" value={{$letter4}}>
                        <input type="hidden" id="letter5" name="letter5" value={{$letter5}}>
                        <input type="hidden" id="letter6" name="letter6" value={{$letter6}}>
                        <input type="hidden" id="letter7" name="letter7" value={{$letter7}}>
                        <input type="hidden" id="letter8" name="letter8" value={{$letter8}}>
                        <input type="hidden" id="letter9" name="letter9" value={{$letter9}}>
                        <input type="hidden" id="letter10" name="letter10" value={{$letter10}}>
                        <input type="hidden" id="letter11" name="letter11" value={{$letter11}}>
                        <input type="hidden" id="letter12" name="letter12" value={{$letter12}}>
                        <input type="hidden" id="letter13" name="letter13" value={{$letter13}}>
                        <input type="hidden" id="letter14" name="letter14" value={{$letter14}}>
                        <input type="hidden" id="letter15" name="letter15" value={{$letter15}}>
                        <input type="hidden" id="letter16" name="letter16" value={{$letter16}}>
                        <input type="hidden" id="letter17" name="letter17" value={{$letter17}}>
                        <input type="hidden" id="letter18" name="letter18" value={{$letter18}}>
                        <input type="hidden" id="letter19" name="letter19" value={{$letter19}}>
                        <input type="hidden" id="letter20" name="letter20" value={{$letter20}}>
                        <input type="hidden" id="letter21" name="letter21" value={{$letter21}}>
                        <input type="hidden" id="letter22" name="letter22" value={{$letter22}}>
                        <input type="hidden" id="letter23" name="letter23" value={{$letter23}}>
                        <input type="hidden" id="letter24" name="letter24" value={{$letter24}}>
                        <input type="hidden" id="letter25" name="letter25" value={{$letter25}}>
                        <img class="hangman" src="{{ asset('assets/img/hangman/'.$board.'.png') }}">
                        <div class="hboard">

                        @for($i='A'; $i!='AA'; $i++)
                            @if (($letters[$j] != 0)||($board >= 8) || ($count == $size ))
                            <div class="alphabet abox">{{$i}}</div>
                            @else
                                <div class="abutton alphabet">
                                    <input class="abutton" type="submit" name="index" value="{{$i}}"/>
                                </div>
                            @endif
                            <?php $j++; ?>
                        @endfor
                        <br><br>
                    </div>
                    <div class ="aboard">
                        <?php
                        for($i=0;$i<strlen($answer); $i++) {
                            $char = substr($answer, $i, 1);
                            $index = $DTO->getIndex($char);
                            ?>
                            @if($letters [$index]==2)
                                <div class="answer"> {{substr($answer, $i, 1) }}</div>
                            @elseif ($board >= 8)
                                <div class="answer abox"> {{substr($answer, $i, 1) }}</div>
                            @else
                                <div class="answer hide"></div>
                            @endif
                    <?php } ?>
                     </div>

                    </form>
                     <a style="margin-left: 40%" class="btn-lg btn-primary" href="hangman" role="button">Restart</a>

            </div>
            </div>


        </div>
    </div>
@stop
