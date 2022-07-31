@extends('layouts.portfolio')
@section('title', 'Diagrams')
@section('content')
    <div  class="portfolio" style="margin-left: 250px">
        <div style="margin-right: 150px;  overflow-wrap: break-word; color: white; padding: 50px">
            <h3 style="text-align: center">Functional Requirements<br></h3>
            <div style="  width: 50%; margin-left:20%; background: white; float:left; margin-right: 50px;margin-bottom: 50px;">
                <img style=" width: 100%; height:100%; padding: 5px; " src="{{ asset('assets/img/fdiag.png') }}" alt="GCU" />
            </div>
        </div>
        <h3 style="margin-top: 750px;text-align: left; margin-left: 35%">Non-Functional Requirements<br></h3>
        <div style="  width: 50%; margin-left:15%; background: white; float:left; margin-right: 50px;margin-bottom: 100px;">
            <img style=" width: 100%; height:100%; padding: 5px; " src="{{ asset('assets/img/flow.png') }}" alt="GCU" />
        </div>
    </div>

@stop
