<?php
session_start();

$get_var1 = isset($_GET['get_var1']) ? urldecode($_GET['get_var1']) : 'Variable 1';
$get_var2 = isset($_GET['get_var2']) ? urldecode($_GET['get_var2']) : 'Variable 2';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pagina Secundaria</title>
</head>
<body>
    <h1>Pagina Secundaria</h1>

    <p>GET Variable 1: <?php echo $get_var1; ?></p>
    <p>GET Variable 2: <?php echo $get_var2; ?></p>

    <h2>SESSION Variables:</h2>
    <p>SESSION Variable 1: <?php echo $_SESSION['session_var1']; ?></p>
    <p>SESSION Variable 2: <?php echo $_SESSION['session_var2']; ?></p>
    <p>SESSION Variable 3: <?php echo $_SESSION['session_var3']; ?></p>
    <p>SESSION Variable 4: <?php echo $_SESSION['session_var4']; ?></p>

    <h2>COOKIES:</h2>
    <p>Cookie 1: <?php echo isset($_COOKIE['cookie1']) ? $_COOKIE['cookie1'] : 'Cookie 1'; ?></p>
    <p>Cookie 2: <?php echo isset($_COOKIE['cookie2']) ? $_COOKIE['cookie2'] : 'Cookie 2'; ?></p>

    <p><a href="Ejercicio1.php">Volver a la pagina principal</a></p>
</body>
</html>
