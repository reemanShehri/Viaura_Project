<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;

class CourcesController extends Controller
{
    //

    public function cources(){
        return view('user_profile.cources');
    }


      public function index()
    {
        $categories = Category::with('courses')->get(); // جلب الكاتيجوري مع الكورسات التابعة
        return view('dashboard', compact('categories'));
    }
}
