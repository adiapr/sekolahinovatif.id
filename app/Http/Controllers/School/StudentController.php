<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\ClassRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::with('classroom')
            ->whereHas('classroom', function($query) {
                $query->where('school_id', Auth::id());
            })
            ->orderBy('created_at', 'desc')
            ->get();

        return view('school.students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $classrooms = ClassRoom::where('school_id', Auth::id())->get();
        return view('school.students.create', compact('classrooms'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'nis' => 'required|string|max:50|unique:students',
            'class_room_id' => 'required|exists:class_rooms,id',
            'nisn' => 'nullable|string|max:50|unique:students',
            'email' => 'nullable|email|unique:students',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string',
            'birth_date' => 'nullable|date',
            'birth_place' => 'nullable|string|max:255',
            'gender' => 'nullable|in:L,P',
            'parent_name' => 'nullable|string|max:255',
            'parent_phone' => 'nullable|string|max:20',
            'entry_year' => 'nullable|integer|min:2000|max:' . (date('Y') + 1),
        ]);

        // Verify classroom belongs to current school
        $classroom = ClassRoom::findOrFail($validated['class_room_id']);
        if ($classroom->school_id !== Auth::id()) {
            abort(403);
        }

        Student::create($validated);

        return redirect()->route('school.students.index')
            ->with('success', 'Siswa berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        // Ensure the student belongs to current school
        if ($student->classroom->school_id !== Auth::id()) {
            abort(403);
        }

        return view('school.students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        // Ensure the student belongs to current school
        if ($student->classroom->school_id !== Auth::id()) {
            abort(403);
        }

        $classrooms = ClassRoom::where('school_id', Auth::id())->get();
        return view('school.students.edit', compact('student', 'classrooms'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        // Ensure the student belongs to current school
        if ($student->classroom->school_id !== Auth::id()) {
            abort(403);
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'nis' => 'required|string|max:50|unique:students,nis,' . $student->id,
            'class_room_id' => 'required|exists:class_rooms,id',
            'nisn' => 'nullable|string|max:50|unique:students,nisn,' . $student->id,
            'email' => 'nullable|email|unique:students,email,' . $student->id,
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string',
            'birth_date' => 'nullable|date',
            'birth_place' => 'nullable|string|max:255',
            'gender' => 'nullable|in:L,P',
            'parent_name' => 'nullable|string|max:255',
            'parent_phone' => 'nullable|string|max:20',
            'entry_year' => 'nullable|integer|min:2000|max:' . (date('Y') + 1),
        ]);

        // Verify new classroom belongs to current school
        $classroom = ClassRoom::findOrFail($validated['class_room_id']);
        if ($classroom->school_id !== Auth::id()) {
            abort(403);
        }

        $student->update($validated);

        return redirect()->route('school.students.index')
            ->with('success', 'Data siswa berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        // Ensure the student belongs to current school
        if ($student->classroom->school_id !== Auth::id()) {
            abort(403);
        }

        $student->delete();

        return redirect()->route('school.students.index')
            ->with('success', 'Data siswa berhasil dihapus.');
    }
}
