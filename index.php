<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <!-- Enlaces a Bootstrap CSS y FontAwesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
            body {
            background-image: url('./view/assets/Pizzap.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
            padding-top: 40px; /* Si deseas mantener el espacio en la parte superior */
        }


        .container {
    max-width: 400px;
    margin: auto;
    background-color: rgba(255, 255, 255, 0.9); /* RGBA: blanco con una opacidad del 90% */
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    animation: slide-up 0.5s ease forwards;
}


        @keyframes slide-up {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .container img {
            display: block;
            margin: 0 auto 20px;
            max-width: 100%;
            height: auto;
            animation: pulse 2s infinite alternate;
        }

        @keyframes pulse {
            from {
                transform: scale(1);
            }
            to {
                transform: scale(1.1);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="./view/assets/pizzalogo.png" alt="Logo">
        <h3 class="text-center">Sistema de Gestión de Planilla de Alessandro's pizzas</h3>

        <?php if (isset($_GET['error'])) { ?>
            <div class="alert alert-danger"><?php echo $_GET['error']; ?></div>
        <?php } ?>

        <form action="login.php" method="post">
            <div class="form-group">
                <label for="uname">Correo electrónico:</label>
                <input type="text" class="form-control" id="uname" name="uname" placeholder="Ingrese su correo electrónico..." required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese su contraseña..." required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
        </form>
    </div>

    <!-- Enlaces a Bootstrap JS y jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
