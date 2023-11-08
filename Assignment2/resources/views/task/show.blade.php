<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Details</title>
    <link rel="stylesheet" href="@vite('resources/css/app.css')">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> <!-- Link to Tailwind CSS -->
</head>
<body class="bg-gradient-to-r from-black via-white to-light-blue-300">
    <div class="container mx-auto max-w-md p-8 bg-white rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-black text-center">Task Details</h2>
        <div class="mt-4">
            <h3 class="text-xl font-semibold text-gray-800">Title: {{ $task->title }}</h3>
            <p class="text-md text-gray-600">Description: {{ $task->description }}</p>
            <p class="text-md text-gray-600">Status: {{ $task->status }}</p>
            <p class="text-md text-gray-600">Created Date: {{ $task->created_at->format('Y-m-d H:i:s') }}</p>
        </div>
        <a href="{{ route('task.index') }}" class="bg-black hover:bg-gray-800 text-white font-bold py-2 px-4 rounded-full block text-center mt-6">Back to Task List</a>
    </div>
</body>
</html>
