<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;

class MyController extends Controller
{
    public function selectArray(): View
    {
        $students = ["Ali", "Ahmed", "Aqsa", "Sidra"];
        return view('index', compact('students'));
    }

    public function selectUsers(): View
    {
        $allStudents = [
            ["Ali", "ali@gmail.com", "Karachi"],
            ["Hamza", "hamza@gmail.com", "Lahore"],
            ["Sana", "sana@gmail.com", "Islamabad"]
        ];
        return view('users', compact('allStudents'));
    }

    public function insertData(Request $req){
        $student = new Student();
        $student->name = $req->Name;
        $student->email = $req->Email;
        $student->password = $req->Password;
        $student->save();
        return redirect('insert');
    }
}
