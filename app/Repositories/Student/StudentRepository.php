<?php

namespace App\Repositories\Student;

use App\Models\Student;
use PHPUnit\Framework\MockObject\Builder\Stub;

class StudentRepository implements StudentInterface
{
    public function store(array $data)
    {
        return Student::create($data);
    }

    public function all()
    {
        return Student::all();
    }

    public function get($student)
    {
        return 'get';
    }

    public function update(array $data, $student)
    {
        return $student->update($data);
    }

    public function delete($student)
    {
        return $student->delete();
    }
}

