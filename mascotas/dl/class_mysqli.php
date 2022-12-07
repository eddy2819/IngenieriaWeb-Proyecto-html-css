<?php
/*
* class mysql i
*/
class  class_mysqli{
    // var de conexion de la db
    var $BaseDatos;
    var $Servidor;
    var $Usuario;
    var $Clave;

    // variables de error
    var $Error="";
    var $errno=0;

    // variables de conexion
    var $Conexion_ID=0;
    var $Conexion_ID=0;

    Public function_construct($host="", $user="", $pass="", $db="")
    {
        $this->BaseDatos=$db;
        $this->Usuario=$user;
        $this->Clave=$pass;
        $this->Servidor=$host;
    }

    function conectar($host,$user,$pass,$db){
        if ($db != "") $this->BaseDatos=$db;
        if ($user != "") $this->Usuario=$user;
        if ($pass != "") $this->Clave=$pass;
        if ($host != "") $this->Servidor=$host;

        // parametros de conexion a la db
        $this->Conexion_ID=new mysqli($this->Servidor,$this->Usuario,$this->Clave,$this->BaseDatos);
        if(!$this->Conexion_ID){
            $this->error = "La conexion a fallado:(";
            return 0;
        }

        return $this->Conexion_ID;
    }
    function consulta($sql=""){
		if ($sql=="") {
			$this->Error="No hay sql";
			return 0;
		}
		//ejecuta la sql
		$this->Consulta_ID=mysqli_query($this->Conexion_ID, $sql);
		if (!$this->Consulta_ID) {
			print($this->Conexion_ID->error);
			return 0;
		}
		return $this->Conexion_ID;
	}
    function numcampus(){
        return mysqli_num_fields($this->Conexion_ID);
    }
    function numregistros(){
        return mysqli_num_rows($this->Consulta_ID);
    }
    function verconsulta(){
        echo "<table border='1'>";
        echo"<tr>";
        for ($i=0; $i <  $this->numcampus(); $i++){
            echo "<td>".mysqli_fetch_field_direct($this->Consulta_ID,$i)->name."</td>";
        }
        echo"</tr>";
        while ($row=.mysqli_fetch_array($this->Consuta_ID)) {
            echo "<tr>";
            for ($i=0 ; $i <tr $this ->numcampus; $i++) { 
                echo "<td>".$row[$i]."</td>";
            }
            echo "</tr>";
        }
        echo"</table>";
    }
    function verconsultaCRUD(){
		echo "<table border='1'>";
		echo "<tr>";
		for ($i=0; $i < $this->numcampos(); $i++) { 
			echo "<td>".mysqli_fetch_field_direct($this->Consulta_ID, $i)->name."</td>";
		}
		
		echo "<td>Actualizar</td>";
		echo "<td>Borrar</td>";
		echo "</tr>";
		while ($row=mysqli_fetch_array($this->Consulta_ID)) {
			echo "<tr>";
			for ($i=0; $i < $this->numcampos(); $i++) { 
				echo "<td>".$row[$i]."</td>";
			}
			echo "<td><a href='update.php?idUser=$row[0]'>Actualizar</a></td>";
			echo "<td><a href='deleteUser.php?pepito=$row[0]'>Borrar</a></td>";
			echo "</tr>";
		}
		echo "</table>";
	}
}
?>