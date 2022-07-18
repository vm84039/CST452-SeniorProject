<?php
/*Vinson Martin CST-451
Brain Games App
Tic Tac Toe Controller
Methods that control the Tic-Tac-Toe game and statistics collection */

namespace App\Http\Controllers;
use App\Services\Business\DTO\Gameplay\PegMethods;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TTTController extends Controller{
    public function startFirst()
    {

        $data =['turn'=> 1,
                'first'=> 1,
                'win'=>-1,
                'start'=>true,
                'startTime'=>Carbon::now()->format('h:i:s')];
        return view('games.tictactoe')->with($data);
    }
    public function startSecond()
    {

        $data =['turn'=> 2,
            'first'=> 2,
            'win'=>-1,
            'start'=>true,
            'startTime'=>Carbon::now()->format('h:i:s')];
        return view('games.tictactoe')->with($data);
    }
    public function takeTurn(Request $request)
    {
        $DTO = new PegMethods();
        $square1 = $request->square1;
        $square2 = $request->square2;
        $square3 = $request->square3;
        $square4 = $request->square4;
        $square5 = $request->square5;
        $square6 = $request->square6;
        $square7 = $request->square7;
        $square8 = $request->square8;
        $square9 = $request->square9;
        $startTime = $request->startTime;


        switch ($request->index){
            case (0):
                $square1=1;
                break;
            case (1):
                $square2=1;
                break;
            case (2):
                $square3=1;
                break;
            case (3):
                $square4=1;
                break;
            case (4):
                $square5=1;
                break;
            case (5):
                $square6=1;
                break;
            case (6):
                $square7=1;
                break;
            case (7):
                $square8=1;
                break;
            case (8):
                $square9=1;
                break;
        }
        $win = $DTO->checkWin(collect([$square1,$square2,$square3,
            $square4,$square5,$square6,
            $square7,$square8,$square9]));


        $data =['first'=> 2,
            'win'=>$win,
            'start'=>false,
            'turn' => 2,
            'index'=>$request->index,
            'square1'=>$square1,
            'square2'=>$square2,
            'square3'=>$square3,
            'square4'=>$square4,
            'square5'=>$square5,
            'square6'=>$square6,
            'square7'=>$square7,
            'square8'=>$square8,
            'square9'=>$square9,
            'startTime'=>$startTime,
            ];
        return view('games.tictactoe')->with($data);
    }
    public function restart(Request $request){

    }

}
