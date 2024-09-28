<?php
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];//aqui recuperamos los avelores introducidos en nuestras cajas
setcookie('a',$a,time()+3600); ///aqui inicializamos la cookie y le damos valor lo que esta entre comillas es con ese nommbre que
                            // recureparemos y $a o $b que esta a su lado es para darle el valor recuperado y le damos el tiempo de duracion de 3600 seg 
setcookie('b',$b,time()+3600);
setcookie('c',$c,time()+3600);
?>

<table>
        <tr>
            <td style="border: 1px solid black;"> 
                <div> <!--aqui creamos formuarios con un inptu de typo submit para boton  -->
                <form action="resultados.php" method="post">
                    <input style="background-color: #C60000;" type="submit" value="suma"  >
                    <input type="hidden" name="op" value="1"> <!--aqui tenemos un tipo hidden que es para ocultar no se muestra en pantalla 
                    y se le da un nombre op para recuperar su value en este caso 1 que representa a la suma para resta 2 y asi sucesivamente
                     los formularios nos mandan a resultado.php-->
            
                    </form>
                </div>
                <div>
                <form action="resultados.php" method="post">
                    <input style="background-color: #FFC000" type="submit" value="resta">
                    <input type="hidden" name="op" value="2">
                    </form>
                </div>
                <div>
                <form action="resultados.php" method="post">
                    <input style="background-color: #0070C0;" type="submit" value="multiplicacion" >
                    <input type="hidden" name="op" value="3">
                    </form>
                </div>
                <div>
                <form action="resultados.php" method="post">
                    <input style="background-color: rgb(91, 225, 98);;" type="submit" value="division" >
                    <input type="hidden" name="op" value="4">
                    </form>
                </div>
            </td>
        </tr>
    </table>

