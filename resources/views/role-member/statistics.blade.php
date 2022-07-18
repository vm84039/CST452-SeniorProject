<?php
use Illuminate\Support\Facades\Auth;
use App\Services\Data\DAO\UserDao;
use App\Services\Data\DAO\StatisticsDAO;
use Illuminate\Support\Facades\Redirect;

if (!Auth::check()) { Redirect::to('home')->send();}
$UserDao = new UserDao();
$StatisticsDao = new StatisticsDAO();
$user = $UserDao->getUser(Auth::ID());
$statistics = $StatisticsDao->getStatistics(Auth::ID());
?>
@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div id = "main">
        <div class="card shadow mb-3 profile">
            <div class="card-header py-3">
                <p class="text-primary m-0 fw-bold"> {{$user->getFirstname()}} {{$user->getLastname()}}  's Statistics </p>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card-body">
                <div class="row" style="margin-bottom: 25px;text-align: left;">
                        <div class="col-md-6">
                            <div class="mb-3"><label class="form-label" for="firstname"><strong>Tic-Tac-Toe Wins</strong></label><input class="form-control" type="text" value="{{$statistics->getTttWins()}}" name="firstname" readonly=""></div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3"><label class="form-label" for="lastname"><strong>Hangman Wins</strong></label><input class="form-control" type="text" value="{{$statistics->getHangmanWins()}}" name="lastname" readonly=""></div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3"><label class="form-label" for="address"><strong>Tic-Tac-Toe Losses</strong></label><input class="form-control" type="text" value="{{$statistics->getTttLosses()}}" name="address" readonly></div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3"><label class="form-label" for="state"><strong>Hangman Losses</strong></label><input class="form-control" type="text" value="{{$statistics->getHangmanLosses()}}" name="address" readonly></div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3"><label class="form-label" for="city"><strong>Tic-Tac-Toe Best Time</strong></label><input class="form-control" type="text" id="city" value="{{$statistics->getTttBestTime()}}" name="city" readonly=""></div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3"><label class="form-label " for="phone"><strong>Hangman Best Time</strong></label><input class="form-control bfh-phone" data-format="(ddd) ddd-dddd" type="text" value="{{$statistics->getHangmanBestTime()}}" name="phone" readonly></div>
                        </div>
                    <div class="card-header py-3">
                        <p class="text-primary m-0 fw-bold"> Peg Statistics </p>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3"><label class="form-label " for="phone"><strong>You are a genious!!</strong></label><input class="form-control bfh-phone" data-format="(ddd) ddd-dddd" type="text" value="{{$statistics->getPeg1()}}" name="phone" readonly></div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3"><label class="form-label " for="phone"><strong>You are pretty smart</strong></label><input class="form-control bfh-phone" data-format="(ddd) ddd-dddd" type="text" value="{{$statistics->getPeg2()}}" name="phone" readonly></div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3"><label class="form-label " for="phone"><strong>You are just plain dumb</strong></label><input class="form-control bfh-phone" data-format="(ddd) ddd-dddd" type="text" value="{{$statistics->getPeg3()}}" name="phone" readonly></div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3"><label class="form-label " for="phone"><strong>You are just a plain "EG-NO-RA-Moose</strong></label><input class="form-control bfh-phone" data-format="(ddd) ddd-dddd" type="text" value="{{$statistics->getPeg4()}}" name="phone" readonly></div>
                    </div>
                </div>
                <a style="margin-left: 10%" class="btn-lg btn-primary" href="resetStatistics" role="button">Reset</a>
            </div>
    </div>
@endsection
