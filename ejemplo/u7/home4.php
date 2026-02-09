<?php
    session_start();
if ($_SESSION["auth"]) {
    echo "Bienvenido " . $_SESSION["usuario"] . "<br>";
} else {
    header("location: ej4.php");
}