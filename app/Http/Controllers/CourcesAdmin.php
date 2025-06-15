<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;

class CourcesAdmin extends Controller
{
    //


public function index(Request $request)
{


    $courses = Course::query();
    $categories = Category::all();

    if ($request->filled('title')) {
        $courses->where('title', 'like', '%' . $request->title . '%');
    }



    $courses = $courses->paginate(10);

    return view('admin.courses.index', compact(['courses','categories']));
}


    /**
     * Show the form for creating a new resource.
     */
 public function create()
{
    $categories = Category::all(); // جلب كل الفئات
    return view('admin.courses.create', compact('categories'));
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
              'video_url' => 'required|url', // أو string حسب تنسيقك
        'category_id' => 'required|exists:categories,id',
        ]);

Course::create([
    'title' => $request->title,
    'description' => $request->description,
    'video_url' => $request->video_url,
    'category_id' => $request->category_id,
]);

        return redirect()->route('admin.courses.index')->with('success', 'Course created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $course = Course::findOrFail($id);

        return view('admin.courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',


        ]);

        $course = Course::findOrFail($id);
        $course->update($request->only('title', 'description', 'major_id'));

        return redirect()->route('admin.courses.index')->with('success', 'Course updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
        $course = Course::findOrFail($id);
        $course->delete();

        return redirect()->route('admin.courses.index')->with('success', 'Course deleted successfully.');
    }
}

