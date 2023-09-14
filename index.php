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
    <title>Home</title>
</head>

<body>
    <header class="d-flex bd-highlight " id="header">
        <div class="div_logo">
            <img id="logo" src="./imagenes/logo2.png" alt="logo">
        </div>
        <nav class="d-flex w-100 " id="nav_heder">
            <a href="./login.html">Iniciar sesion</a>
            <a href="./singin.html">Registrarse</a>
        </nav>
        <!-- <nav class="d-flex" id="nav_heder2">
            <img src="./imagenes/profile.png" class="" id="img_perfil">
            <span>Rocio Crespo <br> rociocrespo200</span>
        </nav> -->
    </header>

    <main>
        <div class="titulo_filtros pt-5">
            <h1 id="encabezado">Busca un pokemon por su nombre</h1>

            <form method="POST" action="" id="filtros" class="d-flex align-items-center w-100 ">
                
                    <select name="tipoPokemon" class="form-control" id="select_tipo">
                        <option selected="true" disabled="disabled">Filtrar por tipo</option>
                        <option value="Agua">Agua</option>
                        <option value="Fuego">Fuego</option>
                        <option value="Planta">Planta</option>
                        <option value="Electrico">Electrico</option>
                        <option value="Hielo">Hielo</option>
                        <option value="Lucha">Lucha</option>
                        <option value="Veneno">Veneno</option>
                        <option value="Tierra">Tierra</option>
                        <option value="Volador">Volador</option>
                        <option value="Psiquico">Psiquico</option>
                        <option value="Bicho">Bicho</option>
                        <option value="Roca">Roca</option>
                        <option value="Fantasma">Fantasma</option>
                        <option value="Acero">Acero</option>
                        <option value="Dragon">Dragon</option>
                        <option value="Normal">Normal</option>
                        <option value="Hada">Hada</option>
                    </select>
                
                <select name="ordenar" id="ordenar" class="form-control">
                    <option value="mayor">Mayor a menor N°</option>
                    <option value="menor">Menor a mayor N°</option>
                    <option value="ascendente">A --- Z</option>
                    <option value="descendente">Z --- A</option>
                </select>
                <nav class="navbar navbar-light bg-light p-0">
                        <input id="input_search" name="input_search" class="form-control w-100 mr-sm-2" type="search" placeholder="Buscar"
                            aria-label="Search">
                
                </nav>
                <button id="boton_busqueda" class="btn" type="submit">Filtrar </button>
            </form>

        </div>



        <section id="section_cards" class="d-flex justify-content-center py-5 border-0 cards_home">
            <?php
            include_once "./php/main.php";
            if ($_SERVER["REQUEST_METHOD"] !== "POST") {
                generarTarjetas($pokemones);
            }else{
                include_once "./php/aplicarFiltros.php";
            }
            ?>
        </section>
    </main>


    <footer class="footer pt-3 text-center">
        <p class="w-100">
            Programacion web II - Proyecto grupal Pokedex <br>
            Rocio Belen Crespo -
            Karen NIna Coela -
            Duilio Martin Rubio -
            Rocio crespo <br>
            © UNLaM 2018 v2.1.0. Todos los derechos reservados.
        </p>
    </footer>

    <!-- <script src="./js/main.js"></script> -->
</body>

</html>