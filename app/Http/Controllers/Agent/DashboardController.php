<?php

namespace App\Http\Controllers\Agent;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Auto;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $count['auto'] = Auto::where('agent_id', Auth::user()->agent->id)->count();
        return view('agent.dashboard.index')->withCount($count);
    }
}
