<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        $data = Student::get();
        //return $data;
        return view('student-list',compact('data'));
    }
    public function addStudent(){
        return view('add-student');
    }
    public function saveStudent(Request $request){
        $request->validate([
            'student_id'=> 'required|integer',
            'name'=> 'required',
            'surname'=> 'required',
            'faculty'=> 'required',
            'major'=> 'required',
        ]);

        $student_id = $request->student_id;
        $name = ucfirst($request->name);
        $surname = ucfirst($request->surname);
        $faculty = $request->faculty;
        $major = $request->major;

        $stu = new Student();
        $stu->student_id = $student_id;
        $stu->name = $name;
        $stu->surname = $surname;
        $stu->faculty = $faculty;
        $stu->major = $major;
        $stu->save();

        return redirect()->back()->with('success','Student Added Successfully!');
    }

    public function editStudent($id){
        $data = Student::where('id','=',$id)->first();
        return view('edit-student',compact('data'));
    }
    public function updateStudent(Request $request){
        $request->validate([
            'student_id'=> 'required|integer',
            'name'=> 'required',
            'surname'=> 'required',
            'faculty'=> 'required',
            'major'=> 'required',
        ]);

        $id = $request->id;
        $student_id = $request->student_id;
        $name = ucfirst($request->name);
        $surname = ucfirst($request->surname);
        $faculty = $request->faculty;
        $major = $request->major;

        Student::where('id','=',$id)->update([
            'student_id'=> $student_id,
            'name'=> $name,
            'surname'=> $surname,
            'faculty'=> $faculty,
            'major'=> $major,
        ]);
        return redirect()->back()->with('success','Student Update Successfully!');
    }

    public function deleteStudent($id){
        Student::where('id','=',$id)->delete();
        return redirect()->back()->with('success','Student Delete Successfully!');
    }
}
