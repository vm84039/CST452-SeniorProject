<?php
/*Vinson Martin CST-451
Brain Games App
Peg Controller
Methods that control the Peg game and statistics collection */
namespace App\Http\Controllers;

use App\Services\Business\DTO\Gameplay\PegMethods;
use App\Services\Data\DAO\StatisticsDAO;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PegController extends Controller{

    public function start()
    {

        $DTO = new PegMethods();
        $peg = collect();
        $board = collect([-1,1,2,3,4,5,6,7,8,9,10,11,12,13,14]);
        Session::put('board', $board);
        $button=collect();
        Session::put('button', $button);
        $DTO->newButtons();
        $jump = collect();
        $remaining = $DTO->getFull()->count();
        $over = $DTO->gameOver();
        $message="";

        for ($i=1; $i<15; $i++){
            if (($i%4)==0) {$color = "yellow";}
            elseif(($i%4)==1) {$color = "blue";}
            elseif(($i%4)==2) {$color = "forestgreen";}
            else {$color = "red";}

            $peg->add(['position' => $i, 'pNum'=> $i, 'color'=> $color]);
        }
        Session::put('peg', $peg);
        Session::put('jump', $jump);
        Session::put('piece', 0);
        Session::put('over', $over);
        Session::put('remaining', $remaining) ;
        Session::put('remaining', $message) ;

        return view('games.peg');
    }
    public function choosePeg(Request $request)
    {

        $position = $request->position;
        $DTO = new PegMethods();
        $jump = $DTO->jump($position);
        $piece = $DTO->getPiece($position);

        Session::put('piece', $piece);
        Session::put('jump', $jump);
        Session::put('original', $position);


        return view('games.peg');
    }
    public function jump(Request $request){
        $remove = $request->jump;
        $original = session('original');
        $piece = session('$piece');
        $DTO = new PegMethods();
        $DTO->remove($original,$remove, $piece);
        $DTO->clearJump();

        $DTO->newButtons();
        $remaining = $DTO->getFull()->count();
        $over = $DTO->gameOver();
        if ($over==1){$DTO->record(AUTH::id(), $remaining);}
        Session::put('over', $over);
        Session::put('remaining', $remaining) ;
        Session::put('message', $DTO->getMessage($remaining));

        return view('games.peg');
    }
}
