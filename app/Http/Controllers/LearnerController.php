<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Learner;
use App\Models\Workingday;
use App\Models\Course;
use App\Models\Program;
use App\Models\InstruSena;

class LearnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $learners = Learner::all();
      return view('learners.index' ,compact('learners'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $Workingdays = Workingday::all();
       $Programs = Program::all(); 
       $InstruSenas = InstruSena::all(); 
       $Courses = Course::all();
       return view ('learners.create', compact('Workingdays', 'Programs', 'InstruSenas','Courses'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $learner = Learner::create([
            'identificationnumber' => $request->input('identificationnumber'),
            'name'=> $request->input('name'),
            'lastaname'=> $request->input('lastaname'),
            'email'=> $request->input('email'),
            'workingday_id'=> $request->input('workingday_id'),
            'program_id'=> $request->input('program_id'),
            'course_id'=> $request->input('course_id'),
            'instructor_id'=> $request->input('instructor_id'),
        ]);
        return redirect()->route('learners.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $learner = Learner::find($id);
        $program = Program::find($id);
        $instruSena = InstruSena::find($id);
        $workingday = Workingday::find($id);
        return view('learners.show', compact('learner','program','instruSena','workingday'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $learner = Learner::find($id);
        $program = Program::find($id);
        $course = Course::find($id);
        $instruSena = InstruSena::find($id);
        $workingday = Workingday::find($id);
        return view('learners.edit', compact('learner','program','instruSena','workingday','course'));
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
        $learner = Learner::find($id)->update([
            'identificationnumber' => $request->input('identificationnumber'),
            'name'=> $request->input('name'),
            'lastaname'=> $request->input('lastaname'),
            'email'=> $request->input('email'),
            'workingday_id'=> $request->input('workingday_id'),
            'program_id'=> $request->input('program_id'),
            'course_id'=> $request->input('course_id'),
            'instructor_id'=> $request->input('instructor_id'),
        ]

        );
        return redirect()->route('learners.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $learner = Learner::find($id)->delete();
        
        return redirect()->route('learners.index');
    }
}
