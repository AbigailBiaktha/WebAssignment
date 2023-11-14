@extends('layout.sidebar')

@section('title', 'Task List')

@section('content')
    <div class="container mx-auto mt-8 p-4">
        <h1 class="text-4xl font-extrabold text-black mb-4">Task List</h1>
        <div class="overflow-x-auto">
            <table class="w-full bg-gradient-to-r from-purple-500 via-pink-500 to-red-500 text-white rounded-lg shadow-lg">
                <thead>
                    <tr>
                        <th class="p-4 text-left">Title</th>
                        <th class="p-4 text-left">Description</th>
                        <th class="p-4 text-left">Status</th>
                        <th class="p-4 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                        <tr class="hover:bg-gray-200 transition duration-300 ease-in-out transform hover:scale-105">
                            <td class="p-4"><a href="{{ route('task.show', $task) }}" class="text-black-500 hover:underline">{{ $task->title }}</a></td>
                            <td class="p-4 text-gray-600">{{ $task->description }}</td>
                            <td class="p-4">{{ $task->status }}</td>
                            <td class="p-4 space-x-2">
                                <form method="POST" action="{{ route('task.destroy', $task) }}">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="button" onclick="confirmDelete(this)" class="text-red-500 hover:underline">
                                        Delete
                                    </button>
                                </form>
                                <a href="{{ route('task.edit', $task) }}" class="text-blue-500 hover:underline">
                                    Edit
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function confirmDelete(button) {
            if (confirm("Are you sure you want to delete this task?")) {
                button.parentElement.submit();
            }
        }
    </script>
@endsection
