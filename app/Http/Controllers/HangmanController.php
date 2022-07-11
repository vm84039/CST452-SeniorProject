<?php
/*Vinson Martin CST-451
Brain Games App
Hangman Controller
Methods that control the Hangman game and statistics collection */
namespace App\Http\Controllers;
use App\Services\Business\DTO\Gameplay\HangmanMethods;
use App\Services\Data\DAO\HangmanDao;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Models\HangmanEdit;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class HangmanController extends Controller{
    public function start()
    {
        $board = 1;
        $wordId = rand(0, 213);
        $DAO = new HangmanDao();
        $answer = $DAO->selectWord($wordId);
        $array = str_split($answer);
        $size = count((array_unique($array)));



        $data =['board'=> $board,'wordId' =>$wordId, 'start' => true, 'size'=>$size, 'startTime'=>Carbon::now()->format('h:i:s'),
            'letter0'=>0, 'letter1'=>0, 'letter2'=>0, 'letter3'=>0, 'letter4'=>0, 'letter5'=>0, 'letter6'=>0, 'letter7'=>0,
            'letter8'=>0, 'letter9'=>0, 'letter10'=>0, 'letter11'=>0, 'letter12'=>0, 'letter13'=>0, 'letter14'=>0, 'letter15'=>0,
            'letter16'=>0, 'letter17'=>0, 'letter18'=>0, 'letter19'=>0, 'letter20'=>0, 'letter21'=>0, 'letter22'=>0, 'letter23'=>0,
            'letter24'=>0, 'letter25'=>0,
            ];
        return view('games.hangman')->with($data);
    }
    public function chooseLetter(Request $request)
    {
        $DTO = new HangmanMethods();
        $index = $request->index;
        $wordId = $request->wordId;
        $board = $request->board;
        $size = $request->size;
        $startTime = $request->startTime;

        if (!($DTO->match($index, $wordId)))
        {
            $board++;
            $value = 1;
        }
        else{
            $value = 2;
        }
        $DAO = new HangmanDao();
        $answer = $DAO->selectWord($wordId);

        if ($DTO->match($index, $wordId)){$match = "true";}
        else {$match = "false";}

        $hangman = $this->getIndexForm($request, $value);

        $data =[ 'start' => false, 'board'=>$board, 'wordId' =>$wordId, 'answer'=>$answer, 'match'=>$match, 'index'=>$index, 'size'=>$size, 'startTime'=>$startTime,
            'letter0'=>$hangman->getLetter0(), 'letter1'=>$hangman->getLetter1(), 'letter2'=>$hangman->getLetter2(), 'letter3'=>$hangman->getLetter3(), 'letter4'=>$hangman->getLetter4(), 'letter5'=>$hangman->getLetter5(), 'letter6'=>$hangman->getLetter6(), 'letter7'=>$hangman->getLetter7(),
            'letter8'=>$hangman->getLetter8(), 'letter9'=>$hangman->getLetter9(), 'letter10'=>$hangman->getLetter10(), 'letter11'=>$hangman->getLetter11(), 'letter12'=>$hangman->getLetter12(), 'letter13'=>$hangman->getLetter13(), 'letter14'=>$hangman->getLetter14(), 'letter15'=>$hangman->getLetter15(),
            'letter16'=>$hangman->getLetter16(), 'letter17'=>$hangman->getLetter17(), 'letter18'=>$hangman->getLetter18(), 'letter19'=>$hangman->getLetter19(), 'letter20'=>$hangman->getLetter20(), 'letter21'=>$hangman->getLetter21(), 'letter22'=>$hangman->getLetter22(), 'letter23'=>$hangman->getLetter23(),
            'letter24'=>$hangman->getLetter24(), 'letter25'=>$hangman->getLetter25(),
            ];
        //return view('debug')->with($data);
        return view('games.hangman')->with($data);
    }
    public function addWord(Request $request){
        $added = false;
        $message = false;
        $word = "";
        $messageText ="";
        $data =[ 'word' => $word, 'added'=> $added, 'message'=>$message,'messageText'=>$messageText];
        return view('role-admin.hangmanEdit')->with($data);
    }
    public function deleteWord(Request $request){
        $id = $request->id;
        $added = false;
        $DAO = new HangmanDao();
        $word = $DAO->selectWord($id);
        $DAO->deleteWord($id);
        $message = true;
        $messageText = $word." was deleted from the database.";
        $data =[ 'word' => $word, 'added'=> $added, 'message'=>$message,'messageText'=>$messageText];

        return view('role-admin.hangmanEdit')->with($data);


    }
    public function toHangman(Request $request){
        $word = strtolower($request->item);

        $DAO = new HangmanDao();
        $added = $DAO->insertWord($word);
        $message = true;
        if ($added){  $messageText = $word."was added to the Hangman database.";}
        else{           $messageText = $word." was not added to the Hangman database \n".$word." was is already in the database";}
        $data =[ 'word' => $word, 'added'=> $added, 'message'=>$message,'messageText'=>$messageText];
        return view('role-admin.hangmanEdit')->with($data);

    }
    public function getIndexForm(Request $request, $value): HangmanEdit
    {
        $letter0 = $request->letter0;
        $letter1 = $request->letter1;
        $letter2 = $request->letter2;
        $letter3 = $request->letter3;
        $letter4 = $request->letter4;
        $letter5 = $request->letter5;
        $letter6 = $request->letter6;
        $letter7 = $request->letter7;
        $letter8 = $request->letter8;
        $letter9 = $request->letter9;
        $letter10 = $request->letter10;
        $letter11 = $request->letter11;
        $letter12 = $request->letter12;
        $letter13 = $request->letter13;
        $letter14 = $request->letter14;
        $letter15 = $request->letter15;
        $letter16 = $request->letter16;
        $letter17 = $request->letter17;
        $letter18 = $request->letter18;
        $letter19 = $request->letter19;
        $letter20 = $request->letter20;
        $letter21 = $request->letter21;
        $letter22 = $request->letter22;
        $letter23 = $request->letter23;
        $letter24 = $request->letter24;
        $letter25 = $request->letter25;



        $model = new HangmanEdit($letter0, $letter1, $letter2, $letter3, $letter4, $letter5, $letter6, $letter7, $letter8,
                                $letter9, $letter10, $letter11, $letter12, $letter13, $letter14, $letter15, $letter16, $letter17,
                                $letter18, $letter19, $letter20, $letter21, $letter22, $letter23, $letter24, $letter25);
        switch ($request->index){
            case ('A'):
                $model->setLetter0($value);
                break;
            case ('B'):
                $model->setLetter1($value);
                break;
            case ('C'):
                $model->setLetter2($value);
                break;
            case ('D'):
                $model->setLetter3($value);
                break;
            case ('E'):
                $model->setLetter4($value);
                break;
            case ('F'):
                $model->setLetter5($value);
                break;
            case ('G'):
                $model->setLetter6($value);
                break;
            case ('H'):
                $model->setLetter7($value);
                break;
            case ('I'):
                $model->setLetter8($value);
                break;
            case ('J'):
                $model->setLetter9($value);
                break;
            case ('K'):
                $model->setLetter10($value);
                break;
            case ('L'):
                $model->setLetter11($value);
                break;
            case ('M'):
                $model->setLetter12($value);
                break;
            case ('N'):
                $model->setLetter13($value);
                break;
            case ('O'):
                $model->setLetter14($value);
                break;
            case ('P'):
                $model->setLetter15($value);
                break;
            case ('Q'):
                $model->setLetter16($value);
                break;
            case ('R'):
                $model->setLetter17($value);
                break;
            case ('S'):
                $model->setLetter18($value);
                break;
            case ('T'):
                $model->setLetter19($value);
                break;
            case ('U'):
                $model->setLetter20($value);
                break;
            case ('V'):
                $model->setLetter21($value);
                break;
            case ('W'):
                $model->setLetter22($value);
                break;
            case ('X'):
                $model->setLetter23($value);
                break;
            case ('Y'):
                $model->setLetter24($value);
                break;
            case ('Z'):
                $model->setLetter25($value);
                break;
        }
        return $model;
    }

}
