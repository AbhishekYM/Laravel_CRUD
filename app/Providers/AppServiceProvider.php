<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\StudentRepositoryInterface;  
use App\Repositories\StudentRepository;
use App\Repositories\Interfaces\TeacherRepositoryInterface;  
use App\Repositories\TeacherRepository;
class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(StudentRepositoryInterface::class,StudentRepository::class);
        $this->app->bind(TeacherRepositoryInterface::class,TeacherRepository::class);

    }
    public function boot(): void
    {
        
    }
}
