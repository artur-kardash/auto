<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->role->name == 'Admin'){
            return redirect()->route('admin.index');
        }
        elseif(Auth::user()->role->name == 'Agent'){
            return redirect()->route('agent.index');
        }else{
            return view('auth.login');
        }

    }
}
