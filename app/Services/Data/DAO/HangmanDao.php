<?php
namespace App\Services\Data\DAO;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\UserModel;


class HangmanDao {
    public function selectWord(mixed $id) {
        $rows = DB::table('hangman')
            ->where ('id', '=', $id)->get();
        $row = $rows->first();
        return $row->word;
    }
}
