<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Aquí iría la lógica de autenticación
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // Simulando un login exitoso
    if ($usuario == "usuario" && $contrasena == "contraseña") {
        $_SESSION['usuario'] = $usuario;
        header("Location: inicio.html");
        exit();
    } else {
        $error = "Usuario o contraseña incorrectos.";
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Login</title>
</head>
<style>
    body {
        font-family: 'Arial', sans-serif;
        background-image: url(Circuitos\ fondo\ digital\ degradado\ azul\ y\ rojo_\ _\ Vector\ Gratis.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    /* .login-card {
    padding: 20px 40px;
    font-size: 24px;
    color: #333;
    background-color: #ED8756;
    border: 4px solid #4C3E2A;
    
    border-radius: 8px;
    box-shadow: 0 4px 20px rgba(0, 123, 255, 0.2);
    transition: transform 0.3s;
}

.login-card:hover {
    transform: scale(1.05);
} */
    .login-card {
        padding: 20px 40px;
        font-size: 24px;
        color: #333;
        /*  */
        border: 5px solid #4A76B5;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
        transition: box-shadow 0.5s, transform 0.5s;

    }

    .login-card:hover {
        box-shadow: 0 0 20px rgba(0, 123, 255, 0.9);
        transform: translateY(-5px);
    }


    /* ------------------------------------------------------------------------------------------------------ */
    h2 {
        margin-bottom: 20px;
        color: white;
        font-family: cursive;
    }

    .input-group {
        margin-bottom: 20px;

    }

    .POST {
        text-align: center;
        border: 2px solid black;
    }

    input[type="text"],
    input[type="password"] {
        width: 60%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        transition: border-color 0.3s;
        box-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
        transition: box-shadow 0.3s, transform 0.3s;
    }

    input:focus {
        border-color: #007BFF;
        outline: none;
        box-shadow: 0 0 20px rgba(0, 123, 255, 0.9);
        transform: translateY(-5px);
    }

    button {
        padding: 10px 20px;
        background-color: #f5b041 ;
        color: black;
        border: none;
        border-radius: 5px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        cursor: pointer;
        transition: transform 0.2s;
        font-size: 24px;
        color: #333;

        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
        transition: box-shadow 0.5s, transform 0.5s;


    }

    button:hover {
        transform: translateY(-2px);
        background-color: #f9e79f;
        box-shadow: 0 0 20px rgba(0, 123, 255, 0.9);
        transform: translateY(-5px);
    }

    .error {
        color: red;
        margin-bottom: 15px;
    }

    /* .footer {
        width: 60%;
        margin-top: 10px;
        box-shadow: 0 0 10px rgba(0, 123, 255, 0.9);
        transition: box-shadow 0.5s, transform 0.5s;
        border-radius: 10px;
    } */

    .footer a {
        color: yellow;
        text-decoration: none;
        font-size: 19px;

    }

    .footer a:hover {
        text-decoration: underline;
        color: #FFC107;
       
    }

    img {
        border-radius: 150%;
        width: 40%;
        border: 4px solid #0D0D0D;
        text-align: center;

    }
</style>

<body>
    <div class="login-card">
        <center><img src="logo.jpeg" alt=""></center>
        <center>
            <h2>Inicio de sección</h2>
        </center>
        <?php if (isset($error)): ?>
            <div class="error"><?= $error ?></div>
        <?php endif; ?>
        <form method="POST">
            <div class="input-group">
                <center><input type="text" name="usuario" placeholder="Usuario" required></center>
            </div>
            <div class="input-group">
                <center><input type="password" name="contrasena" placeholder="Contraseña" required></center>
            </div>

            <center><button type="submit">Ingresar</button></center><br><br>

            <div class="footer">
                <center><a href="contra.html">¿Olvidaste tu contraseña?</a></center>
            </div>
        </form>
    </div>
</body>

</html>