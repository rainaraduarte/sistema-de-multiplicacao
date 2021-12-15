<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body> 
<?php
$numero1 = $_POST["num1"];
$numero2 = $_POST["num2"];
$resultado;

$resultado = $numero1 * $numero2;
echo "<h3> O resultado da multiplicação entre $numero1 e $numero2 é igual a $resultado!</h3>";

?>
</body>
</html>
