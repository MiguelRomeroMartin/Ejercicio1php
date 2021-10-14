<?php
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];
$pass2 = $_POST['pass2'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
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
    <form action="paso4.php" method="POST"> 
        Lugares de interes: 
        <select id="areasInteres" name="areasInteres" multiplesize ='5'>
            <option value="Sagrada">Sagrada Familia</option>
            <option value="Alhambra">Alhambra</option>
            <option value="Albayzin">Albayzin</option>
            <option value="Giralda">Giralda</option>
        </select> <br>
        <input type="hidden" name="usuario" value="<?php echo $usuario?>"/>
        <input type="hidden" name="pass" value="<?php echo $pass?>"/>
        <input type="hidden" name="pass2" value="<?php echo $pass2?>"/>
        <input type="hidden" name="nombre" value="<?php echo $nombre?>"/>
        <input type="hidden" name="apellidos" value="<?php echo $apellidos?>"/>
        <input type="hidden" name="email" value="<?php echo $email?>"/>
        <input type="submit" value="send"/>
    </form>
</body>
</html>