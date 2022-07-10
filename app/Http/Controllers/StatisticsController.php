<?php

namespace App\Http\Controllers;

use App\Services\Data\DAO\StatisticsDAO;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Foundation\Application;

class StatisticsController extends Controller
{
    public function resetStatistics(): Factory|View|Application
    {
        $StatisticsDao = new StatisticsDAO();
        $StatisticsDao->resetStatistics(Auth::ID());
        return view("role-member/statistics");
    }
}
