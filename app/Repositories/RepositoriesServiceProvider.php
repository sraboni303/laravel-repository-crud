<?php

namespace App\Repositories;

use App\Repositories\Student\StudentInterface;
use App\Repositories\Student\StudentRepository;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            StudentInterface::class,
            StudentRepository::class,
        );
    }
}
