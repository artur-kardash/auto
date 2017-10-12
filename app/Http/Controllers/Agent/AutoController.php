<?php

namespace App\Http\Controllers\Agent;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mark;
use App\Type;
use App\Auto;
use Auth;

class AutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('agent.auto.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marks = Mark::all();
        return view('agent.auto.create')->withMarks($marks);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $auto = new Auto();
        $auto->mark = Mark::where('id', $request->mark)->pluck('title')->first();
        $auto->type = Type::where('id', $request->type)->pluck('title')->first();
        $auto->agent_id = Auth::user()->agent->id;
        $auto->save();
        return redirect()->route('auto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $auto = Auto::find($id);
        $marks = Mark::all();
        $types = Type::all();
        return view('agent.auto.edit')->withAuto($auto)->withMarks($marks)->withTypes($types);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $auto = Auto::find($id);
        $auto->mark = Mark::where('id', $request->mark)->pluck('title')->first();
        $auto->type = Type::where('id', $request->type)->pluck('title')->first();
        $auto->save();

        return redirect()->route('auto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $auto = Auto::find($id)->delete();

        return redirect()->route('auto.index');
    }

    public function selectType(Request $request)
    {
        $types = Type::where('mark_id', $request->id)->get();
        return view('agent.auto.ajax.ajaxType')->withTypes($types);
    }
}
