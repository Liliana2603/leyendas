<?php
include 'conexion.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
date_default_timezone_set('America/El_Salvador');
$fechareg = date('d-m-Y');
$horareg = date('H:i:s');

//Encriptamiento de la contraseña
$contrasena = hash('sha512', $contrasena);

$query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena, fecha_reg, hora_reg)
            VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena', '$fechareg', '$horareg')";

//Verificar que el correo no se repita en la base de datos
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");
if (mysqli_num_rows($verificar_correo) > 0) {
    echo '
        <script>
        alert("Este correo ya esta registrado, intenta con otro diferente");
        window.location = "CrearCuenta.php";
        </script>
        ';
    exit();
}

//Verificar que el nombre de usuario no se repita en la base de datos
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'");
if (mysqli_num_rows($verificar_usuario) > 0) {
    echo '
        <script>
        alert("Este usuario ya esta registrado, intenta con otro diferente");
        window.location = "CrearCuenta.php";
        </script>
        ';
    exit();
}

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '
        <script>
            alert("Usuario almacenado exitosamente");
            window.location = "comentario.php";
        </script>
        ';
} else {
    echo '
        <script>
            alert("intentalo de nuevo, usuario no almacenado");
            window.location = "CrearCuenta.php";
        </script>
        ';
}

mysqli_close($conexion);
?>