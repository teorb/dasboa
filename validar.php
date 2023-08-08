<?php

include('db.php');

$USUARIO=$_POST['usuario'];
$PASSWORD=$_POST['contraseña'];


$consulta = "SELECT* FROM usuario  where usuario = '$USUARIO' and contraseña = '$PASSWORD' ";
$resultado= mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location: index.php");
}else{
    echo'
		<script>
		 alert("!UPS¡ no se encuentra registrado en la base de datos, por favor crear una cuenta");
		 window.location = "./iniciar.php";
	   </script>
   ';
}
mysqli_free_result($resultado);
mysqli_close($conexion);



?>