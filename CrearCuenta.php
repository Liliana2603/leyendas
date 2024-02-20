<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Leyendas Salvadoreñas</title>
    <link rel="stylesheet" href="miestilo.css">
</head>
<body>

    <header>
        <div >
        <img class="imgleyen"src="BLOG-IMG\leyendas.jpg"  alt=""> 
        </div>
        
    </header>
<div class="contenedor2">
<section class="formulario ">
                <div class="form">
    <form method="POST" action="regitrar.php" >
        <h2>Crear Cuenta</h2>
        <hr>
        
        <div class="container">
            <div class="">
                <input type="text" name="nombre_completo" required="" pattern="[a-zA-Z- ]+" placeholder="Nombre Completo">
            </div>

            <div class="">
                <input type="email" name="correo" id="" required="" placeholder="Correo Electronico">
            </div>

            <div class="">
                <input type="text" name="usuario" id="" required="" pattern="[a-zA-Z-0-9- ]+" placeholder="Nombre de Usuario">
            </div>

            <div class="">
                <input type="password" name="contrasena" id="" required="" placeholder="Contraseña">
            </div>

            <input name="enviar" type="submit" value="Crear Cuenta" class="button">
            <p>
                <input type="checkbox" name="" id="" required=""> Aceptas nuestras Politicas
            </p>
            <p>
                ¿Ya tienes cuenta?
                <a class="link" href="login.php">Iniciar Sesion</a>
            </p>
        </div>
    </form>
                </div>
</section>
    
    </div>
