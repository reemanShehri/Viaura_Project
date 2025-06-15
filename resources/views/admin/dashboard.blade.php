<x-app-layout>
    <script src="https://cdn.tailwindcss.com"></script>

    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            Admin Dashboard
        </h2>
    </x-slot>

    <div class="py-10 max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">

        {{-- Welcome --}}
        <div class="bg-white shadow-sm rounded-lg p-6 text-gray-900">
            <p class="text-lg font-medium mb-4">
                Welcome, {{ Auth::user()->name }} 👨‍💻!
            </p>
        </div>

        {{-- Quick Links --}}
        <div class="bg-white shadow-sm rounded-lg p-6">
            <h3 class="text-xl font-semibold mb-4">Quick Links</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                @php
                    $quickLinks = [
                        ['label' => 'Categories', 'route' => 'admin.categories.index', 'color' => 'bg-indigo-100 text-indigo-700'],
                        ['label' => 'Courses', 'route' => 'admin.courses.index', 'color' => 'bg-blue-100 text-blue-700'],
                        ['label' => 'Users', 'route' => 'admin.users.index', 'color' => 'bg-green-100 text-green-700'],
                        ['label' => 'Jobs', 'route' => 'admin.jobs.index', 'color' => 'bg-yellow-100 text-yellow-700'],
                        ['label' => 'Admins', 'route' => 'admin.admins.index', 'color' => 'bg-red-100 text-red-700'],
                    ];
                @endphp

                @foreach ($quickLinks as $link)
                    <a href="{{ route($link['route']) }}"
                       class="{{ $link['color'] }} py-4 px-6 rounded-lg font-semibold shadow hover:shadow-md transition text-center">
                        {{ $link['label'] }}
                    </a>
                @endforeach
            </div>
        </div>

        {{-- Add New Buttons --}}
        <div class="bg-white shadow-sm rounded-lg p-6">
            <h3 class="text-xl font-semibold mb-4">Add New</h3>
            <div class="flex flex-wrap gap-4">
                <a href="{{ route('admin.categories.create') }}" class="btn-primary">+ Add Category</a>
                <a href="{{ route('admin.courses.create') }}" class="btn-primary">+ Add Course</a>
                <a href="{{ route('admin.jobs.create') }}" class="btn-primary">+ Add Job</a>
                <a href="{{ route('admin.users.create') }}" class="btn-primary">+ Add User</a>
            </div>
        </div>

        {{-- Stats Section --}}
        {{-- <div class="bg-white shadow-sm rounded-lg p-6">
            <h3 class="text-xl font-semibold mb-4">Statistics Overview</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 text-gray-800">
                <div>Total Categories: <strong>{{ $categoriesCount ?? '...' }}</strong> <a href="{{ route('admin.categories.index') }}" class="text-blue-500 hover:underline">(View)</a></div>
                <div>Total Courses: <strong>{{ $coursesCount ?? '...' }}</strong> <a href="{{ route('admin.courses.index') }}" class="text-blue-500 hover:underline">(View)</a></div>
                <div>Total Users: <strong>{{ $usersCount ?? '...' }}</strong> <a href="{{ route('admin.users.index') }}" class="text-blue-500 hover:underline">(View)</a></div>
            </div>
        </div> --}}

        {{-- Charts (مثال، أضف بيانات مناسبة في الكونترولر)
        <div class="bg-white shadow-sm rounded-lg p-6">
            <h3 class="text-xl font-semibold mb-4">User Registrations (Last 6 Months)</h3>
            <canvas id="registrationsChart" style="max-height:300px;"></canvas>
        </div> --}}

        {{-- <div class="bg-white shadow-sm rounded-lg p-6">
            <h3 class="text-xl font-semibold mb-4">Top 5 Courses by Number of Students</h3>
            <canvas id="topCoursesChart" style="max-height:300px;"></canvas>
        </div> --}}

    </div>

    {{-- Add some Tailwind CSS reusable button class --}}
    <style>
        .btn-primary {
            @apply bg-blue-600 text-white font-semibold py-2 px-4 rounded hover:bg-blue-700 transition;
        }
    </style>

    {{-- Chart.js Scripts (مغلقة حالياً، فعّلها بعد توفير بيانات الكونترولر) --}}
</x-app-layout>
