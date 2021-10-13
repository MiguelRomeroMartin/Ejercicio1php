<?php
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];
$pass2 = $_POST['pass2'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$areasInteres = $_POST['areasInteres'];

echo 'Usuario = ' . $usuario . '<br>';
echo 'Contraseña = ' . $pass . '<br>';
echo 'Contraseña Repetida = ' . $pass2 . '<br>';
echo 'Nombre = ' . $nombre . '<br>';
echo 'Apellidos = ' . $apellidos . '<br>';
echo 'Email = ' . $email . '<br>';
echo 'Area de interes elegida =  ' . $areasInteres . '<br>';
