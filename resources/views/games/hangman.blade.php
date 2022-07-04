<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Services\Business\DTO\Gameplay\HangmanMethods;

if (!Auth::check()) { Redirect::to('home')->send();}
$DTO = new HangmanMethods();
$hangman = $DTO->createBoard();
$methods = new HangmanMethods();
$picRoute = "asset('assets/img/hangman/" . (string)$hangman->getBoard() . ".png";
$j=1;

?>
@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div id = "main">
        <div class="card shadow mb-3 profile">
            <div class="card-body" style="margin: 150px;">
                <img class="hangman" src="{{ asset('assets/img/hangman/'.'4'.'.png') }}">
                <div class="alphabet">

                    @for($i='A'; $i!='AA'; $i++)
                        @if (($j==2)||($j==8)||($j==7)||($j==14)||($j==16))
                        <div class="abox">{{$i}}</div>
                        @else
                            <div class="abutton">
                                <input class="abutton" type="button" value="{{$i}}"/>
                            </div>
                        @endif
                        <?php $j++; ?>
                    @endfor
                    <br><br>
                </div>
                <div class ="aboard">
                    @for($i=0;$i<7; $i++)
                        @if($i==0)
                            <div class="answer">H</div>
                        @elseif($i==3)
                            <div class="answer">G</div>
                        @elseif($i==6)
                            <div class="answer">N</div>
                        @else
                            <div class="answer hide">M</div>
                        @endif
                    @endfor
                 </div>
            </div>

        </div>
    </div>
@stop
