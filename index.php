<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo PHP</title>
</head>
<body>
<h1>Tablas de Multiplicar</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Ingrese el número de la tabla de multiplicar (1-10): <input type="number" name="numero" min="1" max="10" required><br><br>
        <input type="submit" name="submit" value="Generar Tabla">
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener el número ingresado por el usuario
        $numero = $_POST["numero"];

        // Verificar si el número está dentro del rango permitido
        if ($numero >= 1 && $numero <= 10) {
            echo "<h2>Tabla de multiplicar del $numero:</h2>";
            echo "<ul>";
            // Generar la tabla de multiplicar
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero * $i;
                echo "<li>$numero x $i = $resultado</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>Ingrese un número válido entre 1 y 10.</p>";
        }
    }
    ?>

</html>