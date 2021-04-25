<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;
use App\Repositories\Student\StudentInterface;
use PHPUnit\Framework\MockObject\Builder\Stub;

class StudentController extends Controller
{
    protected $student;

    public function __construct(StudentInterface $student)
    {
        $this->student = $student;
    }

    public function index()
    {
        $students = $this->student->all();
        return view('student.index', compact('students'));
    }


    public function create()
    {
        return view('student.create');
    }


    public function store(Request $request)
    {
        $this->student->store($request->all());
        session()->flash('message', 'Student Created');
        return back();
    }


    public function show($id)
    {
        return view('student.show');
    }


    public function edit(Student $student)
    {
        $student = Student::find($student);
        return view('student.edit', compact('student'));
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy(Student $student)
    {
        $this->student->delete($student);
        session()->flash('message', 'Student Deleted...');
        return back();
    }
}
