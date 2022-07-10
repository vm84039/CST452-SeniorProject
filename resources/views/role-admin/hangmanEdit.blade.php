<?php
use Illuminate\Support\Facades\Auth;
use App\Services\Data\DAO\HangmanDao;
use Illuminate\Support\Facades\Redirect;
use App\Services\Business\DTO\Gameplay\HangmanMethods;

if (!Auth::check()) { Redirect::to('home')->send();}

$DAO = new HangmanDao();
$method = new HangmanMethods();

?>
@extends('layouts.app')
@section('title', 'Hangman Edits')
@section('content')
    <div id = "main">
        <div class="table-responsive card profile " >
            @if ($message)
                    <h3 style="color: red; text-align: center "> {{$messageText}}</h3>
            @endif
                <a style="margin: 100px" class="btn btn-link" href="addWord">
                    {{'Add New Hangman Word'}}
                </a>
            <div class="card scroll">
                    <div class="card-body ">
                        <form method="POST" action="deleteWord">
                            @csrf
                        <table id="tblUser" class="display table table-striped table-data table-bordered" style="width:100%; padding:10px;">
                            <thead>
                                <tr>
                                    <th scope="col">Word ID</th>
                                    <th scope="col">Hangman Word</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                                <tbody>
                                <?php
                                $rows = $DAO->getAllWords();
                                foreach($rows as $row) {

                                ?>
                                <tr>
                                    <td>{{ $row->id}}</td>
                                    <td>{{$row->word}}</td>
                                    <td><button style="margin-left: 20px" class="btn btn-primary formButton" type="submit" name="id"
                                                 value="{{$row->id}}">Delete</button></td>
                                </tr>
                                <?php
                                }?>
                            </tbody>
                        </table>
                        </form>
                    </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#tblUser').DataTable({
            });
        });
    </script>

@stop
