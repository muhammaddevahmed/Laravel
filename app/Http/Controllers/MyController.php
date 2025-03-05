<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

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
}
