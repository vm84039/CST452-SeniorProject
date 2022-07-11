<?php
/*Vinson Martin CST-451
Brain Games App
StatisticsDAO
Stores Statistics information in Database */
namespace App\Services\Data\DAO;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\UserModel;
use App\Models\StatisticsModel;

class StatisticsDAO {

    public function addUser(mixed $id){
        DB::table('statistics')->insert([
            'userID' => $id,
            'tttWins' => 0,
            'tttLosses' => 0,
            'tttTies' => 0,
            'tttBestTime' => 0,
            'hWins' => 0,
            'hLosses' => 0,
            'hBestTime' => 0,
        ]);
    }
    public function getAllStatistics(): \Illuminate\Support\Collection
    {
        return DB::table('statistics')
            ->select()
            ->get();
    }
    public function resetStatistics(mixed $id): void
    {
        DB::table('statistics')->where('userID', '=', $id)
        ->update([
            'userId' => $id,
            'tttWins' => 0,
            'tttLosses' => 0,
            'tttTies' => 0,
            'tttBestTime' => NULL,
            'hWins' => 0,
            'hLosses' => 0,
            'hBestTime' => NULL,
        ]);

    }
    public function getStatistics($id): StatisticsModel
    {

        $rows = DB::table('statistics')
            ->where ('userId', '=', $id)->get();
        if ($rows->count() == 0){
            $statistics = new StatisticsModel();
            $statistics->setID($id);
            DB::table('statistics')->insert([
                'userId' => $id,
                'tttWins' => 0,
                'tttLosses' => 0,
                'tttTies' => 0,
                'tttBestTime' => NULL,
                'hWins' => 0,
                'hLosses' => 0,
                'hBestTime' => NULL,
            ]);
        }
        else {
            $row = $rows->first();
            $statistics = new statisticsModel();
            $statistics->setId($row->id);
            $statistics->setTttWins($row->tttWins);
            $statistics->setTttLosses($row->tttLosses);
            $statistics->setTttTies($row->tttTies);
            $statistics->setTttBestTime($row->tttBestTime);
            $statistics->setHangmanWins($row->hWins);
            $statistics->setHangmanLosses($row->hLosses);
            $statistics->setHangmanBestTime($row->hBestTime);
        }
        return $statistics;
    }
    public function winTicTacToe(mixed $id, mixed $time): int
    {
        DB::table('statistics')
            ->where('userID', '=', $id)
            ->increment('tttWins');

        return DB::table('statistics')-> where([
                ['userID', '=', $id],
                ['tttBestTime', '>', $time],
            ])
            ->orWhere('tttBestTime', '=', NULL)
            ->update(['tttBestTime'=>$time]);

    }
    public function loseTicTacToe(mixed $id): void
    {
        DB::table('statistics')
            ->where('userID', '=', $id)
            ->increment('tttLosses');

    }
    public function tieTicTacToe(mixed $id): void
    {
        DB::table('statistics')
            ->where('userID', '=', $id)
            ->increment('tttTies');

    }
    public function bestTimeTicTacToe(): void
    {

    }
    public function bestScoreTicTacToe(): void
    {

    }
    public function winHangman(mixed $id, mixed $time): int
    {
        DB::table('statistics')
            ->where('userID', '=', $id)
            ->increment('HWins');

        return DB::table('statistics')-> where([
            ['userID', '=', $id],
            ['hBestTime', '>', $time],
        ])
            ->orWhere('hBestTime', '=', NULL)
            ->update(['hBestTime'=>$time]);

    }
    public function loseHangman(mixed $id): void
    {
        DB::table('statistics')
            ->where('userID', '=', $id)
            ->increment('hLosses');

    }
    public function bestTimeHangman(): void
    {

    }
    public function bestScoreHangman(): void
    {

    }
    public function winPeg(): void
    {

    }
    public function losePeg(): void
    {

    }
    public function bestTimePeg(): void
    {

    }
    public function bestScorePeg(): void
    {

    }

}
