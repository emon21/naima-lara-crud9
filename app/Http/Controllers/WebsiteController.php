<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('crud.index');
    }
    public function student_process(Request $req)
    {
       //return $req->std_name;

        Student::create([
            'std_name' => $req->std_name,
            'std_email' => $req->email,
            'std_phone' => $req->std_phone,
            'std_address' => $req->std_address,
        ]);

        return redirect('student')->with('success','Data Created');


    }

    public function student_view()
    {

        $student = Student::all();
        return view('crud.view',compact('student'));
    }


    public function edit($id)
    {
        $student = Student::find($id);
        // return $student;
        return view('crud.edit',compact('student'));

    }

    public function update(Request $req)
    {


        $student = Student::find($req->id);

        $student->std_name = $req->std_name;
        $student->std_email = $req->email;
        $student->std_phone = $req->std_phone;
        $student->std_address = $req->std_address;
        $student->save();
        return redirect('student-list')->with('success','Data Update Successfully...');
    }

    public function studentDelete($id)
    {
        //  return $id;
    Student::where('id',$id)->delete();
    return redirect('student-list')->with('success','Data Delete');

    }
}
