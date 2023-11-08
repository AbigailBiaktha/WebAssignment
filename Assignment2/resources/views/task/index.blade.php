<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class="text-3xl font-bold text-white">Task List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom styles with updated colors and background */
        body {
            background-color: #1a1a1a;
            font-family: Arial, sans-serif;
            color: #fff;
        }

        .container {
            background-color: #333;
            padding: 2rem;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #444;
        }

        .table th, .table td {
            border: 1px solid #444;
            padding: 10px;
        }

        .table th {
            background-color: #1a1a1a;
            color: #fff;
        }

        .table th a {
            color: #fff;
            text-decoration: none;
        }

        .table tr:nth-child(even) {
            background-color: #2a2a2a;
        }

        .create-button {
            background-color:gray;
            color: #fff;
            padding: 10px 20px;
            border: none;
            text-decoration: none;
            border-radius: 4px;
            display: inline-block;
            margin-top: 20px;
        }

        .create-button:hover {
            background-color:black ;
        }

        .delete-button {
            color: #e83e8c;
            text-decoration: underline;
            cursor: pointer;
        }
    </style>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    
    <div class="container mx-auto">
        <h1 class="text-4xl font-extrabold text-white mb-4">Task List</h1>
        <table class="table">
            <thead>
                <tr>
                    <th class="p-4">Title</th>
                    <th class="p-4">Description</th>
                    <th class="p-4">Status</th>
                    <th class="p-4">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td class="p-4"><a href="{{ route('task.show', $task) }}" class="text-blue-500 hover:underline">{{ $task->title }}</a></td>
                    <td class="p-4 text-gray-600">{{ $task->description }}</td>
                    <td class="p-4">{{ $task->status }}</td>
                    <td class="p-4">
                        <form method="POST" action="{{ route('task.destroy', $task) }}">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="button" onclick="confirmDelete(this)" class="delete-button">
                                <i class="fas fa-trash-alt"></i> Delete
                            </button>
                        </form>
                        <a href="{{ route('task.edit', $task) }}" class="text-blue-500 hover:underline ml-4">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('task.create') }}" class="create-button">Create New Task</a>
    </div>

    <script>
        function confirmDelete(button) {
            if (confirm("Are you sure you want to delete this task?")) {
                button.parentElement.submit();
            }
        }
    </script>
</body>
</html>
