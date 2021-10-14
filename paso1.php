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
    <form action="paso2.php" method="POST"> 
        Usuario:
        <input type="text" name="usuario"/><br>
        Contraseña:
        <input type="password" name="pass"/><br>
        Repite la contraseña:
        <input type="password" name="pass2"/><br>
        <input type="submit" value="Submit"/>
    </form>
</body>
</html>