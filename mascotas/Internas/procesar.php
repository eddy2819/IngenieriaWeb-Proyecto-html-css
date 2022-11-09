<?php
  /* $var1=10;
   echo "Hola Mundo :)"*/
   //extract($_POST);
   $nombres=$_POST['nombres'];
   $apellidos=$_POST['apellidos'];
   $correo=$_POST['correo'];
   $cedula=$_POST['cedula'];
   $direccion=$_POST['direccion'];
   $fechanacimiento=$_POST['fechanacimiento'];
   $telefono=$_POST['telefono'];
   echo " Biembenido " .$nombres. " ".$apellidos;
   for($i=0; $i=10; $i++){
    echo $i. "No debo portarme mal en clase <strong class='colorRojo'>".$nombres."</strong>".$apellidos."<br>";
   }
?>