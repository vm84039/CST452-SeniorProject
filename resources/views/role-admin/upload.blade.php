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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Laravel Storage Example</div>
                    <div class="card-body">
                        <form action="{{ route('upload') }}" method="POST" role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="file" class="col-md-4 col-form-label text-md-right">Select a file to upload</label>
                                <div class="col-md-6">
                                    <input id="file" type="file" class="form-control @error('file') is-invalid @enderror" name="file" value="{{ old('file') }}">
                                    @error('file')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">Upload File</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
