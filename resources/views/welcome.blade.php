@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div id = "main">
        <div class="card shadow mb-3 profile">
                <div class="card-body">
                    <div style="background-image:url({{ asset('assets/img/background.jpg') }});height:100%;background-position:center;background-size:cover;background-repeat:no-repeat;">
                        <div class="d-flex justify-content-center align-items-center" style="height:inherit;min-height:initial;width:100%;background-color:rgba(30,41,99,0.53);">
                            <div class="d-flex align-items-center order-5" style="height:200px;">
                                <div class="container">
                                    <h1 class="text-center" style="color:rgb(242,245,248);font-size:56px;font-weight:bold;font-family:Roboto, sans-serif;">Welcome to Brain Games</h1>
                                    <h3 class="text-center" style="color:rgb(242,245,248);padding-top:0.25em;padding-bottom:0.25em;font-weight:normal;">Please Login or register to continue</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
