@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div id = "main">
        <div class="card shadow mb-3 profile">
                <div class="card-body" style="margin: 150px;">
                    <figure class="snip1527" style="height: 250px;">
                        <div class="image"><img style="width: 100%;height: 125px;" src="{{ asset('assets/img/tictactoe.jpg') }}" alt="pr-sample23" /></div>
                        <figcaption>
                            <h3>Tic-Tac-Toe</h3>
                            <p style="color:white;">
                                Play a game of Tic-Toe-Toe.  You can play vs the computer or versus another player locally
                            </p>
                        </figcaption>
                        <a href="tictactoe"></a>
                    </figure>
                    <figure class="snip1527" style="height: 250px;">
                        <div class="image"><img style="width: 100%;height: 125px;" src="{{ asset('assets/img/hangman.jpg') }}" alt="pr-sample23" /></div>
                        <figcaption>
                            <h3>Hangman</h3>
                            <p style="color:white;">
                                Play a game of Hangman.  You can play vs the computer or versus another player locally
                            </p>
                        </figcaption>
                        <a href="hangman"></a>
                    </figure>
                    <figure class="snip1527" style="height: 250px;">
                        <div class="image"><img style="width: 100%;height: 125px;" src="{{ asset('assets/img/peg.jpg') }}" alt="pr-sample23" /></div>
                        <figcaption>
                            <h3>Peg</h3>
                            <p style="color:white;">
                                Play a game of peg.  How many pegs can you remove.
                            </p>
                        </figcaption>
                        <a href="peg"></a>
                    </figure>
                </div>
            </div>
        </div>
    </div>
@stop
