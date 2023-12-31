<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="./imagenes/favicon.ico" type="image/vnd.microsoft.icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <title>SingIn</title>
</head>

<body>

    <main id="ingreso">
        <form class=" p-5" id="ingreso" method="post" name="ingreso">
            <div class="titulo_form">
                <h2>Ingresa a tu cuenta</h2>
                <cite title="Source Title">Si no tienes una cuenta <a  href="singin.php">Registrate</a> o vuelve a <a href="./index.php">inicio</a></cite>
            </div>
        
            <div class="form">
                <input type="text" name="userName" class="form-control" placeholder="Ingre su usuario" >
            </div>
            <div class="form">
                <input type="password" name="password" class="form-control" placeholder="Ingrese contraseña">
            </div>
            
            <button type="submit" class="btn btn-outline-info w-100" name="ingreso">Ingresar</button>
            <?php
            include_once "./php/ingreso.php";

            if(isset($_POST["userName"]) && isset($_POST["password"])){

            }
            
            ingresar();
            ?>
            <cite title="Source Title">* Al registrarse acepta los terminos y condiciones de la empresa, asi como el uso de cockies</cite>
        </form>

    </main>

</body>

</html>