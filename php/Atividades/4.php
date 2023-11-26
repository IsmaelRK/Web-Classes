<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
</head>
<body>

<form action="4.php" method="POST">

    <label for="1">Prova 1</label>
    <input type="number" name="n1" id="1">

    <label for="2">Prova 2</label>
    <input type="number" name="n2" id="2">

    <label for="3">Prova 3</label>
    <input type="number" name="n3" id="3">

    <select name="cg">
        <option value="0">Gerente</option>
        <option value="1">Diretor</option>
    </select>

    <button type="submit">Enviar</button>

</form>

</body>
</html>



<?php

    if($_POST)
    {
        $p1 = $_POST["n1"];
        $p2 = $_POST["n2"];
        $p3 = $_POST["n3"];
        $t = $_POST["cg"];

        $total = (($p1 * 3) + ($p2 * 3) + ($p3 * 4)) / 10;


        if ($t == 0 && $total > 7)
        {
            echo "<h3>Aprovado. $total</h3>";
        }
        elseif ($t == 0 && $total > 8)
        {
            echo "<h3>Aprovado. $total</h3>";
        }
        else
        {
            echo "<h3>Sinto Muito, não foi desta vez. $total</h3>";
        }


    }

?>
