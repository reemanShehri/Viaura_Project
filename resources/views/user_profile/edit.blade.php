<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="{{ asset('Front/CSS/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Front/CSS/bootstrap.min.css') }}">
    <link rel="website icon" href="{{ asset('Front/images/LOGO.svg') }}">
    <link rel="stylesheet" href="{{ asset('Front/CSS/edit-profile.css') }}">
    <style>
        /* تنسيقات الفورم فقط مع الحفاظ على القديم */
        .container.w-70 {
            padding: 20px;
        }

        .mt-1.block.w-full {
            width: 100%;
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-top: 8px;
            font-size: 1rem;
        }

        .mt-1.block.w-full:focus {
            border-color: #4a90e2;
            outline: none;
            box-shadow: 0 0 0 2px rgba(74, 144, 226, 0.2);
        }

        .flex.items-center.gap-4 {
            margin-top: 20px;
        }

        .text-sm.text-gray-600 {
            margin-left: 10px;
            font-size: 0.9rem;
        }

        .p-6 {
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            margin-top: 30px;
            border: 1px solid #eee;
        }

        .text-lg.font-medium {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .mt-1.text-sm {
            margin-top: 10px;
            font-size: 0.9rem;
            color: #666;
        }

        .mt-6.flex.justify-end {
            margin-top: 20px;
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }

        /* تحسين المسافات بين الفورمس */
        form.mt-6.space-y-6 {
            margin-bottom: 40px;
        }



/* سيؤثر على جميع أزرار x- */
[x-primary-button],
[x-danger-button],
[x-secondary-button] {
    background-color: #6a0dad !important;
    color: #000 !important;
    border: 1px solid #000 !important;
    padding: 10px 20px;
    border-radius: 5px;
    transition: all 0.3s ease;
}

[x-primary-button]:hover,
[x-danger-button]:hover,
[x-secondary-button]:hover {
    background-color: #5a0b9d !important;
    color: #0a0202 !important;
}

/* تخصيص زر الخطر */
[x-danger-button] {
    background-color: #d32f2f !important;
}

/* تخصيص الزر الثانوي */
[x-secondary-button] {
    background-color: #757575 !important;
}

    </style>
</head>

<body>
    <aside class="sidebar-header d-inline-block" data-aos="fade-right" data-aos-duration="500">
        <nav>
            <ul>
                <li class="mb-4" data-aos="fade-right" data-aos-duration="500" data-aos-delay="200"><a href="#" class="active fw-700"><i class="fa-solid fa-pen me-2"></i> Edit Profile</a>
                </li>
                <li class="mb-4" data-aos="fade-right" data-aos-duration="500" data-aos-delay="300"><a href="{{ route('profile.show') }}" class="fw-700"><i class="fa-solid fa-user me-2"></i> Profile</a>
                </li>
                <li class="mb-4" data-aos="fade-right" data-aos-duration="500" data-aos-delay="300"><a href="{{ route('dashboard') }}" class="fw-700"><i class="fa-solid fa-book me-2"></i> Cources</a>
                </li>
                <li class="mb-4" data-aos="fade-right" data-aos-duration="500" data-aos-delay="300"><a href="{{ route('job') }}" class="fw-700"><i class="fa-solid fa-dollar me-2"></i> Job</a>
                </li>
                <li class="mb-4" data-aos="fade-right" data-aos-duration="500" data-aos-delay="400"><a href="{{ route('viaura.viaura') }}" class="fw-700"><i class="fa-solid fa-house me-2"></i> Home</a>
                </li>
                <li class="mb-4" data-aos="fade-right" data-aos-duration="500" data-aos-delay="500"><a href="{{ route('viaura.viaura') }}" class="fw-700"><i
                            class="fa-solid fa-right-from-bracket me-2"></i> Logout</a></li>
            </ul>
        </nav>
    </aside>

    <main>
        <section class="form pb-50">
            <div class="container w-70">
                <!-- Profile Update Form -->
                <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                    @csrf
                </form>

                <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
                    @csrf
                    @method('patch')

                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                    </div>

                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
                        <x-input-error class="mt-2" :messages="$errors->get('email')" />

                        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                            <div>
                                <p class="text-sm mt-2 text-gray-800">
                                    {{ __('Your email address is unverified.') }}

                                    <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        {{ __('Click here to re-send the verification email.') }}
                                    </button>
                                </p>

                                @if (session('status') === 'verification-link-sent')
                                    <p class="mt-2 font-medium text-sm text-green-600">
                                        {{ __('A new verification link has been sent to your email address.') }}
                                    </p>
                                @endif
                            </div>
                        @endif
                    </div>

                    <div>
                        <x-input-label for="bio" :value="__('Bio')" />
                        <x-text-input id="bio" name="bio" type="text" class="mt-1 block w-full"
                            :value="old('bio', $user->bio)" />
                        <x-input-error class="mt-2" :messages="$errors->get('bio')" />
                    </div>

                    <div>
                        <x-input-label for="skills" :value="__('Skills')" />
                        <x-text-input id="skills" name="skills" type="text" class="mt-1 block w-full"
                            :value="old('skills', $user->skills)" />
                        <x-input-error class="mt-2" :messages="$errors->get('skills')" />
                    </div>

                     <div>
                        <x-input-label for="phone" :value="__('phone')" />
                        <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full"
                            :value="old('phone', $user->phone)" />
                        <x-input-error class="mt-2" :messages="$errors->get('phone')" />
                    </div>


                    <div>
    <x-input-label for="linkedin" :value="__('LinkedIn Profile')" />
    <x-text-input id="linkedin" name="linkedin" type="url" class="mt-1 block w-full"
        :value="old('linkedin', $user->linkedin)"
        placeholder="https://www.linkedin.com/in/username" />
    <x-input-error class="mt-2" :messages="$errors->get('linkedin')" />
</div>

<div class="mt-4">
    <x-input-label for="github" :value="__('GitHub Profile')" />
    <x-text-input id="github" name="github" type="url" class="mt-1 block w-full"
        :value="old('github', $user->github)"
        placeholder="https://github.com/username" />
    <x-input-error class="mt-2" :messages="$errors->get('github')" />
</div>

 <div>
                        <x-input-label for="address" :value="__('address')" />
                        <x-text-input id="address" name="address" type="text" class="mt-1 block w-full"
                            :value="old('address', $user->address)" />
                        <x-input-error class="mt-2" :messages="$errors->get('address')" />
                    </div>





                    <div>
                        <x-input-label for="portfolio" :value="__('Portfolio')" />
                        <x-text-input id="portfolio" name="portfolio" type="text" class="mt-1 block w-full"
                            :value="old('portfolio', $user->portfolio)" />
                        <x-input-error class="mt-2" :messages="$errors->get('portfolio')" />
                    </div>

                <div class="flex items-center gap-4">
    <x-primary-button style="background-color: #6a0dad; color: #000; border: 1px solid #000; padding: 0.5rem 1rem; border-radius: 0.25rem; transition: all 0.3s ease;">
        {{ __('Save') }}
    </x-primary-button>

    @if (session('status') === 'profile-updated')
        <p
            x-data="{ show: true }"
            x-show="show"
            x-transition
            x-init="setTimeout(() => show = false, 2000)"
            class="text-sm text-gray-600"
        >{{ __('Saved.') }}</p>
    @endif
</div>
                </form>

                <!-- Password Update Form -->
                <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                    @csrf
                    @method('put')

                    <div>
                        <x-input-label for="update_password_current_password" :value="__('Current Password')" />
                        <x-text-input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
                        <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="update_password_password" :value="__('New Password')" />
                        <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                        <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />
                        <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                    </div>

                   <div class="flex items-center gap-4">
    <x-primary-button style="background-color: #6a0dad; color: #000; border: 1px solid #000; padding: 0.5rem 1rem; border-radius: 0.25rem; transition: all 0.3s ease;">
        {{ __('Save') }}
    </x-primary-button>

    @if (session('status') === 'password-updated')
        <p
            x-data="{ show: true }"
            x-show="show"
            x-transition
            x-init="setTimeout(() => show = false, 2000)"
            class="text-sm text-gray-600"
        >{{ __('Saved.') }}</p>
    @endif
</div>
                </form>

                <!-- Delete Account Form -->
                <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                    @csrf
                    @method('delete')

                    <h2 class="text-lg font-medium text-gray-900">
                        {{ __('Are you sure you want to delete your account?') }}
                    </h2>

                    <p class="mt-1 text-sm text-gray-600">
                        {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                    </p>

                    <div class="mt-6">
                        <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />
                        <x-text-input
                            id="password"
                            name="password"
                            type="password"
                            class="mt-1 block w-3/4"
                            placeholder="{{ __('Password') }}"
                        />
                        <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                    </div>

                    <div class="mt-6 flex justify-end">
    <x-secondary-button
        x-on:click="$dispatch('close')"
        style="background-color: #f0f0f0; color: #333; border: 1px solid #ccc; padding: 0.5rem 1rem; border-radius: 0.25rem; transition: all 0.3s ease;"
    >
        {{ __('Cancel') }}
    </x-secondary-button>

    <x-danger-button
        class="ms-3"
        style="background-color: #d32f2f; color: white; border: 1px solid #b71c1c; padding: 0.5rem 1rem; border-radius: 0.25rem; transition: all 0.3s ease;"
    >
        {{ __('Delete Account') }}
    </x-danger-button>
</div>
        </section>
    </main>

    <script src="{{ asset('Front/JS/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Front/JS/edit-profile.js') }}"></script>
</body>
</html>
