<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\College;
use App\Models\Lecture;
use App\Models\UserActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    //




     public function index()
    {
        $courses = Course::with('category')->get();

        return view('dashboard', compact('courses'));
    }

}
