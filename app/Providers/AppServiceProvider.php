<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Studentlist;
use App\Models\Subject;
use Illuminate\Support\Facades\Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer(['Student.*'], function ($view) {
            $subjects = [];

            if (Session::has('studentlist_id')) {
                $student = Studentlist::find(Session::get('studentlist_id'));

                if ($student) {
                    $subjects = Subject::where('department_id', $student->department_id)
                        ->where('semester', $student->semester)
                        ->get();
                }
            }

            $view->with('popularSubjects', $subjects);
        });
    }
}
