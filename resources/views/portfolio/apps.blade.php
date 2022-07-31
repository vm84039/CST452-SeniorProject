@extends('layouts.portfolio')
@section('title', 'WebApplications')
@section('content')
    <div id = "main">
        <div class="card shadow mb-3 profile">
                <div class="card-body" style="margin: 150px;">
                    <figure class="snip1527" style="height: 250px;">
                        <div class="image"><img style="width: 100%;height: 125px;" src="{{ asset('assets/img/background.jpg') }}" alt="pr-sample23" /></div>
                        <figcaption>
                            <h3>Brain Games</h3>
                            <p style="color:white;">
                                CST-452.  Senior Project Brain Games Application.  Play a game of Tic-Tac-Toe, Hangman, or Peg
                            </p>
                        </figcaption>
                        <a href="brainGames"></a>
                    </figure>
                    <figure class="snip1527" style="height: 250px;">
                        <div class="image"><img style="width: 100%;height: 125px;" src="{{ asset('assets/img/job-search.jpeg') }}" alt="pr-sample23" /></div>
                        <figcaption>
                            <h3>Job Search</h3>
                            <p style="color:white;">
                                CST-256 Job Search demonstration application.  Fill out a job search profile, perform a job search, and join an Affinity Group.
                            </p>
                        </figcaption>
                        <a href="https://cst256-clc.herokuapp.com/"></a>
                    </figure>
                    <figure class="snip1527" style="height: 250px;">
                        <div class="image"><img style="width: 100%;height: 125px;" src="{{ asset('assets/img/book.jpg') }}" alt="pr-sample23" /></div>
                        <figcaption>
                            <h3>Online Library</h3>
                            <p style="color:white;">
                                CST-323 Sign up for a membership to our library.  Search for popular books and check out online.
                            </p>
                        </figcaption>
                        <a href="https://polar-plateau-40494.herokuapp.com/"></a>
                    </figure>
                </div>
            </div>
        </div>
    </div>
@stop
