<?php

namespace App\Repositories\Teacher;

use App\Models\Teacher;
use PHPUnit\Framework\MockObject\Builder\Stub;

class TeacherRepository implements TeacherInterface
{
    public function store(array $data)
    {
        return Teacher::create($data);
    }

    public function all()
    {
        return Teacher::all();
    }

    public function get($teacher)
    {
        return 'get';
    }

    public function update(array $data, $teacher)
    {
        return $teacher->update($data);
    }

    public function delete($teacher)
    {
        return $teacher->delete();
    }
}
