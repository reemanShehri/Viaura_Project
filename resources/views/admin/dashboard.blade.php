<x-app-layout>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom Tailwind Colors -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c4a6e',
                        },
                        secondary: {
                            50: '#f5f3ff',
                            100: '#ede9fe',
                            200: '#ddd6fe',
                            300: '#c4b5fd',
                            400: '#a78bfa',
                            500: '#8b5cf6',
                            600: '#7c3aed',
                            700: '#6d28d9',
                            800: '#5b21b6',
                            900: '#4c1d95',
                        },
                        accent: {
                            50: '#ecfdf5',
                            100: '#d1fae5',
                            200: '#a7f3d0',
                            300: '#6ee7b7',
                            400: '#34d399',
                            500: '#10b981',
                            600: '#059669',
                            700: '#047857',
                            800: '#065f46',
                            900: '#064e3b',
                        },
                        danger: {
                            50: '#fef2f2',
                            100: '#fee2e2',
                            200: '#fecaca',
                            300: '#fca5a5',
                            400: '#f87171',
                            500: '#ef4444',
                            600: '#dc2626',
                            700: '#b91c1c',
                            800: '#991b1b',
                            900: '#7f1d1d',
                        }
                    }
                }
            }
        }
    </script>

    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            Admin Dashboard
        </h2>
    </x-slot>

    <div class="py-10 max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">

        {{-- Welcome Banner --}}
        <div class="bg-gradient-to-r from-primary-500 to-secondary-600 shadow-lg rounded-xl p-6 text-white">
            <p class="text-xl font-medium mb-2">
                Welcome, {{ Auth::user()->name }} 👋!
            </p>
<p class="opacity-90">
    Welcome Today: {{ \Carbon\Carbon::now()->format('l, d F Y h:i A') }}
