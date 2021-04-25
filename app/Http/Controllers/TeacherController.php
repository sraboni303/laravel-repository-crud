<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeacherRequest;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Repositories\Teacher\TeacherInterface;

class TeacherController extends Controller
{



    protected $teacher;

    public function __construct(TeacherInterface $teacher)
    {
        $this->teacher = $teacher;
    }

    public function index()
    {
        $teachers = $this->teacher->all();
        return view('teacher.index', compact('teachers'));
    }


    public function create()
    {
        return view('teacher.create');
    }


    public function store(TeacherRequest $request)
    {
        $this->teacher->store($request->validated());
        session()->flash('message', 'Teacher Created');
        return back();
    }


    public function edit(Teacher $teacher)
    {
        return view('teacher.edit', compact('teacher'));
    }


    public function update(TeacherRequest $request, Teacher $teacher)
    {
        $this->teacher->update($request->validated(), $teacher);
        session()->flash('message', 'Teacher Updated...');
        return redirect()->route('teacher.index');
    }


    public function destroy(Teacher $teacher)
    {
        $this->teacher->delete($teacher);
        session()->flash('message', 'Teacher Deleted...');
        return back();
    }



}
