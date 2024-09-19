<?php
    session_start();

    $tasks = array('task1' =>

        array('name' => 'tks1',
            'description' => 'tsk',
            'status' => 'finished',
            'project' => 'project1',
            'user' => '1'
        )
    );

    if ($_POST) {
        $type = $_POST['status'];
        $project_selected = $_SESSION["project_selected"];

        function projetosLoadAll($tasks, $type) {

            $c = 0;

            foreach ($tasks as $task) {
                if ($task['status'] == $type) {

                    $session_var = "task" . $c;
                    $_SESSION[$session_var] = $task;

                }
            }
            return $c;


        }
        $c = projetosLoadAll($tasks, $type);

        function projetosLoadByStatusId($c) {
            $users = array("user1" => array("id" => "1", "email" => "a@a", "password" => "3", "name" => "Carl"));

            for($i = 0; $i < $c+1; $i++) {
                $session_var = "task" . $c;
                $task = $_SESSION[$session_var];

                $usr_id = $task["user"];

                foreach ($users as $user) {
                    if ($usr_id == $user['id']) {

                        $task["user"] = $user['name'];

                        $_SESSION[$session_var] = $task;
                                            }
                }
            }

        }
        projetosLoadByStatusId($c);

        //var_dump($_SESSION['task0']);

        header('location: ../view/view_result.php');
        exit();

    }
?>