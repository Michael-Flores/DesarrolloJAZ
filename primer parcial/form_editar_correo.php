<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: flex;
            justify-content: center;
        }
        .dis{
            border: 2px solid;
            border-color: rgb(98, 123, 221);
            width: 600px;
            height: 200px;
        }
        .color{
            background-color: rgb(98, 123, 221);
            color: white;
            margin-left: 90px;
            border: none;
            width: 130px;
            height: 30px;
        }
    </style> <!-- aqui en el body solo centramos para que este en el medio
                en el .dis ponemos el tamano de la caja y el color del borde 
                y el .color una clase para editar el boton su tamano y color  el border none significa que no tendra un border -->
    
</head>
<body>
    <div class="dis">
    <?php 
    $id=$_GET['id'];
    include('conexion.php');
    $sql = "SELECT id, nombres, apellidos, correo FROM usuarios WHERE id = $id";//aqui hacemos consulta de los datos con respecto del id solo mostrara los datos del id 
    //por ejemplo si el id es 1 entonces mostrara los datos de ese id mas bien solo recupera esos datos
    $result = $con->query($sql);
    $datos = $result->fetch_assoc(); //el resultads lo guardamos en datos

    ?>
    <p style="margin-left:20px;">Nombre y Apellidos: <?php echo $datos['nombres'];?> <?php echo $datos['apellidos'];?></p> <!-- aqui imprimimos el nombre y apellido abriendo y cerrando php -->
    <form action="editar.php" method="post"> <!-- al apretar el boton de Actualizar nos mandara aeditar.php por el metodo post -->
        <input type="hidden" name="id" value="<?php echo $datos['id'];?>"> <!-- el type='hidden ' es para que se mantenga oculto no se muestra en la pantalla es solo para recuperar ese dato -->
        <label style="margin-left:20px;" for="">Correo: </label>
        <input style="border-color: rgb(98, 123, 221);" type="email" name="correo" value="<?php echo $datos['correo']; ?>" ><br><br><!-- aqui impirmimos el correo en value para saber cuak es -->
        <input class="color" type="submit" value="Actualizar">
    </div>
    
</body>
</html>