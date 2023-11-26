<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
</head>
<body>

<h2>Formulário</h2>

<form action="2.php" method="post">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required><br>

    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" required><br>

    <label>Sexo:</label>
    <input type="radio" id="sexo-m" name="sexo" value="Masculino" required>
    <label for="sexo-m">Masculino</label>
    <input type="radio" id="sexo-f" name="sexo" value="Feminino" required>
    <label for="sexo-f">Feminino</label><br>

    <label>Estado Civil:</label>
    <select name="estado_civil" required>
        <option value="solteiro">Solteiro</option>
        <option value="casado">Casado</option>
        <option value="divorciado">Divorciado</option>
        <option value="viuvo">Viúvo</option>
    </select><br>

    <input type="submit" value="Enviar">
</form>

</body>
</html>



<?php

    if($_POST)
    {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $sexo = $_POST["sexo"];
        $estadoC = $_POST["estado_civil"];

        echo "<p>$nome</p>";

        echo "<p>$email</p>";

        echo "<p>$sexo</p>";

        echo "<p>$estadoC</p>";
    }

?>
