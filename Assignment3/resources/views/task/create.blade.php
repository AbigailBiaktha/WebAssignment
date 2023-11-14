@extends('layout.sidebar')

@section('title', 'Create New Task')

@section('content')
    <div class="container mx-auto mt-8 max-w-md">
        <div class="bg-gradient-to-r from-purple-500 via-pink-500 to-red-500 text-white p-6 rounded-lg shadow-lg">
            <div class="text-3xl font-semibold">Create New Task</div>

            <div class="mt-4">
                <form method="POST" action="{{ route('task.store') }}">
                    @csrf
                    <!-- Your form and content specific to the create view -->
                    <div class="mb-4">
                        <label for="title" class="block text-white">Title</label>
                        <input type="text" name="title" id="title" class="w-full bg-gray-700 text-gray-100 border border-gray-500 rounded p-2 focus:outline-none focus:ring focus:border-blue-300">
                        @error('title')
                            <small class="text-black-700">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="description" class="block text-white">Description</label>
                        <textarea name="description" id="description" class="w-full h-32 bg-gray-700 text-gray-100 border border-gray-500 rounded p-2 resize-none focus:outline-none focus:ring focus:border-blue-300"></textarea>
                        @error('description')
                            <small class="text-black-700">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="status" class="block text-white">Status</label>
                        <select name="status" id="status" class="w-full bg-gray-700 text-gray-100 border border-gray-500 rounded p-2 focus:outline-none focus:ring focus:border-blue-300" required>
                            <option value="To-Do">To-Do</option>
                            <option value="In Progress">In Progress</option>
                            <option value="Done">Done</option>
                        </select>
                        @error('status')
                            <small class="text-black-700">{{ $message }}</small>
                        @enderror
                    </div>

                    <button type="submit" class="bg-gray-700 text-gray-100 py-2 px-4 rounded hover:bg-gray-600 focus:outline-none focus:ring focus:border-blue-300">Create Task</button>
                  
                </form>
            </div>
        </div>
    </div>
@endsection
