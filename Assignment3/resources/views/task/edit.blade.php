@extends('layout.sidebar')

@section('title', 'Edit Task')

@section('content')
    <div class="container mx-auto mt-8 max-w-md">
        <div class="bg-gradient-to-r from-purple-500 via-pink-500 to-red-500 text-white p-6 rounded-lg shadow-lg">
            <div class="text-3xl font-semibold">Edit Task</div>

            <div class="mt-4">
                <form method="POST" action="{{ route('task.update', $task) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="title" class="block text-white">Title</label>
                        <input type="text" name="title" id="title" class="w-full bg-gray-700 text-gray-100 border border-gray-500 rounded p-2 focus:outline-none focus:ring focus:border-blue-300" value="{{ $task->title }}">
                        @error('title')
                            <small class="text-black-700">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="description" class="block text-white">Description</label>
                        <textarea name="description" id="description" class="w-full h-32 bg-gray-700 text-gray-100 border border-gray-500 rounded p-2 resize-none focus:outline-none focus:ring focus:border-blue-300" required>{{ $task->description }}</textarea>
                        @error('description')
                            <small class="text-black-700">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="status" class="block text-white">Status</label>
                        <select name="status" id="status" class="w-full bg-gray-700 text-gray-100 border border-gray-500 rounded p-2 focus:outline-none focus:ring focus:border-blue-300" required>
                            <option value="To-Do" {{ $task->status == 'To-Do' ? 'selected' : '' }}>To-Do</option>
                            <option value="In Progress" {{ $task->status == 'In Progress' ? 'selected' : '' }}>In Progress</option>
                            <option value="Done" {{ $task->status == 'Done' ? 'selected' : '' }}>Done</option>
                        </select>
                        @error('status')
                            <small class="text-black-700">{{ $message }}</small>
                        @enderror
                    </div>

                    <button type="submit" class="bg-gray-700 text-gray-100 py-2 px-4 rounded hover:bg-gray-600 focus:outline-none focus:ring focus:border-blue-300">Update Task</button>
                </form>
            </div>
        </div>
    </div>
@endsection
