<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Student;

class StudentController extends Controller
{
    public function index(){
        $student_data = Student::all();
        return view('student_index', ['student_data' => $student_data]);
    }

    public function create(Request $request){
        \App\Student::create($request->all());
        return redirect('/student');
    }

    public function edit($id){
        $edit_student = Student::findOrFail($id);
        return view('edit_student', ['edit_student' => $edit_student]);
    }

    public function update(Request $request, $id){
        $update_student = Student::findOrFail($id);
        $update_student->update($request->all());
        return redirect('/student');
    }

    public function delete($id){
        $delete_siswa = Student::findOrFail($id);
        $delete_siswa->delete();
        return redirect('/student');
    }
}
