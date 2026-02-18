<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\ClassRoom;
use App\Models\Student;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $teacher = auth()->user();
        
        // Get classes assigned to this teacher
        $classrooms = ClassRoom::where('teacher_id', $teacher->id)
                               ->where('school_id', $teacher->school_id)
                               ->get();
        $totalStudents = Student::whereIn('classroom_id', $classrooms->pluck('id'))->count();
        
        return view('guru.dashboard', compact('teacher', 'classrooms', 'totalStudents'));
    }
}