</p>
        </div>

        {{-- Quick Links --}}
        <div class="bg-white shadow-lg rounded-xl p-6 border border-gray-100">
            <h3 class="text-xl font-semibold mb-4 text-gray-800 border-b pb-2">Quick Access</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
                @php
                    $quickLinks = [
                        ['label' => 'Categories', 'route' => 'admin.categories.index', 'icon' => 'fas fa-tags', 'color' => 'bg-secondary-100 text-secondary-800 hover:bg-secondary-200'],
                        ['label' => 'Courses', 'route' => 'admin.courses.index', 'icon' => 'fas fa-book', 'color' => 'bg-primary-100 text-primary-800 hover:bg-primary-200'],
                        ['label' => 'Users', 'route' => 'admin.users.index', 'icon' => 'fas fa-users', 'color' => 'bg-accent-100 text-accent-800 hover:bg-accent-200'],
                        ['label' => 'Jobs', 'route' => 'admin.jobs.index', 'icon' => 'fas fa-briefcase', 'color' => 'bg-yellow-100 text-yellow-800 hover:bg-yellow-200'],
                        ['label' => 'Admins', 'route' => 'admin.admins.index', 'icon' => 'fas fa-user-shield', 'color' => 'bg-danger-100 text-danger-800 hover:bg-danger-200'],
                    ];
                @endphp

                @foreach ($quickLinks as $link)
                    <a href="{{ route($link['route']) }}"
                       class="{{ $link['color'] }} py-4 px-4 rounded-xl font-medium shadow-sm hover:shadow-md transition flex flex-col items-center">
                        <i class="{{ $link['icon'] }} text-xl mb-2"></i>
                        {{ $link['label'] }}
                    </a>
                @endforeach
            </div>
        </div>

        {{-- Add New Content --}}
        <div class="bg-white shadow-lg rounded-xl p-6 border border-gray-100">
            <h3 class="text-xl font-semibold mb-4 text-gray-800 border-b pb-2">Create New</h3>
            <div class="flex flex-wrap gap-4">
                <a href="{{ route('admin.categories.create') }}" class="btn-primary">
                    <i class="fas fa-plus mr-2"></i> Add Category
                </a>
                <a href="{{ route('admin.courses.create') }}" class="btn-primary">
                    <i class="fas fa-plus mr-2"></i> Add Course
                </a>
                <a href="{{ route('admin.jobs.create') }}" class="btn-primary">
                    <i class="fas fa-plus mr-2"></i> Add Job
                </a>
                <a href="{{ route('admin.users.create') }}" class="btn-primary">
                    <i class="fas fa-plus mr-2"></i> Add User
                </a>
                <a href="{{ route('admin.admins.create') }}" class="btn-primary">
                    <i class="fas fa-plus mr-2"></i> Add Admin
                </a>
            </div>
        </div>

        {{-- Stats Overview --}}
        <div class="bg-white shadow-lg rounded-xl p-6 border border-gray-100">
            <h3 class="text-xl font-semibold mb-4 text-gray-800 border-b pb-2">System Overview</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
                <div class="stat-card bg-primary-50 border-l-4 border-primary-500">
                    <div class="text-primary-800">
                        <i class="fas fa-tags text-xl"></i>
                        <h4>Categories</h4>
                        <p class="text-2xl font-bold">{{ $categoriesCount ?? '0' }}</p>
                    </div>
                    <a href="{{ route('admin.categories.index') }}" class="text-primary-600 hover:text-primary-800 text-sm">
                        View All <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>

                <div class="stat-card bg-accent-50 border-l-4 border-accent-500">
                    <div class="text-accent-800">
                        <i class="fas fa-book text-xl"></i>
                        <h4>Courses</h4>
                        <p class="text-2xl font-bold">{{ $coursesCount ?? '0' }}</p>
                    </div>
                    <a href="{{ route('admin.courses.index') }}" class="text-accent-600 hover:text-accent-800 text-sm">
                        View All <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>

                <div class="stat-card bg-secondary-50 border-l-4 border-secondary-500">
                    <div class="text-secondary-800">
                        <i class="fas fa-users text-xl"></i>
                        <h4>Users</h4>
                        <p class="text-2xl font-bold">{{ $usersCount ?? '0' }}</p>
                    </div>
                    <a href="{{ route('admin.users.index') }}" class="text-secondary-600 hover:text-secondary-800 text-sm">
                        View All <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>

                <div class="stat-card bg-yellow-50 border-l-4 border-yellow-500">
                    <div class="text-yellow-800">
                        <i class="fas fa-briefcase text-xl"></i>
                        <h4>Jobs</h4>
                        <p class="text-2xl font-bold">{{ $jobsCount ?? '0' }}</p>
                    </div>
                    <a href="{{ route('admin.jobs.index') }}" class="text-yellow-600 hover:text-yellow-800 text-sm">
                        View All <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>

                <div class="stat-card bg-danger-50 border-l-4 border-danger-500">
                    <div class="text-danger-800">
                        <i class="fas fa-user-shield text-xl"></i>
                        <h4>Admins</h4>
                        <p class="text-2xl font-bold">{{ $adminsCount ?? '0' }}</p>
                    </div>
                    <a href="{{ route('admin.admins.index') }}" class="text-danger-600 hover:text-danger-800 text-sm">
                        View All <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>
        </div>

        {{-- Recent Activity --}}
        {{-- <div class="bg-white shadow-lg rounded-xl p-6 border border-gray-100">
            <h3 class="text-xl font-semibold mb-4 text-gray-800 border-b pb-2">Recent Activity</h3>
            <div class="space-y-4">
                <div class="activity-item">
                    <div class="activity-icon bg-primary-100 text-primary-600">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <div>
                        <p>New admin added: <strong>Sarah Johnson</strong></p>
                        <p class="text-sm text-gray-500">1 hour ago</p>
                    </div>
                </div>

                <div class="activity-item">
                    <div class="activity-icon bg-accent-100 text-accent-600">
                        <i class="fas fa-book"></i>
                    </div>
                    <div>
                        <p>New course added: <strong>Advanced Web Development</strong></p>
                        <p class="text-sm text-gray-500">5 hours ago</p>
                    </div>
                </div>

                <div class="activity-item">
                    <div class="activity-icon bg-secondary-100 text-secondary-600">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <div>
                        <p>New job posted: <strong>Frontend Developer</strong></p>
                        <p class="text-sm text-gray-500">1 day ago</p>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>

    <style>
        .btn-primary {
            @apply bg-primary-600 text-white font-medium py-2 px-4 rounded-lg hover:bg-primary-700 transition flex items-center;
        }

        .stat-card {
            @apply p-4 rounded-lg flex flex-col justify-between;
            min-height: 120px;
        }

        .stat-card h4 {
            @apply text-sm font-medium mt-2 mb-1;
        }

        .activity-item {
            @apply flex items-start gap-4 p-3 hover:bg-gray-50 rounded-lg transition;
        }

        .activity-icon {
            @apply w-10 h-10 rounded-full flex items-center justify-center text-lg flex-shrink-0;
        }
    </style>

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</x-app-layout>
