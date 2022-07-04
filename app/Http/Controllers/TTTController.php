<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\Business\DTO\Gameplay\TTTMethods;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TTTController extends Controller{
    public function startGame()
    {
        $squares = collect([0, 0, 0, 0, 1, 2, 0, 0, 0]);
        return view('games.tictactoe', compact('squares'));
    }
}
