<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Task</title>
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
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        form {
            margin-top: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-weight: bold;
        }
        input[type="text"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #3A4D39;
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Create New Task</h2>
        <form method="post" action="{{ route('task.store') }}">
            @csrf
            @method('post')

            <div class="form-group">
                <label for="title">Task Title:</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="description">Task Description:</label>
                <textarea name="description" id="description" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label for="status">Task Status:</label>
                <select name="status" id="status" class="form-control" required>
                    <option value="To-Do">To-Do</option>
                    <option value="In Progress">In Progress</option>
                    <option value="Done">Done</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Create Task</button>
        </form>
    </div>
</body>
</html>
