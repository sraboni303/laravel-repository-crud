<?php

namespace App\Repositories\Student;

interface StudentInterface
{
    public function store(array $data);

    public function all();

    public function get($student);

    public function update(array $data, $student);

    public function delete($student);
}
