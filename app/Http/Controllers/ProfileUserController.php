<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ProfileUserController extends Controller
{
    //
    public function show(Request $request){


        $user = Auth::user();
        return view('user_profile.show', compact('user') );
    }



    public function edit()
    {
        $user = Auth::user();
        return view('user_profile.edit', compact('user'));
    }

    public function updatePhoto(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'profile_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // صورة فقط، حتى 2 ميغابايت
        ]);

        if ($request->hasFile('profile_photo')) {
            // حذف الصورة القديمة إذا موجودة
            if ($user->profile_photo_path) {
                Storage::disk('public')->delete($user->profile_photo_path);
            }

            // رفع الصورة الجديدة
            $path = $request->file('profile_photo')->store('profile-photos', 'public');

            // حفظ المسار في قاعدة البيانات
            $user->profile_photo_path = $path;
            $user->save();

            return redirect()->route('profile.show')->with('success', 'Profile photo updated successfully!');
        }

        return redirect()->back()->withErrors('No photo was uploaded');
    }
}

