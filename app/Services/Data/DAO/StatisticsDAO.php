<?php
namespace App\Services\Data;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\UserModel;

class StatisticsDAO {
    public function getAllStatistics(): \Illuminate\Support\Collection
    {
        return DB::table('users')
            ->select()
            ->get();
    }
    public function winTicTacToe(): void
    {

    }
    public function loseTicTacToe(): void
    {

    }
    public function bestTimeTicTacToe(): void
    {

    }
    public function bestScoreTicTacToe(): void
    {

    }
    public function winHangman(): void
    {

    }
    public function loseHangman(): void
    {

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
