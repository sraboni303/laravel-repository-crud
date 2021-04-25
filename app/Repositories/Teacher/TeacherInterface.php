<?php

namespace App\Repositories\Teacher;

interface TeacherInterface
{
    public function store(array $data);

    public function all();

    public function get($teacher);

    public function update(array $data, $teacher);

    public function delete($teacher);
}
