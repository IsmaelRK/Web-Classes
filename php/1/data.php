<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>formulário php</title>
</head>
<body>


<form action="data.php" method="post">

    <label for="s1">num 1:</label>
    <input id="s1" name="s1">

    <label for="s2">num 2:</label>
    <input id="s2" name="s2">

    <button type="submit" name="submit">Enviar</button>

    <a href="form2.php">Clique aqui</a>
</form>


</body>
</html>


<?php
if (isset($_POST['submit']))

    try{



        function run(){
            $num = $_POST["s1"];
            $num2 = $_POST["s2"];
            $sum = (string)$num . (string)$num2;
            for ($i = 0; $i < 1; $i++)
            {
                echo "<br>";
                echo "<p>$sum</p>";
                echo "<br>";

            }

            echo "Acerto Miseravi";
            echo "<br>";
            if ((int)$sum > 17)
            {
                echo "<hr>";
                echo "Já paga boleto";
            }
        }
        run();





    }
    catch (Exception $e)
    {
        echo $e -> getMessage();
    }



?>
