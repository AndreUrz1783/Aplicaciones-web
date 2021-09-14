<h2>FORMULARIO</h2>
<form >
<label for="">Nombre: </label>
<input type="text" name="nombre" >
<br>
<br>
<label for="">Apellido: </label>
<input type="text" name="apellido" >
<br>
<br>
<label for="">Ciudad: </label>
<select name="ciudad" >
    <option > Guaymas</option>
    <option > Hermosillo</option>
    <option > Empalme</option>
    <option > Obregon</option>
    <option > Bahia de kino</option>
    <option > Benjamin</option>
    <option > Cananea</option>
    <option > Alamos</option>

</select>
<br>
<br>
<label for="">Edad: </label>
<input type="number" name ="edad">
<br>
<br>
<label for="">Telefono: </label>
<input type="text" name="telefono" >
<br>
<br>
<label for="">Correo: </label>
<input type="text" name="correo" >
<br>
<br>

<label for="">Estado civil: </label>
<select name="estado" >
    <option > Soltero </option>
    <option > Casado </option>
    
</select>
<br>
<br>

<button>Enviar</button>

</form>

<h2>FORMULARIO CONTESTADO</h2>
<?php

if( isset($_GET['nombre'])){

    echo "<h2> Nombre: " . $_GET['nombre']."</h2>";
    echo "<h2> Apellido: ". $_GET['apellido']."</h2>";
    echo "<h2> Ciudad: ". $_GET['ciudad']."</h2>";
    echo "<h2> Edad: ". $_GET['edad']."</h2>";
    echo "<h2> Telefono: ". $_GET['telefono']."</h2>";
    echo "<h2> Correo: ". $_GET['correo']."</h2>";
    echo "<h2> Estado: ". $_GET['estado']."</h2>";


}

?>