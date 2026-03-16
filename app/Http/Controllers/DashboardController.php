<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;

class DashboardController extends Controller
{

    public function index()
    {
        // Count total students
        $students = Student::count();

        // Count total courses
        $courses = Course::count();

        // Get latest 5 students
        $latest = Student::latest()->take(5)->get();

        // Send data to dashboard view
        return view('dashboard', compact('students','courses','latest'));
    }

}