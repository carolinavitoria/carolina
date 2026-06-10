<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numero = $_POST["numero"];


    if ($numero < 5 || $numero > 50) {

        echo "Número inválido!<br><br>";

    } else {

        echo "<h2>Tabuada do número: $numero</h2>";

        for ($i = 0; $i <= 10; $i++) {

            $resultado = $numero * $i;

            echo "$numero x $i = $resultado <br>";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabuada</title>
</head>
<body>

<form method="post">

    Digite um número entre 5 e 50:
    <input type="number" name="numero" required>

    <br><br>

    <input type="submit" value="Mostrar Tabuada">

</form>

</body>
</html>