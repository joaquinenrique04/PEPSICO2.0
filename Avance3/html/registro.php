<!DOCTYPE html>
<html lang="es">
<head>
    <style type="text/css">
        body {
    font-family: Arial, sans-serif;
    background-image: url('../images/image.png'), url('../images/fondoform.png');
    background-size: 55%, cover;
    background-repeat: no-repeat;
    background-position: -12% 9% , center;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;   
}

.login-container {
    background-color: #CBCFDA;
    border-radius: 55px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    max-width: 400px;
    width: 100%;
    text-align: center;
    height: 600px;
}

.logo {
    width: 100px;
    margin-bottom: -10px;
    padding-bottom: 0px;
    margin-left: -32px;   

}

h1 {
    color: #2235A2;
    margin-bottom: 20px;
    font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    font-size: 42px;
    margin-top: 14px;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 12px;
    color: #000000;
    display: inline-flex;
    font-size: 20px;
}

input {
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 8px;
    height: 20px;
}

.password-container {
    display: flex;
    align-items: center;
}

.password-container input {
    flex: 1;
}

.password-container button {
    background: none;
    border: none;
    cursor: pointer;
    padding: 10px;
    margin-bottom: 30px;
}

.login-button {
    background-color: #2235A2;
    color: white;
    border: none;
    border-radius: 9px;
    padding: 10px;
    cursor: pointer;
    margin-bottom: 29px;
    width: 210px;
    height: 40px;   
    font-size: 18px; 
}

.forgot-password, .register a {
    color: #004B87;
    text-decoration: none;
}

.register {
    margin-top: 10px;
}

    </style>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PepsiCo Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<script> 
    document.getElementById('togglePassword').addEventListener('click', function () {
        const passwordField = document.getElementById('password');
        const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordField.setAttribute('type', type);
    });    
            </script>
<body>
    <div class="login-container">
        <div class="login-card">
            <img src="../images/PepsiCo_logo.png" alt="PepsiCo Logo"style="width: 240px;px;height:68px;margin-top:-10px;" class="logo">
            <h1><strong>¡REGISTRATE!</strong></h1>
            <form action="../index.php" method="POST">
                <form id="registro-form">
                    <label for="email"><strong>Email</strong></label>
                    <input type="email" id="email" name="email" required>
                    
                    <label for="password"><strong>Contraseña</strong></label>
                    <div class="password-container">
                        <input type="password" id="password" name="password" required>
                    </div>
                    <label for="phone"><strong>Teléfono</strong></label>
                    <input type="tel" id="phone" name="phone" required>

                    <label for="message"><strong>Dirección</strong></label>
                    <textarea style="border-radius: 10px;" id="message" name="message" rows="5" required></textarea>

                    <button type="submit" class="login-button" style="margin-left: 90px;margin-top: 12px;"><strong>ENVIAR AHORA</strong></button>
                </form>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
<?php
// Datos de conexión a la base de datos
$user = "root";
$pass = "";
$host = "localhost:3306"; // Si estás utilizando un puerto diferente, asegúrate de que sea el correcto
$bd = "bdpepsico";

// Conexión a la base de datos
$connection = mysqli_connect($host, $user, $pass, $bd);

// Verificamos la conexión a la base de datos
if (!$connection) {
    die("No se ha podido conectar con el servidor: " . mysqli_connect_error());
} 

// Cerramos la conexión a la base de datos
mysqli_close($connection);
?>
