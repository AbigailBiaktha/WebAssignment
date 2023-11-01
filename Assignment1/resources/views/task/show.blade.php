<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: black;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: black;
        }
        div {
            padding: 20px;
        }
        h3 {
            font-size: 24px;
            color: #333;
            margin-bottom: 10px;
        }
        p {
            font-size: 16px;
            color: #666;
            margin-bottom: 10px;
        }
        a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3A4D39;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Task Details</h2>
        <div>
            <h3>Title: {{ $task->title }}</h3>
            <p>Description: {{ $task->description }}</p>
            <p>Status: {{ $task->status }}</p>
            <p>Created Date: {{ $task->created_at->format('Y-m-d H:i:s') }}</p> 
        </div>
        <a href="{{ route('task.index')}}">Back to Task List</a>
    </div>
</body>
</html>
