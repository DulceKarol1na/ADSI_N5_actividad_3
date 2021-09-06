<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkingdayController extends Controller
{
    public function edit($id){

        $learner = Learner::find($id);
        $Workingdays = DB::table('workingdays')->orderBy('name','asc')->list('name','id');

        return view('learner.edit', compact('learner','workingdays'));

    }
}
