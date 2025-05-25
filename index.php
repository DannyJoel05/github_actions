<?php
// Cargar el archivo .env
$env = parse_ini_file(__DIR__ . '/.env');

// Cargar variables al entorno
foreach ($env as $key => $value) {
    $_ENV[$key] = $value;
    putenv("$key=$value"); // Opcional, para que esté disponible también para llamadas al sistema
}

// Mostrar contenido de $env (debug)
echo '<pre>' . print_r($env, true) . '</pre>';
// Load environment variables from .env file
// This is a simple PHP script
echo "<h1>Hello, World!</h1>";
echo '¡Mi nombre de usuario es ' . $_ENV["USER"] . '!';
echo '¡Mi nombre de username es ' . $_ENV["username"] . '!';
echo '¡Mi nombre de password es ' . $_ENV["password"] . '!';
echo '¡Mi nombre de user es ' . $_ENV["USER"] . '!';
echo '¡Mi nombre de secrets.USERNAME es ' . $_ENV["secrets.USERNAME"] . '!';
echo '¡Mi nombre de secrets.PASSWORD es ' . $_ENV["secrets.PASSWORD"] . '!';
echo '¡Mi nombre de database es ' . $_ENV["database"] . '!';
echo '¡Mi nombre de vars.LANGUAGE es ' . $_ENV["vars.LANGUAGE"] . '!';
echo '¡Mi nombre de vars.DESARROLLADOR es ' . $_ENV["vars.DESARROLLADOR"] . '!';
?>