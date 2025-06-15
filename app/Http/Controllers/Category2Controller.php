<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class Category2Controller extends Controller
{
    //

    public function show($id)
    {
        $category = Category::with('courses')->findOrFail($id);

        return view('category.show', compact('category'));
    }
}
