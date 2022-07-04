<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Services\Business\DTO\Gameplay\TTTMethods;

if (!Auth::check()) { Redirect::to('home')->send();}
$DTO = new TTTMethods();
$squares = $DTO->createBoard();
$i=0;
?>

@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div id = "main">
        <div class="card shadow mb-3 profile">
            <div class="card-body" style="margin: 150px;">
                <div class="game-board">

                    @foreach($squares as $square)
                        @if ($square == 0)
                            <input class="butt" type="button" value=""/>
                        @elseif($square == 1)
                            <div class="box"style="color: darkred">X</div>
                        @else
                            <div class="box" style="color: orangered">O</div>
                        @endif
                        <?php $i++;?>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@stop
