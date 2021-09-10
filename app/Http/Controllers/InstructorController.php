<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\InstruSena;
use App\Models\Learner;
use App\Models\Workingday;
use App\Models\Course;
use App\Models\Program;




class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $InstruSenas = InstruSena::all();
      return view('InstruSenas.index' ,compact('InstruSenas'));

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
  
        return view ('InstruSenas.create', compact('Workingdays', 'Programs', 'InstruSenas','Courses'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $InstruSena = InstruSena::create([
            'identificationnumber' => $request->input('identificationnumber'),
            'name'=> $request->input('name'),
            'lastaname'=> $request->input('lastaname'),
            'email'=> $request->input('email'),
            'program_id'=> $request->input('program_id'),
			'workingday_id'=> $request->input('workingday_id'),
            'courses_id'=> $request->input('courses_id'),
            'instructor_id'=> $request->input('instructor_id'),
        ]);
        return redirect()->route('InstruSenas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $InstruSena = InstruSena::find($id);
        $learner = Learner::find($id);
        $program = Program::find($id);
        $workingday = Workingday::find($id);
        return view('InstruSenas.show', compact('InstruSena','learner','program','workingday'));
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $InstruSena = InstruSena::find($id);
        $learner = Learner::find($id);
        $program = Program::find($id);
        $workingday = Workingday::find($id);

        return view('InstruSenas.edit', compact('InstruSena','learner','program','workingday'));
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
        $InstruSena = InstruSena::find($id)->update([
            'identificationnumber' => $request->input('identificationnumber'),
            'name'=> $request->input('name'),
            'lastaname'=> $request->input('lastaname'),
            'email'=> $request->input('email'),
            'program_id'=> $request->input('program_id'),
			'workingday_id'=> $request->input('workingday_id'),
            'courses_id'=> $request->input('courses_id'),
            'instructor_id'=> $request->input('instructor_id'),
        ]

        );
        return redirect()->route('InstruSenas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $InstruSena = InstruSena::find($id)->delete();
        
        return redirect()->route('InstruSenas.index');
    }
}
