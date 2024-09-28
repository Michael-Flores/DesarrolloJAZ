<?php
include("conexion.php");
$id=$_POST['id']; //aqui recuperamos los datos de nuestro formulario 'de la caja de texto' para poder editar en la bse de datos
$correo = $_POST["correo"];//lo mismo


$sql= "UPDATE USUARIOS set correo='$correo' WHERE id=$id"; //aqui lo que va a hacer es actualizar el correo con respecto del id 
 //osea si el id =1 entonces busca ese id en su base de datos y edita  el correo reemplazandolo por el que recuperaste $correo ese el que recuperaste
$result = $con->query($sql);  
if(!$result){
    die("Error al editar datos: " . $con->error); //este mensaje se muestra solo si no se pudo actualizar
}
?>
<div>Se edito con exito</div>
<meta http-equiv="refresh" content="3; url=pregunta4.php"><!-- esto lo que hace es refrescar la pagina actual en 3 segundo y te envia a la pagina principal donde estan tus datos 'la tabla' -->