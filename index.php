<?php

$mostrar = "";
$tmpF = 0.0;
$tmpC = 0.0;

if (isset($_POST["temp"]) && isset($_POST["opcao"])) {
    if ($_POST["opcao"] == "F") {
        $tmpF = floatval($_POST["temp"]);
        $tmpC = ($tmpF - 32) * (5 / 9);
        $mostrar = "C";
    } else {
        $tmpC = floatval($_POST["temp"]);
        $tmpF = ($tmpC * 1.8 + 32);
        $mostrar = "F";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conversor de temperaturas</title>
</head>
<body>
<form></form>
<form method="post">
    <label for="tempF">Temperatura</label>
    <input type="number" name="temp" required>

    <select name="opcao">
        <option value="F">Fahrenheit</option>
        <option value="C">Celsius</option>
    </select>

    <input type="submit" value="Converter">
</form>


<?php if ($mostrar != "") { ?>
    <h1>Resultado da conversão:</h1>
    <?php if ($mostrar == "C") { ?>
        <p><?php echo $tmpC ?> ºC</p>
    <?php } else { ?>
        <p> <?php echo $tmpF ?> ºF</p>
    <?php }
} ?>
</body>
</html>
