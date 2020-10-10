<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index(){

      $all_students = Student::all();

       return view('index', [
           'title' => 'Students',
           'students'=>$all_students,
        ]);
    }

    public function create(){
      return view('create');

    }

  public function detail(Request $request){

    $id = $request->input('student_id');
        $student = Student::find($id);

        return view(
            'detail', [
            'student' => $student,
            'title' => 'Student'
            ]
        );
      }

    public function edit(Request $request){

      $id = $request->input('student_id');
      $student = Student::find($id);

      return view(
          'edit', [
          'student' => $student,
          'title' => 'Student'
          ]
      );

    }

    public function delete(Request $request){
        $id = $request->input('student_id');
        $student = Student::find($id);

        $student->delete();
        return redirect()->route('index');

    }

    public function store(Request $request){
        $request->validate([
      'name' => 'required',
      'father_name' => 'required',
      'address' => 'required',
      'email' => 'required',
      'phone_number' => 'required',
        ]);

      Student::create($request->all());
      return redirect()->route('students.index')
                      ->with('success','student created successfully.');
    }

    public function update(Request $request){

      $id = $request->input('student_id');
      $student = Student::find($id);
      $request->validate([
      'name' => 'required',
      'father_name' => 'required',
      'address' => 'required',
      'email' => 'required',
      'phone_number' => 'required',
      ]);
      $student->name = $request->get('name');
      $student->father_name = $request->get('father_name');
      $student->address = $request->get('address');
      $student->email = $request->get('email');
      $student->phone_number = $request->get('phone_number');
      $student->Fee = $request->get('Fee');


    $student->save();

        return redirect()->route('students.index')

                ->with('success','Student updated successfully');
    }
}
