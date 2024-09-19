<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Result</title>
    <link rel="stylesheet" href="../style/global.css">
</head>

<body id="body-flex">

    <main id="main">

        <div class="div">

            <?php
            session_start();
            $c = 0;

            echo "<div><p>Name</p></div>";

            for($i = 0; $i < $c+1; $i++) {
                $session_var = "task" . $c;
                $task = $_SESSION[$session_var];

                $name = $task['name'];
                echo "<div>$name</div>";

            }

            ?>

        </div>

        <div class="div">

            <?php
            session_start();
            $c = 0;

            echo "<div><p>Description</p></div>";

            for($i = 0; $i < $c+1; $i++) {
                $session_var = "task" . $c;
                $task = $_SESSION[$session_var];

                $description = $task['description'];
                echo "<div>$description</div>";

            }

            ?>

        </div>

        <div class="div">

            <?php
            session_start();
            $c = 0;

            echo "<div><p>Status</p></div>";

            for($i = 0; $i < $c+1; $i++) {
                $session_var = "task" . $c;
                $task = $_SESSION[$session_var];

                $status = $task['status'];
                echo "<div>$status</div>";

            }

            ?>

        </div>

        <div class="div">

            <?php
            session_start();
            $c = 0;

            echo "<div><p>Project</p></div>";

            for($i = 0; $i < $c+1; $i++) {
                $session_var = "task" . $c;
                $task = $_SESSION[$session_var];

                $project = $task['project'];
                echo "<div>$project</div>";

            }

            ?>

        </div>

        <div class="div">

            <?php
            session_start();
            $c = 0;

            echo "<div><p>User</p></div>";

            for($i = 0; $i < $c+1; $i++) {
                $session_var = "task" . $c;
                $task = $_SESSION[$session_var];

                $user = $task['user'];
                echo "<div>user</div>";

            }

            ?>

        </div>

    </main>

</body>
