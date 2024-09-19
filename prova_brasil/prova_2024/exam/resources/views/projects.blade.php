<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Projects</title>
    <link rel="stylesheet" href="{{ asset('style/global.css') }}">

</head>

<body class="container">

    <h1>Projects</h1>

    <ul>
        <li>
            <form action="{{ route('project.select') }}" method="post" >

                @csrf

                <label for="project_name">Project Name</label>
                <select name="project_name" id="project_name">

                    @foreach($projects as $project)
                        <option value="{{ $project->project_name }}">{{ $project->project_name }}</option>
                    @endforeach

                </select>

                <label for="project_status">Project Status</label>
                <select name="status" id="project_status">

                    <option value="finished">Finished</option>
                    <option value="under_work">Under Work</option>

                </select>


                <input type="submit" value="List Tasks">

            </form>
        </li>
    </ul>

</body>
</html>
