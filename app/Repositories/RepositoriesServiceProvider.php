<?php

namespace App\Repositories;

use App\Models\Teacher;
use App\Repositories\Student\StudentInterface;
use App\Repositories\Student\StudentRepository;
use App\Repositories\Teacher\TeacherInterface;
use App\Repositories\Teacher\TeacherRepository;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            StudentInterface::class,
            StudentRepository::class,
        );

        $this->app->bind(
            TeacherInterface::class,
            TeacherRepository::class,
        );
    }
}
