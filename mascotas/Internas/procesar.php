<?php
  /* $var1=10;
   echo "Hola Mundo :)"*/
   //extract($_POST);
  include("../dl/config.php");
  include("../dl/class_mysqli.php");
  $miconexion=new class_mysqli();
  $miconexion->conectar(DBHOST,DBUSER,DBPASS,DBNAME);

  $nombres=$_POST['nombres'];
  $apellidos=$_POST['apellidos'];
  $correo=$_POST['correo'];
  $cedula=$_POST['cedula'];
  $direccion=$_POST['direccion'];
  $fechanacimiento=$_POST['fechanacimiento'];
  $telefono=$_POST['telefono'];

   

  $sql="insert into personal values('','$nombres','$apellidos','$correo','$cedula','$direccion','$fechanacimiento','$telefono')"; 
   
  //$sql="update personal set nombres= 'Daniela',apellidos='pardo' where id =7";

   $resSQL= mysqli_query($conexion,$sql);
   if ($resSQL==""){
    echo "Problemas de ejecucion del SQL";
   }else{
    echo '<script>alerta("sentencia ejecutada..");</script>';
    echo "<script>location.href'../'</script>";
   }

   /*echo " Biembenido " .$nombres. " ".$apellidos;
   for($i=0; $i=10; $i++){
    echo $i. "No debo portarme mal en clase <strong class='colorRojo'>".$nombres."</strong>".$apellidos."<br>";
   }*/
?>