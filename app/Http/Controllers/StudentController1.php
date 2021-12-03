<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController1 extends Controller
{

    public function index()
    {

        $students = Student::all(); //eloquent
        return view('students.index', compact('students'));
    }

    public function create(Request $request)
    {
        //dd($request);
        if($request->method()== 'POST') {
            $student = new Student();
            $student->cne = $request->post('cne');
            $student->firstName = $request->post('firstname');
            $student->secondName = $request->post('lastname');
            $student->age = $request->post('age');
            $student->Speciality = $request->post('Speciality');
            $student->save();
            return redirect(route('student.index'));
        }

        return view('students.create');
    }

    public function update($id, Request $request)
    {

        $student = Student::find($id);

        if($request->method()== 'POST') {
            $student->cne = $request->post('cne');
            $student->firstName = $request->post('firstname');
            $student->secondName = $request->post('lastname');
            $student->age = $request->post('age');
            $student->Speciality = $request->post('Speciality');
            $student->save();
            return redirect(route('student.index'));
        }

        $student = Student::find($id);
        return view('students.update', compact('student'));

    }

    public function delete($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect(route("student.index"));
    }
}
