<?php
$message = ''; // Inicializamos la variable del mensaje

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger datos del formulario y sanitizarlos
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = htmlspecialchars($_POST['password']);

    // Mostrar el mensaje de ingeniería social
    $message = "Ha sido víctima de ingeniería social.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - McDonald's Style</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <div class="login-container" id="login-container">
        <h1>Iniciar Sesión</h1>
        <?php if ($message): ?>
            <div class="message"><?php echo $message; ?></div>
        <?php else: ?>
            <form method="post" action="" onsubmit="handleSubmit(event)">
                <input type="email" name="email" placeholder="Correo" required>
                <input type="password" name="password" placeholder="Contraseña" required>
                <button type="submit">Entrar</button>
            </form>
        <?php endif; ?>
    </div>

    <script src="js/script.js"></script>
</body>
</html>
