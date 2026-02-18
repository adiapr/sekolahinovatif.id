<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Hanya tampilkan guru yang terkait dengan sekolah ini
        $teachers = Teacher::guru()
            ->where('school_id', auth()->id())
            ->orderBy('name')
            ->paginate(10);
        return view('school.teachers.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('school.teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'subject' => 'required|string|max:255',
            'nip' => 'nullable|string|max:50|unique:users',
            'whatsapp_number' => 'nullable|string|max:20',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['role'] = 'guru';
        $validatedData['school_id'] = auth()->id(); // Tambahkan school_id

        Teacher::create($validatedData);

        return redirect()->route('school.teachers.index')
            ->with('success', 'Data guru berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teacher = Teacher::guru()
            ->where('school_id', auth()->id())
            ->findOrFail($id);
        return view('school.teachers.show', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teacher = Teacher::guru()
            ->where('school_id', auth()->id())
            ->findOrFail($id);
        return view('school.teachers.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $teacher = Teacher::guru()
            ->where('school_id', auth()->id())
            ->findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($teacher->id),
            ],
            'password' => 'nullable|string|min:8|confirmed',
            'subject' => 'required|string|max:255',
            'nip' => [
                'nullable',
                'string',
                'max:50',
                Rule::unique('users')->ignore($teacher->id),
            ],
            'whatsapp_number' => 'nullable|string|max:20',
        ]);

        if (!empty($validatedData['password'])) {
            $validatedData['password'] = Hash::make($validatedData['password']);
        } else {
            unset($validatedData['password']);
        }

        $teacher->update($validatedData);

        return redirect()->route('school.teachers.index')
            ->with('success', 'Data guru berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $teacher = Teacher::guru()
            ->where('school_id', auth()->id())
            ->findOrFail($id);
        $teacher->delete();

        return redirect()->route('school.teachers.index')
            ->with('success', 'Data guru berhasil dihapus.');
    }
}
