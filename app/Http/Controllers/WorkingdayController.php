<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkingdayController extends Controller
{
    public function edit($id){

        $learner = Learner::find($id);
        $workingdays = Workingdays::find($id);

        return view('learner.edit', compact('learner','workingdays'));

    }
}
