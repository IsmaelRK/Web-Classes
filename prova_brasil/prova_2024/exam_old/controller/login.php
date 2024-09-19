<?php


    $users = array("user1" => array("id" => "1", "email" => "a@a", "password" => "3", "name" => "Carl"));


    if ($_POST) {

        $email = $_POST["email"];
        $password = $_POST["password"];


        session_start();
        foreach ($users as $user) {
            if ($email == $user["email"] && $password == $user["password"]) {


                    $_SESSION["user"] = array($user["id"], $user["name"]);
                    header("location: ../view/view_projects.php");
                    exit();
                }
            }
        $_SESSION["user"] = "Error";
        header("location: ../view/index.php");

    }

?>
