<?php

include("con_db.php");

$USUARIO=$_POST['usuario'];
$PASSWORD=$_POST['contraseña'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$DNI=$_POST['DNI'];

$consulta = "INSERT INTO usuario(usuario,contraseña,correo,telefono,DNI) VALUES ('$USUARIO','$PASSWORD','$correo','$telefono','$DNI')";



//verificar que no se repitan usuarios en la base de datos

$verificar_usuario = mysqli_query($conex, "SELECT * FROM usuario WHERE usuario='$USUARIO' ");
if(mysqli_num_rows($verificar_usuario) >0){
	echo'
 	    <script>
		  alert("este usuario ya esta registrado,intente con otro");
		  window.location = "./indexxx.php";
		</script>
	';
	exit();

}

//verificar que no se repitan los correos en la base de datos

$verificar_correo = mysqli_query($conex, "SELECT * FROM usuario WHERE correo='$correo' ");
if(mysqli_num_rows($verificar_correo) >0){
	echo'
 	    <script>
		  alert("este correo ya esta registrado,intente con otro");
		  window.location = "./indexxx.php";
		</script>
	';
	exit();
}	

//verificar que no se repita el DNI en la base de datos

$verificar_DNI = mysqli_query($conex, "SELECT * FROM usuario WHERE DNI='$DNI' ");
if(mysqli_num_rows($verificar_DNI) >0){
	echo'
 	    <script>
		  alert("este numero de cedula ya esta registrado,intente con otro");
		  window.location = "./indexxx.php";
		</script>
	';
	exit();

}

$resultado = mysqli_query($conex,$consulta); 


if ($resultado) {
	echo'
 	    <script>
		  alert("te has registrado con exito");
		  window.location = "./iniciar.php";
		</script>
	';
} else {
	?> 
	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
   <?php
}
   
?> 