<?php
    session_start();
    session_destroy();

    setcookie(session_name(), '', time() - 3600, '/'); // Si quisieramos también borrar la cookie (PHPSESSID)
    header("Location: login.php");
    exit();
?>