<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    // عرض جميع الفئات مع فلترة
    public function index(Request $request)
    {
        $query = Category::query();

        // فلترة حسب الاسم
        if ($request->filled('category_name')) {
            $query->where('name', 'like', '%' . $request->category_name . '%');
        }

        $categories = $query->paginate(10)->withQueryString();

        return view('admin.category.index', compact('categories'));
    }

    // عرض صفحة إنشاء فئة جديدة
    public function create()
    {
        return view('admin.category.create');
    }

    // حفظ الفئة الجديدة في قاعدة البيانات
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name',
        ]);

        Category::create([
            'name' => $request->name,
        ]);

        return redirect()->route('admin.categories.index')->with('success', 'Category created successfully.');
    }

    // عرض صفحة تعديل فئة
    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    // تحديث بيانات الفئة
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name,' . $category->id,
        ]);

        $category->update([
            'name' => $request->name,
        ]);

        return redirect()->route('admin.categories.index')->with('success', 'Category updated successfully.');
    }

    // حذف فئة
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('admin.categories.index')->with('success', 'Category deleted successfully.');
    }
}
