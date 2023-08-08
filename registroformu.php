<?php 
include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) {
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
        $telefono = trim($_POST['telefono']);
		$contraseña = trim($_POST['contraseña']);
		$rol = trim($_POST['rol']);
		$tipo_de_documento = trim($_POST['tipo_de_documento']);
		$direccion = trim($_POST['direccion']);
		$no_documento = trim($_POST['no_documento']);
	    $fechareg = date("d/m/y");


	    $consulta = "INSERT INTO datos(nombre, email, fecha_reg, telefono, contraseña, direccion, no_documento, rol, tipo_de_documento) VALUES ('$name','$email','$fechareg','$telefono', '$contraseña', '$direccion', '$no_documento','$rol','$tipo_de_documento')";
	    $resultado = mysqli_query($conex,$consulta);
		
	    if ($resultado) {
	    	echo'
 	    <script>
		  alert("formulario completado con exito");
		  window.location = "";
		</script>
	';
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
		echo'
		<script>
		 alert("por favor complete los campos");
		 window.location = "";
	   </script>
   ';
    }
}


?> 