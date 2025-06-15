<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Course;
use App\Models\Category;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */



       public function editP(Request $request): View
    {
        return view('profile.editP', [
            'user' => $request->user(),
        ]);
    }


    public function job()
    {
         $categories = Category::with('jobs')->get();

       $featuredCourses = Course::whereHas('category', function($query) {
    $query->where('name', 'Freelancing');
})->take(3)->get();


        return view('job', compact('categories', 'featuredCourses'));
    }

    public function show(Job $job)
    {
        $relatedCourses = Course::whereHas('categories', function($query) use ($job) {
            $query->whereIn('id', $job->category->pluck('id'));
        })->take(3)->get();

        return view('job', compact('job', 'relatedCourses'));
    }




    public function edit(Request $request): View
    {
        return view('user_profile.edit', [
            'user' => $request->user(),
        ]);
    }




    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }
       $user->bio = $request->input('bio', $user->bio);
    // $user->linkedin = $request->input('linkedin', $user->linkedin);
    // $user->phone = $request->input('phone', $user->phone);
    // $user->job_title = $request->input('job_title', $user->job_title);

    if ($request->hasFile('profile_photo')) {
        if ($user->profile_photo_path) {
            Storage::disk('public')->delete($user->profile_photo_path);
        }
        $path = $request->file('profile_photo')->store('profile_photos', 'public');
        $user->profile_photo_path = $path;
    }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }



//     public function update(ProfileUpdateRequest $request): RedirectResponse
// {
//     $user = $request->user();
//     $user->fill($request->validated());

//     $user->bio = $request->input('bio', $user->bio);
//     $user->linkedin = $request->input('linkedin', $user->linkedin);
//     $user->phone = $request->input('phone', $user->phone);
//     $user->job_title = $request->input('job_title', $user->job_title);

//     if ($request->hasFile('profile_photo')) {
//         if ($user->profile_photo_path) {
//             Storage::disk('public')->delete($user->profile_photo_path);
//         }
//         $path = $request->file('profile_photo')->store('profile_photos', 'public');
//         $user->profile_photo_path = $path;
//     }

//     if ($user->isDirty('email')) {
//         $user->email_verified_at = null;
//     }

//     $user->save();

//     return Redirect::route('profile.edit')->with('status', 'profile-updated');
// }

// public function update(ProfileUpdateRequest $request): RedirectResponse
// {
//     $user = $request->user();


//     $user->fill($request->safe()->only([
//         'name', 'email', 'bio', 'linkedin', 'phone', 'job_title','skills','portfolio'
//     ]));


//     if ($request->hasFile('profile_photo')) {

//         if ($user->profile_photo_path) {
//             Storage::disk('public')->delete($user->profile_photo_path);
//         }

//         // حفظ الصورة الجديدة
//         $user->profile_photo_path = $request->file('profile_photo')
//             ->store('profile_photos', 'public');
//     }

//     // إعادة التحقق من البريد الإلكتروني إذا تم تغييره
//     if ($user->isDirty('email')) {
//         $user->email_verified_at = null;
//     }

//     $user->save();

//     return Redirect::route('profile.edit')
//         ->with('status', 'profile-updated')
//         ->with('success', 'تم تحديث الملف الشخصي بنجاح');
// }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }



    public function photo(Request $request)
{
    $request->validate([
        'profile_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $user = Auth::user();

    // حذف الصورة القديمة لو موجودة
    if ($user->profile_photo_path && File::exists(public_path('images/profile_photos/' . $user->profile_photo_path))) {
        File::delete(public_path('images/profile_photos/' . $user->profile_photo_path));
    }

    // حفظ الصورة الجديدة
    $image = $request->file('profile_photo');
    $imageName = time() . '_' . $image->getClientOriginalName();
    $image->move(public_path('images/profile_photos'), $imageName);

    // تحديث مسار الصورة في جدول المستخدم
    $user->profile_photo_path = $imageName;
    $user->save();

    return redirect()->back()->with('success', 'تم تحديث صورة البروفايل.');
}



public function uploadProfileImage(Request $request)
{
    $request->validate([
        'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    if ($request->hasFile('profile_image')) {
        // إنشاء المجلد إذا لم يكن موجوداً
        if (!file_exists(public_path('profile_images'))) {
            mkdir(public_path('profile_images'), 0777, true);
        }

        // توليد اسم فريد للصورة
        $imageName = 'profile_' . time() . '.' . $request->profile_image->extension();

        // حفظ الصورة في public/profile_images
        $request->profile_image->move(public_path('profile_images'), $imageName);

        // تحديث مسار الصورة في قاعدة البيانات
        Auth::user()->update(['profile_photo_path' => 'profile_images/' . $imageName]);

        return response()->json(['success' => true]);
    }

    return response()->json(['success' => false]);
}

}




