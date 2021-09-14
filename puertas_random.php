<?php

if(isset($_GET["numero"])){

    $r = $_GET;


    $operacion= $r["numero"];



    switch($operacion){
        case '1':
            $resultado = "Felicidades, ¡Te ganaste una hermosa piedra!";

            break;
        case '2':
            $resultado = "Felicidades, ¡Te ganaste una cabra!";
            break;

        case '3':
            $resultado = "Felicidades, ¡Te ganaste un Tsuru tuneado!";
            break;



       


    }

}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puerta</title>
</head>
<body>

<h2>¡BIENVENIDO A LA CANTAFICIA CUATE!</h2>

<form method="get" action="puertas_random.php" >



            <label for="">Elige el numero: </label>
            <select name="numero" >
            <option > 1 </option>
            <option > 2 </option>
            <option > 3 </option>
            </select>

           <button type="submit"  >Elegir</button>
    </form>

    <h3><?php echo $resultado; ?></h3>
</body>
</html>