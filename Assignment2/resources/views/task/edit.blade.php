<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="@vite('resources/css/app.css')">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-900 text-gray-300">
    <div class="container mx-auto">
        <div class="row">
            <div class="col-md-8">
                <div class="bg-gray-800 text-gray-100 p-6 rounded-lg shadow-lg">
                    <div class="text-3xl font-semibold">Edit Task</div>

                    <div class="mt-4">
                        <form method="POST" action="{{ route('task.update', $task) }}">
                            @csrf
                            @method('PUT')

                            <div class="mb-4">
                                <label for="title" class="block">Title</label>
                                <input type="text" name="title" id="title" class="w-full bg-gray-800 text-gray-100 border border-gray-500 rounded p-2" value="{{ $task->title }}" required>
                            </div>

                            <div class="mb-4">
                                <label for="description" class="block">Description</label>
                                <textarea name="description" id="description" class="w-full bg-gray-800 text-gray-100 border border-gray-500 rounded p-2" required>{{ $task->description }}</textarea>
                            </div>

                            <div class="mb-4">
                                <label for="status" class="block">Status</label>
                                <select name="status" id="status" class="w-full bg-gray-800 text-gray-100 border border-gray-500 rounded p-2" required>
                                    <option value="To-Do" {{ $task->status == 'To-Do' ? 'selected' : '' }}>To-Do</option>
                                    <option value="In Progress" {{ $task->status == 'In Progress' ? 'selected' : '' }}>In Progress</option>
                                    <option value="Done" {{ $task->status == 'Done' ? 'selected' : '' }}>Done</option>
                                </select>
                            </div>

                            <button type="submit" class="bg-gray-700 text-gray-100 py-2 px-4 rounded hover:bg-gray-600">Update Task</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
