<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Services\Business\DTO\Gameplay\TTTMethods;
use App\Services\Data\DAO\UserDao;
use App\Services\Data\DAO\HangmanDao;

if (!Auth::check()) { Redirect::to('home')->send();}
$DTO = new TTTMethods();
$UserDao = new UserDao();
$user = $UserDao->getUser(Auth::ID());


if (($start)&&($turn == 1))
{
    $squares = collect([0,0,0,0,0,0,0,0,0]);
}
elseif (($start)&&($turn == 2))
{
    $squares = collect([0,0,0,0,0,0,0,0,0]);
    $squares = $DTO->turn(-1, $squares);
}
elseif ((!$start)&&($turn == 2))
{
    $squares = collect([$square1,$square2,$square3,
        $square4,$square5,$square6,
        $square7,$square8,$square9]);
    if (($win == -1)) {
        $squares = $DTO->turn(-1, $squares);
    }
}
else{
    $squares = collect([$square1,$square2,$square3,
        $square4,$square5,$square6,
        $square7,$square8,$square9]);
}

$win = $DTO->checkWin($squares);

?>

@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div id = "main">
        <div class="card shadow mb-3 profile">
            <div class="card scroll">
            <div class="card-body" >
                @if (($win != -1))
                    @include("partials.TTTWin")
                @else
                <form method="POST" action="takeTurn">
                    @csrf
                        <div class="game-board">
                        <input type="hidden" id="square1" name="square1" value={{$squares[0]}}>
                        <input type="hidden" id="square2" name="square2" value={{$squares[1]}}>
                        <input type="hidden" id="square3" name="square3" value={{$squares[2]}}>
                        <input type="hidden" id="square4" name="square4" value={{$squares[3]}}>
                        <input type="hidden" id="square5" name="square5" value={{$squares[4]}}>
                        <input type="hidden" id="square6" name="square6" value={{$squares[5]}}>
                        <input type="hidden" id="square7" name="square7" value={{$squares[6]}}>
                        <input type="hidden" id="square8" name="square8" value={{$squares[7]}}>
                        <input type="hidden" id="square9" name="square9" value={{$squares[8]}}>
                        <input type="hidden" id="startTime" name="startTime" value={{$startTime}}>
                            <input type="hidden" id="first" name="first" value={{$first}}>
                        @for($i=0; $i < 9; $i++)
                            @if ($squares[$i] == 0)
                                <div class="box"><button type="submit" name="index" value="{{$i}}">&nbsp&nbsp&nbsp</button></div>
                            @elseif($squares[$i] == 1)
                                <div class="box player disabled"><button type="button">X</button></div>
                            @else
                                <div class="box computer disabled"><button type="button" >O </button></div>
                            @endif
                        @endfor
                        </div>
                </form>
                @endif
                @if ($first == 2)
                    <a style="margin-left: 40%" class="btn-lg btn-primary" href="startFirst" role="button">Restart</a>
                @else
                    <a style="margin-left: 40%" class="btn-lg btn-primary" href="startSecond" role="button">Restart</a>
                @endif
            </div>
        </div>
    </div>
@stop
