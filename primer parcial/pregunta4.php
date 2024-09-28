<style>
    table {
        border-collapse: collapse;
    }

    th {
        background-color: red;
    }

    tr:nth-child(3) { 
        background-color: yellow; 
    }
   
</style> <!-- en tr:nth-child le decimos que nos pinte las celdas de la fila 3 en amarillo -->
<?php
include("conexion.php");

if (isset($_GET['ordenar'])) { //verifica si no esta vacio
    $ordenar = $_GET['ordenar']; 
} else {
    $ordenar = "id";
}

if (isset($_GET['filtro'])) {
    $filtro = $_GET['filtro'];
    //aqui es donde ordena dependiendo de que columna hayas presionado ya se de nombres apellidos, etc
    $sql = "SELECT id, nombres, apellidos, correo FROM usuarios WHERE nombres LIKE '%$filtro%' OR apellidos LIKE '%$filtro%' ORDER BY $ordenar ASC";
} else {
    $sql = "SELECT id, nombres, apellidos, correo FROM usuarios ORDER BY $ordenar ASC";
}

$result = $con->query($sql);
$i = 1;

//aqui se verifica si hay resultados, si se tiene datos si no no pasa la condicion y no imprime nda
if ($result->num_rows > 0) {
    ?>
    <table border='1'>
        <tr>
            <th><a style="color:white" href="pregunta4.php?ordenar=nombres">Nombres</a></th>  <!--el href llama a si mismo con ordenar y el valor de la columna que quiere ordenar en este caso nombres  -->
            <th><a style="color:white" href="pregunta4.php?ordenar=apellidos">Apellidos</a></th>
            <th><a style="color:white" href="pregunta4.php?ordenar=correo">Correo</a></th>
        </tr>
        <?php
        // este es un bucle repetitivo que recorre los datos que se obtuvieron de la base de datos
        while ($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $row["nombres"]; ?></td><!-- Muestra el nombre del usuario -->
                <td><?php echo $row["apellidos"]; ?></td>
                <td><a href="form_editar_correo.php?id=<?php echo $row["id"] ?>"><?php echo $row["correo"]; ?></a></td><!-- Enlace que permite editar el correo del usuario, pasándole su ID como parámetro en la URL -->
            </tr>
        <?php } ?>
    </table>
    <?php
} else {
    echo "0 resultados";// Muestra un mensaje si no hay datos en la base de datos
}

mysqli_close($con);
?>