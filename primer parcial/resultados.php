<?php
include("funciones.php");
$op=$_POST['op']; //aqui recuperamos el valor de op y lo alamcenamso en la variable op
$a=$_COOKIE['a'];// aqui recuperamos la cookie que habias inicializado lo mismo
$b=$_COOKIE['b'];
$c=$_COOKIE['c'];
$ope=new Operacion($a,$b,$c ); //se crea una nueva istancia y enviando los valores recuperados de a,b,c
  if($op=="1"){ //aqui si $op es "1", se ejecuta la suma 

  echo "la suma es = ".$ope->suma(); // Llama al método suma() de la clase Operacion de funciones.php y mostra el resultado, lo mismo para los otros
  }
   else if($op=="2"){ // aqui si $op es "2", se ejecuta la resta y asi mismo
    
    echo "la resta es = ".$ope->resta();
  }
   else if($op=="3"){
    echo "la multiplivacion es = ".$ope->multiplicacion();
  }
  else if($op=="4"){
    echo "la division es = ".$ope->division();
  }
?>
<?php

