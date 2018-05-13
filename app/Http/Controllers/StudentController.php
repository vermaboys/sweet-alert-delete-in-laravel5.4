<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class StudentController extends Controller
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
    function getStudentRecord(){
        $data=Student::select('id','name','roll_no','class')->get();
        return view('student_record')->with(['data'=>$data]);
    }
    function deleteStudentRecord($id){
        Student::where('id',$id)->delete();
    }
}
