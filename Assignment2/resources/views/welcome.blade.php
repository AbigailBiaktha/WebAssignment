<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Your To-Do List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> <!-- Link to Tailwind CSS -->
</head>
<body class="bg-gradient-to-r from-black via-white to-light-blue-300">
    <div class="container mx-auto h-screen flex items-center justify-center">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-gray-800">Welcome to Your To-Do List</h1>
            <p class="text-lg text-gray-600">Get organized and manage your tasks with ease.</p>
            <a href="{{ route('task.index') }}" class="bg-black hover:bg-gray-800 text-white font-bold py-2 px-4 rounded-full mt-4 inline-block">Start Now</a> <!-- Change the button color to black and hover color to gray-800 -->
        </div>
    </div>
</body>
</html>
