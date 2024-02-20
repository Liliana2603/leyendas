<?php

session_start();

if (!isset($_SESSION['usuario'])) {
    echo '
            <script>
                alert("Por favor debes iniciar sesión");
                window.location = "login.php";
            </script>
        ';
    session_destroy();
    die();
}
?>
<?php
include_once "header2.php";
?>
<div class="contenedor2">
   


</div>
<?php
include_once "Footer.php";
?>