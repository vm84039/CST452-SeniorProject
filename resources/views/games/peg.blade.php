<?php
use Illuminate\Support\Facades\Auth;
use App\Services\Data\DAO\UserDao;
use App\Services\Data\DAO\StatisticsDAO;
use Illuminate\Support\Facades\Redirect;

if (!Auth::check()) { Redirect::to('home')->send();}
$UserDao = new UserDao();
$StatisticsDao = new StatisticsDAO();
$user = $UserDao->getUser(Auth::ID());

    $peg = session('peg');
    $board = session('board');
    $jump = session('jump');
    $button = session('button');
    $piece = session('piece');
    $empties= session('empties');
    $message= session('message');
    $over= session('over');
    $remaining = session('remaining');
    $check = session('check');
    $i=0;
?>

@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div id = "main">
        <div class="card shadow mb-3 profile">
            <div class="card scroll">
                <div class="card-body" >
<!--               --><?php // echo $board->dump(); echo $check->dump();   echo "Piece: "; echo$piece; echo "Over:";echo $over; echo "Remaining:";echo $remaining;
               ?>
                    @if($over==1)
                       <p class="results">
                           You have left {{$remaining}} pegs remaining<br>{{$message}}
<!--                           --><?php //$StatisticsDAO->tieTicTacToe(Auth::ID()); ?>
                       </p>
                    @else
                        <p class="results">
                            Can you jump all but One?
                            <!--                           --><?php //$StatisticsDAO->tieTicTacToe(Auth::ID()); ?>
                        </p>
                   @endif
                    <img class="pegImage" src="{{ asset('assets/img/pegBoard.png') }}" alt="Peg">
                    <form method="POST" action="choosePeg">
                        <div class="pegBoard">
                                @csrf
                            @foreach($board as $square=> $entry)
                                <?php //$filtered = $peg->where('position', $i);
                                        $piece = $board[$square];
                                        $j=$i+1;
                                     $class="pegDiv".$j;
                                        if (($piece%4)==0) {$color = "yellow";}
                                        elseif(($piece%4)==1) {$color = "blue";}
                                        elseif(($piece%4)==2) {$color = "forestgreen";}
                                        else {$color = "red";}

                                     ?>
                                    <div style="color:{{$color}} " class={{$class}}>
                                        @if ($piece>0)
                                            @include("partials.pegPiece")

                                        @else
                                            @include("partials.pegDot")
                                        @endif
                                     </div>
                                  <?php $i++; ?>
                            @endforeach
                        </div>
                    </form>
                   <a style="margin-left: 40%" class="btn-lg btn-primary" href="peg" role="button">Restart</a>
@stop
