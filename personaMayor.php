<?php

$enviado=false;

if(isset($_GET["nombre1"])){

    $enviado=true;
    $r= $_GET;

    $nombre1= $r["nombre1"];
    $edad1= $r["edad1"];
    $nombre2= $r["nombre2"];
    $edad2= $r["edad2"];

    if($edad1 > $edad2){
        $resultado= $nombre1." es mayor que ". $nombre2;
    }elseif($edad2>$edad1){
        $resultado= $nombre2." es mayor que ". $nombre1;
    }elseif($edad1 == $edad2){
        $resultado= $nombre1." y ".$nombre2." tienen la misma edad" ;
    }

}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PersonaMayor</title>
</head>
<body>
    <h2> Persona Mayor  </h2>

    <form method="get" action="personaMayor.php">

        <label for=""> Introduzca el primer nombre:</label>
        <input type= "text" name= "nombre1">

        <br>
        <br>

        <label for=""> Introduzca la primer edad:</label>
        <input type= "number" name= "edad1">

        <br>
        <br>

        <label for=""> Introduzca el segundo nombre:</label>
        <input type= "text" name= "nombre2">

        <br>
        <br>
        <label for=""> Introduzca la segunda edad:</label>
        <input type= "number" name= "edad2">
        <br>
        <br>

        <button type="submit" >Enviar</button>
    </form>

    <?php if($enviado){ ?>
    

    <h2> <?= $resultado; ?>  </h2>


    <?php } ?>
</body>
</html>