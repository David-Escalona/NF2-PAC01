<?php
session_start();

// Aqui he creado 4 variables SESSION
$_SESSION['session_var1'] = 'Esta es la primera variable';
$_SESSION['session_var2'] = 'Me llamo David Escalona García';
$_SESSION['session_var3'] = 'Tengo 19 años';
$_SESSION['session_var4'] = 'Soy español';

// Aqui he creado 2 variables POST
$post_var1 = isset($_POST['post_var1']) ? $_POST['post_var1'] : NULL;
$post_var2 = isset($_POST['post_var2']) ? $_POST['post_var2'] : NULL;

// Aqui he creado 2 variables COOKIE
setcookie('cookie1', 'Cookie Value 1', time() + 3600, '/');
setcookie('cookie2', 'Cookie Value 2', time() + 3600, '/');

// Aqui he creado 2 variables GET
$encoded_var1 = urlencode("This is GET variable 1");
$encoded_var2 = urlencode("This is GET variable 2");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pagina Principal</title>
</head>
<body>
    <h1>Pagina Principal</h1>

    <form method="post" action="Ejercicio2.php">
        Variable 1: <input type="text" name="post_var1" value="<?php echo $post_var1; ?>"><br>
        Variable 2: <input type="text" name="post_var2" value="<?php echo $post_var2; ?>"><br>
        <input type="Submit" value="Submit">
    </form>
</body>
</html>
