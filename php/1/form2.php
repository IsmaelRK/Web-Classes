<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="form2.php" method="post">
    <label for="email"></label>
    <input type="email" id="email" name="email">
    <br>

    <input type="submit" name="submit">
</form>

</body>
</html>




<?php

if ($_POST)
{
    $email = $_POST['email'];

    echo "Seu email é " . $email;


}

?>