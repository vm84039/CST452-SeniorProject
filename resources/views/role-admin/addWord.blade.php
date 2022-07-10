<?php
use Illuminate\Support\Facades\Auth;
use App\Services\Data\DAO\HangmanDao;
use Illuminate\Support\Facades\Redirect;
use App\Services\Business\DTO\Gameplay\HangmanMethods;

if (!Auth::check()) { Redirect::to('home')->send();}

$DAO = new HangmanDao();
$method = new HangmanMethods();
$words = $DAO->wordList();
$sorted = $words->sort();
$sorted->values()->all();
$first = $words->first();

?>
@extends('layouts.app')
@section('title', 'Hangman Edits')
@section('content')
    <div id = "main">
        <div class="table-responsive card profile " >
            <div  data-bs-toggle="collapse">
                <div style="text-align: center" class="cardHeader">
                    <h1 style="margin:20px" >Add a Dictionary Word to the Hangman Game</h1>
                </div>
            </div>
                <div class="card scroll">
                    <div style="text-align: center; margin-top:100px" class="card-body ">
                        <h1>Choose a word to add to Hangman<br><br><br></h1>


                        <form method="POST" action="toHangman">
                                @csrf
                            <div class="dictionary">
                                 <?php $sorted->each(function($item, $index) { ?>
                                      <button type="submit" name="item" value="{{$item}}" class=" dline btn btn-link">{{$item}}</button><?php }) ; ?>
                            </div>
                            </form>



                    </div>
                </div>
        </div>
    </div>

@endsection
