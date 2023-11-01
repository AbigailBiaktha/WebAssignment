<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color:black;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color:#B2C8BA;
            border-radius: 5px;
            box-shadow:white;
        }
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color:#DE8F5F;
        }
        .btn-create {
            display: block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color:#3A4D39; 
            color: #fff;
            text-align: center; 
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Task List</h1>
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td><a href="{{ route('task.show', $task) }}">{{ $task->title }}</a></td>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('task.create') }}" class="btn-create">Create New Task</a> <!-- Change the class name to btn-create -->
    </div>
</body>
</html>
