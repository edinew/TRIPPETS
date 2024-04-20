<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO USUARIOS</title>
</head>
<body>

<h2>Registro de Usuario</h2>

<form action="register_process.php" method="post">
    <label>Nombre de usuario:</label>
    <input type="text" name="username" required><br><br>

    <label>Email:</label>
    <input type="email" name="email" required><br><br>

    <label>Contraseña:</label>
    <input type="password" name="password" required><br><br>

    <label>Confirmar Contraseña:</label>
    <input type="password" name="confirm_password" required><br><br>

    <input type="submit" value="Registrarse">
</form>
    
</body>
</html>