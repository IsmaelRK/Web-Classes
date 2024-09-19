<?php

    if($_POST) {

        $_SESSION["project_selected"] = $_POST["project"];
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <link rel="stylesheet" href="../style/global.css">
</head>

<body id="body-flex">


<form id="form-index" method="post" action="../controller/projetosController.php">

        <label for="select_type">Status</label>
        <select name="status" id="select_type">

            <option value="working">Working</option>
            <option value="finished">Finished</option>

        </select>

        <input type="submit">

</form>


</body>
