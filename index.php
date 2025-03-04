<?php
declare(strict_types=1);

require_once 'config.php';
require_once 'clases/BaseDatos.php';
require_once 'clases/Usuario.php';

use Clases\BaseDatos;
use Clases\Usuario;

// Conexión a la base de datos
$bd = new BaseDatos();
$conn = $bd->getConexion();

// Crear un usuario y mostrar su información
$usuario = new Usuario(1, "Juan Pérez", "juan@example.com");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto PHPDocumentor</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Bienvenido al Proyecto PHPDocumentor</h1>
    <p>Usuario: <?= $usuario->getNombre(); ?></p>
    <p>Email: <?= $usuario->getEmail(); ?></p>
</body>
</html>
