<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\Category;
use Illuminate\Http\Request;

class JobController extends Controller
{
    // عرض قائمة الوظائف مع الفلترة والبحث
    public function index(Request $request)
    {
        $query = Job::query()->with('category');

        if ($request->filled('title')) {
            $query->where('title', 'like', '%' . $request->title . '%');
        }

        if ($request->filled('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        $jobs = $query->paginate(10);

        $categories = Category::all();

        return view('admin.jobs.index', compact('jobs', 'categories'));
    }

    // عرض نموذج إنشاء وظيفة جديدة
    public function create()
    {
        $categories = Category::all();
        return view('admin.jobs.create', compact('categories'));
    }




    // تخزين الوظيفة الجديدة في قاعدة البيانات
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
        ]);

        Job::create([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('admin.jobs.index')->with('success', 'Job created successfully.');
    }

    // عرض نموذج تعديل وظيفة موجودة
    public function edit($id)
    {
        $job = Job::findOrFail($id);
        $categories = Category::all();

        return view('admin.jobs.edit', compact('job', 'categories'));
    }

    // تحديث بيانات الوظيفة
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
        ]);

        $job = Job::findOrFail($id);
        $job->update([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('admin.jobs.index')->with('success', 'Job updated successfully.');
    }

    

    // حذف الوظيفة
    public function destroy($id)
    {
        $job = Job::findOrFail($id);
        $job->delete();

        return redirect()->route('admin.jobs.index')->with('success', 'Job deleted successfully.');
    }
}
