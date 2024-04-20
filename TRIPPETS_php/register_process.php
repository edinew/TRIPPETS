<?php

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Validar contraseñas
    if ($password != $confirm_password) {
        echo "Las contraseñas no coinciden.";
        exit();
    }

    // Hash de la contraseña
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insertar datos en la tabla users
    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $hashed_password);

    if ($stmt->execute()) {
        echo "Registro exitoso. <a href='login.php'>Iniciar sesión</a>";
    } else {
        echo "Error al registrar el usuario: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}

?>