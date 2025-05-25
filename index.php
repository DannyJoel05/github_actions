

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1>Bienvenidos Danny</h1>
    <?php
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
    <script src="main.js"></script>
</body>

</html>