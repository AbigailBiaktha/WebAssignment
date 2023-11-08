<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Task</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom styles for a black and white theme */
        body {
            background-color: black;
            color: white;
        }

        .bg-gray-800 {
            background-color: black;
        }

        .text-gray-100 {
            color: white;
        }

        .border-gray-500 {
            border-color: gray;
        }

        .bg-gray-700 {
            background-color: gray;
        }

        .hover\:bg-gray-600:hover {
            background-color: #333;
        }
    </style>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mx-auto">
        <div class="row">
            <div class="col-md-8">
                <div class="bg-gray-800 text-gray-100 p-6 rounded-lg shadow-lg">
                    <div class="text-3xl font-semibold">Create New Task</div>

                    <div class="mt-4">
                        <form method="POST" action="{{ route('task.store') }}">
                            @csrf
                            <!-- Use POST method and specify the route or URL for creating a new task -->

                            <div class="mb-4">
                                <label for="title" class="block">Title</label>
                                <input type="text" name="title" id="title" class="w-full bg-gray-800 text-gray-100 border border-gray-500 rounded p-2" required>
                            </div>

                            <div class="mb-4">
                                <label for="description" class="block">Description</label>
                                <textarea name="description" id="description" class="w-full bg-gray-800 text-gray-100 border border-gray-500 rounded p-2" required></textarea>
                            </div>

                            <div class="mb-4">
                                <label for="status" class="block">Status</label>
                                <select name="status" id="status" class="w-full bg-gray-800 text-gray-100 border border-gray-500 rounded p-2" required>
                                    <option value="To-Do">To-Do</option>
                                    <option value="In Progress">In Progress</option>
                                    <option value="Done">Done</option>
                                </select>
                            </div>

                            <button type="submit" class="bg-gray-700 text-gray-100 py-2 px-4 rounded hover:bg-gray-600">Create Task</button>
                            <a href="{{ route('task.index') }}" class="bg-gray-900 text-white font-bold py-2 px-4 rounded-full block text-center mt-6">Back to Task List</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
