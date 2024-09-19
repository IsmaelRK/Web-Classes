<?php

    $projects = array('project1' =>
        array('name' => 'Project 1',
            'description' => 'Project',
            'status' => 'finished',
            'user' => '1'
        ));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <link rel="stylesheet" href="../style/global.css">
</head>

<body>


    <form class="bg-color text-center" method="post" action="view_tasks.php">

        <?php

            foreach ($projects as $project) {

                $project_name = $project['name'];
                echo "<lable for'$project_name'>$project_name</lable>";
                echo "<input type='radio' name='project' value='$project_name' id='$project_name'>";
                echo "<br>";

            }

        ?>

        <br>
        <input type="submit">

    </form>


</body>
