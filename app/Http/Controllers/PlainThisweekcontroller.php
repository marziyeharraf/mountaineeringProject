<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PlainsThisweek;

class PlainThisweekcontroller extends Controller
{
    public function getadmincreate()
    {
        return view('admin.createPlainsThisweek');
    }

    public function getadminedit()
    {
        $PlainsThisweek = PlainsThisweek::find(1);
        return view('admin.editPlainsThisweek',['PlainsThisweek'=>$PlainsThisweek]);
    }

    public function postadminupdate(Request $request)
    {
        $this->validate($request, ['title' => 'required|min:3',
        ]);
        $PlainsThisweek = PlainsThisweek::find($request->input('id'));
        $PlainsThisweek->title = $request->input('title');
        $PlainsThisweek->place = $request->input('place');
        $PlainsThisweek->date = $request->input('date');
        $PlainsThisweek->time = $request->input('time');
        $PlainsThisweek->countplains = $request->input('countplains');
        $PlainsThisweek->averageplains = $request->input('averageplains');
        $PlainsThisweek->save();
        return redirect()->route('admin.index')->with('info', 'post updated successfully.title is' . $request->input('title'));
    }
}
