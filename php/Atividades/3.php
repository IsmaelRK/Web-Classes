<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
</head>
<body>

    <form action="3.php" method="POST">

        <input type="number" name="n1">
        <input type="number" name="n2">

        <select name="operacao">
            <option>+</option>
            <option>-</option>
            <option>/</option>
            <option>*</option>
        </select>

        <button type="submit">Enviar</button>

    </form>

</body>
</html>


<?php

    if($_POST)
    {

        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        $op = $_POST["operacao"];

        switch ($op)
        {
            case '+': $tot = $n1 + $n2; break;

            case '-': $tot = $n1 - $n2; break;

            case '/': $tot = $n1 / $n2; break;

            case '*': $tot = $n1 * $n2; break;

        }


        echo "<h2>$tot</h2>";

    }



?>