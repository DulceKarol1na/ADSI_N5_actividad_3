<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\Workingday;
use App\Models\Learner;
use App\Models\Course;
use App\Models\Program;
use App\Models\InstruSena;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Reports = Report::all();
      return view('reports.index' ,compact('Reports'));

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
       return view ('reports.create',compact('Workingdays', 'Programs', 'InstruSenas','Courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Report = Report::create([
            'identificationnumber' => $request->input('identificationnumber'),
            'name'=> $request->input('name'),
            'lastaname'=> $request->input('lastaname'),
            'email'=> $request->input('email'),
            'type'=> $request->input('type'),
            'workingday_id'=> $request->input('workingday_id'),
            'program_id'=> $request->input('program_id'),
            'course_id'=> $request->input('course_id'),
            'instructors_id'=> $request->input('instructors_id'),
        ]);
        return redirect()->route('reports.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Report = Report::find($id);
        $learner = Learner::find($id);
        $program = Program::find($id);
        $instruSena = InstruSena::find($id);
        $workingday = Workingday::find($id);
        return view('reports.show', compact('Report','learner','program','instruSena','workingday'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Report = Report::find($id);
         return view('reports.edit', compact('Report'));
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
        $Report = Report::find($id)->update([
            'identificationnumber' => $request->input('identificationnumber'),
            'name'=> $request->input('name'),
            'lastaname'=> $request->input('lastaname'),
            'email'=> $request->input('email'),
            'type'=> $request->input('type'),
            'workingday_id'=> $request->input('workingday_id'),
            'program_id'=> $request->input('program_id'),
            'course_id'=> $request->input('course_id'),
            'instructors_id'=> $request->input('instructors_id'),
        ]

        );
        return redirect()->route('reports.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Report = Report::find($id)->delete();
        
        return redirect()->route('reports.index');
    }
}
