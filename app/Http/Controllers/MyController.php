<?php




namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
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
   
    
    public function insertData(Request $req): RedirectResponse
    {
    
        
            $req->validate([
                "Name" => "required|min:3|max:50|regex:/^[a-zA-Z\s]+$/",
                "Email" => "required|email|unique:students,email|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/",
                 "Password" => "required|min:6|regex:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$/"
            ]);
            
        
    
    
        if (Student::where('email', $req->Email)->exists()) {
            return back()->withErrors(['Email' => 'This email is already registered.']);
        }
    
        
        Student::create([
            "name" => $req->Name,
            "email" => $req->Email,
            "password" => $req->Password 
        ]);
    
        return redirect('insert')->with('success', 'User added successfully!');
    }
    public function selectStudents(): View{
        $allUsers = Student::all();
        return view('selectUsers',compact('allUsers'));
    }
    
}


?>