<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Jobs Management</h2>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
        @if(session('success'))
            <div class="bg-green-200 text-green-800 p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="mb-4">
            <a href="{{ route('admin.jobs.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Add New Job</a>
        </div>

        <table class="min-w-full bg-white shadow rounded-lg overflow-hidden">
            <thead class="bg-gray-100 border-b">
                <tr>
                    <th class="text-left py-2 px-4">ID</th>
                    <th class="text-left py-2 px-4">Title</th>
                    <th class="text-left py-2 px-4">Description</th>
                    <th class="text-left py-2 px-4">Category</th>
                    <th class="text-left py-2 px-4">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($jobs as $job)
                <tr class="border-b hover:bg-gray-50">
                    <td class="py-2 px-4">{{ $job->id }}</td>
                    <td class="py-2 px-4">{{ $job->title }}</td>
                    <td class="py-2 px-4">{{ Str::limit($job->description, 50) }}</td>
                          <td class="py-2 px-4">{{ $job->category->name }}</td>

                    <td class="py-2 px-4 space-x-2">
                        <a href="{{ route('admin.jobs.edit', $job) }}" class="text-blue-600 hover:underline">Edit</a>

                        <form action="{{ route('admin.jobs.destroy', $job) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure to delete?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="py-4 text-center text-gray-500">No jobs found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>
