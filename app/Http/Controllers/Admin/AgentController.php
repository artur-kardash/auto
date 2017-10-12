<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Session;
use Hash;
use Image;
use App\Agency;
use Auth;
use App\Agent;

class AgentController extends Controller
{
    public function index()
    {
        $allagent = Agent::where('agency_id', '=', null)->get();
        return view('admin.agent.index')->withAllagent($allagent);
    }

    public function addInAgency($id)
    {
        $agencies['agency'] = Agency::all();
        $agencies['id'] = $id;

        return view('admin.agent.addinformation')->withAgencies($agencies);

    }

    public function createAgency($id)
    {
        return view('admin.agent.createagency')->withId($id);
    }

    public function updateinform(Request $request)
    {
        $user_id = Agent::find($request->id);

        $agency = new Agency();
        $agency->agency_name = $request->name_of_agency;
        $agency->subdomain = $request->subdomain;
        $agency->user_id = $user_id->user_id;

        $agency->save();

//        $agent_id = Agent::where('id', '=', $request->id)->first();

        $agent = Agent::where('user_id', '=', $user_id->user_id);
        $agent->delete();

        $user = User::where('id', '=', $user_id->user_id)->first();

        $user->role_id = '2';
        $user->save();
        Session::flash('success', 'Agent added in agency!');

        return redirect()->route('admin.allagents');
    }

    public function allAgencies()
    {
        $allagencies = User::where('role_id', '=', '2')->get();

        return view('admin.agent.allagencies')->withAllagencies($allagencies);
    }

    public function createinform(Request $request)
    {
        $agent = Agent::where('id', '=', $request->id)->first();
        $agent->agency_id = $request->agency;
        $agent->save();
        Session::flash('success', 'Agent added in agency!');

        return redirect()->route('admin.allagents');
    }

    public function deleteBroker(Request $request)
    {
        $agent = Agent::where('id', '=', $request->id)->first();
        User::where('id', '=', $agent->user_id)->delete();
        Agent::where('id', '=', $request->id)->delete();
        return redirect()->route('admin.allagents');
    }

    public function deleteBrokerage()
    {
        $agency_id = $_POST['agency_id'];
        Agency::where('user_id', '=', $agency_id)->delete();
        User::where('id', '=', $agency_id)->delete();
        echo 'success';
    }

    public function assigned_broker()
    {
        $agency = Agency::where('user_id', '=', $_POST['old_id'])->first();
        $agencys_new = Agency::where('user_id', '=', $_POST['new_agency'])->first();
        $agents = Agent::where('agency_id', '=', $agency->id)->get();
        foreach($agents as $agent){
            $agent->agency_id = $agencys_new->id;
            $agent->save();
        }
        Agency::where('user_id', '=', $_POST['old_id'])->delete();
        User::where('id', '=', $_POST['old_id'])->delete();
        return redirect()->route('admin.allagencies');
    }



}
