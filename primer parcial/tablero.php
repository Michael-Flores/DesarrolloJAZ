<?php
//recupero los datos por el metodo pos de preginta2.html
$nfila=$_POST['nf'];
$ncolumna=$_POST['nc'];
$fila=$_POST['f'];
$columna=$_POST['c'];
$colo=$_POST['color'];

//imprimimos la tabla 
echo "<table style='border-collapse: collapse;'>";
//se crea un ciclo for donde  i inicia en 1  y i es menor igual a la fila  
for ($i = 1; $i <= $fila; $i++) {
    //imprimimos un tr que es parte de la tabla
    echo "<tr>";
    //se crea un ciclo for donde  j inicia en 1  y j es menor igual a la columna  
    for ($j = 1; $j <= $columna; $j++) {
        // se hace una condicional para alternar colores aqui se pregunta si la suma de j+i su modulo entre 2 es igaual a 0
        //entonses en la variable color se guarda el color blamco 
        //($i + $j) % 2 == 0 eso quere decir que las posisiones impares tomaran el color blanco 
        if (($i + $j) % 2 == 0) {
            $color = "#FFFFFF";  // Blanco
        } else {
            //por falso se guarda el color que recuperameos 
            //las posisiones tomaran el color que se manda
            $color = $colo;  
        }

        // se crea las filas y columnas del tablero  y se coloca la imagen con el color   y se hace una condicional
        //se pregunta si i es igual ala posision n filas que recuperamos  y si j es igual ala ncolumnas que recuperamos
        //si cumple  entonses esntra
        if ($i == $nfila && $j == $ncolumna) {
            //inprimimos  la tabla identificada en sus posiciones  para insertar imagen  y se le pone un estilo  que tiene el color amarillo
            //se añade la imagen detro del td que es etiqueta html y es parte de tabla  solo eso imprime la posission 
            //donde estar la imagen 
            echo "<td style='background-color:#FFC000;'>
                    <img src='img/Bowser.png' width='50px'>
                  </td>";
        } else {
            ///por falso imprime los demas trableros intercalando los colore como se ve en   background-color: $color
            //hai se pone la variable $color donde anterior mente mas ariba identificamos  para poder pintar 
            //intercaladamente   en la pate del if(($i+$j)%2==0 )
            echo "<td style='border: 1px solid black; width: 100px; height:50px; background-color: $color; '></td>";
        }
    }
    echo "</tr>";
}

echo "</table>";
?>