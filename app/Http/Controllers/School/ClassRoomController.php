<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use App\Models\ClassRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClassRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classrooms = ClassRoom::where('school_id', Auth::id())
            ->orderBy('created_at', 'desc')
            ->get();

        return view('school.classrooms.index', compact('classrooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('school.classrooms.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'grade' => 'required|integer|min:1|max:12',
            'major' => 'nullable|string|max:255',
            'capacity' => 'nullable|integer|min:1',
            'academic_year' => 'required|string|max:20',
        ]);

        $validated['school_id'] = Auth::id();

        ClassRoom::create($validated);

        return redirect()->route('school.classrooms.index')
            ->with('success', 'Kelas berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(ClassRoom $classroom)
    {
        // Ensure the classroom belongs to the current school
        if ($classroom->school_id !== Auth::id()) {
            abort(403);
        }

        $students = $classroom->students()->paginate(10);

        return view('school.classrooms.show', compact('classroom', 'students'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ClassRoom $classroom)
    {
        // Ensure the classroom belongs to the current school
        if ($classroom->school_id !== Auth::id()) {
            abort(403);
        }

        return view('school.classrooms.edit', compact('classroom'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ClassRoom $classroom)
    {
        // Ensure the classroom belongs to the current school
        if ($classroom->school_id !== Auth::id()) {
            abort(403);
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'grade' => 'required|integer|min:1|max:12',
            'major' => 'nullable|string|max:255',
            'capacity' => 'nullable|integer|min:1',
            'academic_year' => 'required|string|max:20',
        ]);

        $classroom->update($validated);

        return redirect()->route('school.classrooms.index')
            ->with('success', 'Kelas berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ClassRoom $classroom)
    {
        // Ensure the classroom belongs to the current school
        if ($classroom->school_id !== Auth::id()) {
            abort(403);
        }

        // Check if classroom has students
        if ($classroom->students()->count() > 0) {
            return redirect()->route('school.classrooms.index')
                ->with('error', 'Kelas tidak dapat dihapus karena masih memiliki siswa.');
        }

        $classroom->delete();

        return redirect()->route('school.classrooms.index')
            ->with('success', 'Kelas berhasil dihapus.');
    }
}
