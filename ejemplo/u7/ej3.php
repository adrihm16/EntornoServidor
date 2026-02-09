<?php
    session_start();
    if (!isset($_SESSION['visitas'])) {
        $_SESSION['visitas']=0;
    }
    $_SESSION['visitas']++;

    if (isset($_POST["reinicar"])) {
        $_SESSION['visitas']=0;
        header("refresh: 0");
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <?php echo"Visitas " . $_SESSION['visitas'] . "<br>"; ?>
    <form method="POST" action="">
        <button type="submit" name="reinicar">reinicar</button>
    </form>
</body>
</html>
