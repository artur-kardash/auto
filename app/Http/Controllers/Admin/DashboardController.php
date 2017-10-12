<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Agent;

class DashboardController extends Controller
{
    public function index()
    {
        $agents = Agent::all();
        return view('admin.agent.index')->withAgents($agents);
    }
}
