<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Show the registration form.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        return view('register');
    }

    /**
     * Store a newly registered student in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create the new student record
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->password = bcrypt($request->password);
        $student->save();

        // Redirect to a success page or back to the form
        return redirect()->route('register')->with('success', 'Student registered successfully!');
    }
}
