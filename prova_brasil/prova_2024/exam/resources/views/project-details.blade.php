<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Project Details</title>
    <link rel="stylesheet" href="{{ asset('style/global.css') }}">

</head>
<body>

    <h1>Project: {{ $projectName }}</h1>

    <div class="container">
    <h2>Status: {{ $projectStatus }}</h2>

    <h3>Tasks</h3>
    <ul>
        @forelse($filteredTasks as $task)
            <li>{{ $task->task_name }} - {{ $task->description }} - {{ $namesList[$loop->index] }}</li>
        @empty
            <li>No tasks found for this project and status.</li>
        @endforelse
    </ul>
    </div>

</body>
</html>
