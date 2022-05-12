<?php

$mostrar = false;
$tmpC = 0.0;

if( isset( $_POST["tempF"] ) ) {
    $tmpF = floatval($_POST["tempF"]);
    $tmpC = ($tmpF - 32) * (5 / 9);
    $mostrar = true;
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
        <label for="tempF" >Temperatura em Farhneith</label>
        <input type="number" name="tempF" required>
        <input type="submit" value="Converter">
    </form>



<?php if($mostrar) {?>
    <h1>Resultado da conversão:</h1>
    <p><?php echo $tmpC ?> ºC</p>
<?php } ?>
</body>
</html>
