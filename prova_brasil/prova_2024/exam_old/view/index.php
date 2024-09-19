<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <link rel="stylesheet" href="../style/global.css">
</head>

<body id="body-flex">


    <form id="form-index" method="post" action="../controller/login.php">

        <label for="email_user">Email</label>
        <input id="email_user" type="email" name="email" placeholder="Your Email" required>

        <label for="email_user">Password</label>
        <input id="email_user" type="password" name="password" placeholder="Your Password" required>

        <input type="submit">

    </form>


</body>

<?php

     session_start();
    if ($_SESSION["user"] == "Error") {

        echo "<p>Login Failed</p>";

    }

?>