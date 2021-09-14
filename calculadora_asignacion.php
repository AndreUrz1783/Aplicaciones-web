<?php

if(isset($_GET["operacion"])){

    $r = $_GET;


    $operacion= $r["operacion"];
    $numero_1= $_GET["num1"];
    $numero_2= $_GET["num2"];





    switch($operacion){
        case 'suma':
            $resultado = $numero_1 + $numero_2;

            break;
        case 'resta':
            $resultado = $numero_1 - $numero_2;
            break;

        case 'multiplicacion':
            $resultado = $numero_1 * $numero_2;
            break;

        case 'division':
            $resultado = $numero_1 / $numero_2;
            break;

        default:
            $resultado = "No hay ninguna operacion";
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
    <title>Calculadora</title>
</head>
<body>

    <h1>Calculadora de operaciones </h1>

    <form method="get" action="calculadora_asignacion.php" >


    
            <label for="">Numero 1:</label>
            <input type="text" name="num1">

        <br>    
            
<br>
            
            <label for="">Numero 2:</label>
            <input type="text" name="num2">

         <br>
         <br>
 
         <label for="">Operacion</label>
            <select name="operacion" >
            <option > suma </option>
            <option > resta </option>
            <option > multiplicacion </option>
            <option > division </option>

</select>

          <br>  
<br>
           <button type="submit"  >Calcular</button>
    </form>



    <h3><?php echo "Resultado: " . $resultado; ?></h3>



</body>
</html>