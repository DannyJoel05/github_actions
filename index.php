<?php
// Cargar el archivo .env
$env = parse_ini_file(__DIR__ . '/.env');

// Asignar variables al entorno
foreach ($env as $key => $value) {
    $_ENV[$key] = $value;
    putenv("$key=$value");
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1>Bienvenidos Danny 2</h1>

    <h2>Variables de entorno</h2>
    <ul>
        <li>Usuario: <?= $_ENV["USER"] ?? 'N/D' ?></li>
        <li>Username: <?= $_ENV["USERNAME"] ?? 'N/D' ?></li>
        <li>Password: <?= $_ENV["PASSWORD"] ?? 'N/D' ?></li>
        <li>Database: <?= $_ENV["DATABASE"] ?? 'N/D' ?></li>
        <li>Lenguaje: <?= $_ENV["LANGUAGE"] ?? 'N/D' ?></li>
        <li>Desarrollador: <?= $_ENV["DESARROLLADOR"] ?? 'N/D' ?></li>
    </ul>

    <h3>Dump .env (debug)</h3>
    <pre><?= print_r($env, true) ?></pre> <br>
    <pre><?= print_r($env) ?></pre>

    <script src="main.js"></script>
</body>

</html>
