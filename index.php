<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- iconos font-awesome -->
    <script src="https://kit.fontawesome.com/9d0ecd6d4d.js" crossorigin="anonymous"></script>
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>

    <div class="container">
        <h1>Acceso</h1>
        <form action="">
            <div class="form__group form__div">
                <span><i class="fa-solid fa-envelope"></i></span>
                <input class="campo" type="email" placeholder="Direccion de correo electronico">
            </div>
            <div class="form__group form__div">
                <span><i class="fa-solid fa-lock"></i></span>
                <input class="campo" type="password" placeholder="Contraseña">
            </div>
            <div class="form__group">
                <button type="submit">Acceso</button>
            </div>
            <div class="form__group__enlace">
                <a class="enlace" href="#">¿Olvidaste tu contraseña?</a>
            </div>
        </form>
        <hr>
        <p>Inicie sesión con su cuenta de redes sociales</p>
        <div class="div__group">
            <a class="redes" href="#"><i class="fa-brands fa-twitter"></i></a>
            <a class="redes" href="#"><i class="fa-brands fa-facebook"></i></a>
        </div>
    </div>


    <script src="js/main.js"></script>
</body>

</html>