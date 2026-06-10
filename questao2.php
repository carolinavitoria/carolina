<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numero = $_POST["numero"];

    echo "<pre>";

    for ($i = 1; $i <= $numero; $i++) {

        for ($j = 1; $j <= $i; $j++) {
            echo $i;
        }

        echo "\n";
    }

    echo "</pre>";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 57</title>
</head>
<body>

<form method="post">

    Digite um número positivo:
    <input type="number" name="numero" min="1" required>

    <br><br>

    <input type="submit" value="Mostrar">

</form>

</body>
</html>