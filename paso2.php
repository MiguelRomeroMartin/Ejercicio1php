<?php
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];
$pass2 = $_POST['pass2'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet">
    <title>Inicio</title>
</head>
<body>
    <form action="paso3.php" method="POST"> 
        Nombre:
        <input type="text" name="nombre"/><br>
        Apellidos:
        <input type="text" name="apellidos"/><br>
        Correo Electronico:
        <input type="email" name="email"/><br>
        <input type="hidden" name="usuario" value="<?php echo $usuario?>"/>
        <input type="hidden" name="pass" value="<?php echo $pass?>"/>
        <input type="hidden" name="pass2" value="<?php echo $pass2?>"/>
        <input type="submit" value="Submit"/>
    </form>
</body>
</html>