
<html lang="es">
    
    <head>
        
        <meta charset="utf-8">
        
        <title> Formulario de Acceso </title>    
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <meta name="author" content="Videojuegos & Desarrollo">
        <meta name="description" content="Muestra de un formulario de acceso en HTML y CSS">
        <meta name="keywords" content="Formulario Acceso, Formulario de LogIn">
        
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Overpass&display=swap" rel="stylesheet">
        
        <!-- Link hacia el archivo de estilos css -->
        <link rel="stylesheet" href="login.css">
        
    </head>
    
    <body>
        <form action="registrar.php" method="post">
        
        <div id="contenedor">
            <div id="central">
                <div id="login">
                    <div class="titulo">
                        Bienvenido
                    </div>
                    <form id="loginform">
                        <input type="text" name="usuario" placeholder="Usuario" required>
                        
                        <input type="password" placeholder="Contraseña" name="contraseña" required>

                        <input type="number" placeholder="telefono" name="telefono" required>

                        <input type="number" placeholder="Cedula" name="DNI" required>

                        <input type="email" placeholder="Correo" name="correo" required>
                        
                        <button type="submit" title="Ingresar" name="Ingresar">crear cuenta</button>
                    </form>
                    
                </div>
               
            </div>
        </div>
        </form>
            
    </body>
</html>