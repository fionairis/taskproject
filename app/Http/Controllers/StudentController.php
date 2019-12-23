<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use DB;
class StudentController extends Controller
{
    public function add(){
        return view('admin.student');
}
public function store(Request $request){
    $this->validate($request,['first_name'=>'required','last_name'=>'required','address'=>'required']);
    $student=new Student(); 
    $student->first_name = $request->first_name;
    $student->last_name = $request->last_name;
    $student->address = $request->address;
    $student->save();
    return redirect('index');
}
}