@extends('layout.sidebar')

@section('title', 'Task Details')

@section('content')
    <div class="container mx-auto mt-8 max-w-md">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold text-gray-900 text-center mb-4">Task Details</h2>
            <div class="mb-4">
                <h3 class="text-xl font-semibold text-gray-800">Title: {{ $task->title }}</h3>
                <p class="text-md text-gray-600">Description: {{ $task->description }}</p>
                <p class="text-md text-gray-600">Status: {{ $task->status }}</p>
                <p class="text-md text-gray-600">Created Date: {{ $task->created_at->format('Y-m-d H:i:s') }}</p>
            </div>
            <a href="{{ route('task.index') }}" class="bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-full block text-center">Back to Task List</a>
        </div>
    </div>
@endsection
