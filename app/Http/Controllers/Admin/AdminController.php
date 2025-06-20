<?php

namespace App\Http\Controllers\Admin;

use App\Models\Job;
use App\Models\File;
use App\Models\Post;
use App\Models\User;
use App\Models\Major;
use App\Models\Course;
use App\Models\College;
use App\Models\Comment;
use App\Models\Lecture;
use App\Models\Student;
use App\Models\Category;
use App\Models\University;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
        $name = auth()->user()->name;

        $coursesCount = Course::count();
$categoriesCount = Category::count();
$adminsCount= User::where('role', 'admin')->count();

$jobsCount = Job::count(); // Assuming you have a Job model

        $usersCount = User::count();
        // return view('admin.dashboard', compact('name', 'universitiesCount', 'studentsCount', 'coursesCount', 'majorsCount', 'collegesCount', 'usersCount', 'postsCount', 'commentsCount', 'lecturesCount','filesCount'));



    // إحصائيات التسجيلات الشهرية (آخر 6 شهور)
    $registrationsMonthly = User::selectRaw("DATE_FORMAT(created_at, '%Y-%m') as month, count(*) as count")
    ->where('created_at', '>=', now()->subMonths(6))
    ->groupBy('month')
    ->orderBy('month')
    ->get();

// أكثر الكورسات تسجيلًا
$topCourses = Course::withCount('users')
    ->orderBy('users_count', 'desc')
    ->take(5)
    ->get();





return view('admin.dashboard', compact(
    'name', 'coursesCount',  'usersCount','categoriesCount','jobsCount',
    'registrationsMonthly', 'topCourses','adminsCount',
));
    }





    public function showAdmins()
    {
        // نجيب كل الأدمنز فقط
        $admins = User::where('role', 'admin')->get();

        return view('admin.admins.index', compact('admins'));
    }




    public function destroyAdmin(User $user)
    {
        // ما نخلي الادمن الحالي يحذف نفسه
        if(auth()->id() == $user->id) {
            return redirect()->route('admin.admins.index')->with('error', 'You cannot delete yourself.');
        }

        $user->delete();

        return redirect()->route('admin.admins.index')->with('success', 'Admin deleted successfully.');
    }


    public function demoteAdmin(User $user)
    {
        // منع الادمن من تخفيض نفسه
        if(auth()->id() == $user->id) {
            return redirect()->route('admin.admins.index')->with('error', 'You cannot demote yourself.');
        }

        $user->role = 'student';
        $user->save();

        return redirect()->route('admin.admins.index')->with('success', 'Admin demoted to user successfully.');
    }



    public function createAdmin()
    {
        // جلب المستخدمين اللي مش أدمن
        $users = User::where('role', '!=', 'admin')->get();
        return view('admin.admins.create', compact('users'));
    }

    // تخزين أدمن جديد
    public function storeAdmin(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
        ]);

        $user = User::findOrFail($request->user_id);
        $user->role = 'admin';  // تعيين الدور أدمن
        $user->save();

        return redirect()->route('admin.admins.index')->with('success', 'User promoted to admin successfully.');
    }

    public function editAdmin($id)
    {
        $admin = User::findOrFail($id);
        return view('admin.admins.edit', compact('admin'));
    }


    // تحديث بيانات الأدمن
       // Update admin role or info
    public function updateAdmin(Request $request, $id)
    {
        $request->validate([
            'role' => 'required|in:user,admin',
        ]);

        $admin = User::findOrFail($id);
        $admin->role = $request->role;
        $admin->save();

        return redirect()->route('admin.admins.index')->with('success', 'Admin updated successfully.');
    }


}
