
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio con formulario en php</title>
</head>
<body>
    <form action="#" method="post">
        <input type="number" name="numero" id="numero" placeholder="Ingrese un numero">
        <button type="submit">Enviar</button>
    </form>
    <?php
$numeros = $_POST['numero'];
 
if($numeros>=1){
    echo"el numero ingresado es positivo";
}
elseif($numeros<=-1){
    echo"el numero ingresado es negativo";
}
else{
    echo "el numero es cero";
}
?>
</body>
</html>