<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión - TRIPPETS</title>
</head>
<body>

    <h2>Iniciar Sesión</h2>

    <form action="login_process.php" method="post">
        <div>
            <label for="username">Nombre de Usuario:</label>
            <input type="text" name="username" required>
        </div>
        <div>
            <label for="password">Contraseña:</label>
            <input type="password" name="password" required>
        </div>
        <div>
            <input type="submit" value="Iniciar Sesión">
        </div>
    </form>

</body>
</html>
