<?php
include 'php\reg.php';
$conexion = conectar();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión Eventos MDK</title>
    <link rel="preload" href="css/normalize.css" as="style">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;600&display=swap" rel="stylesheet">
    <link rel="preload" href="css/style.css" as="style">
    <link rel="stylesheet" href="css/style.css?v2">
</head>
<body>
    <header class="header">
      <?php
      include_once('header.php');
      ?>
    </header>
    <section class="hero">
        <div class="contenido-hero">
            <h2>Gestion para participantes en los Eventos</h2>
        </div>
    </section>
    <main class="contenedor">
        <h2>Mis Gestiones</h2>
        <div class="servicios">
            <section class="servicio">
                <h3>Participantes</h3>
                <div class="iconos">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="52"
                        height="52" viewBox="0 0 24 24" stroke-width="2" stroke="#00b341" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <circle cx="9" cy="7" r="4" />
                        <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                    </svg>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint magnam iste soluta eaque explicabo.
                    Error, repudiandae aperiam aut ipsa ullam totam, sint voluptatum ea explicabo fuga quisquam!
                    Officiis, perspiciatis quam!</p>
            </section>
            <section class="servicio">
                <h3>Eventos</h3>
                <div class="iconos">
                    <?xml version="1.0"?>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" width="52" height="52">
                        <path
                            d="M151.857,205.774c-.047,0-.1,0-.145,0a2.5,2.5,0,0,1-2.353-2.64l2.419-41.93a2.5,2.5,0,0,1,4.993.288l-2.419,41.93A2.5,2.5,0,0,1,151.857,205.774Z"
                            fill="#ebe7f2" />
                        <path
                            d="M173.9,87.867a2.5,2.5,0,0,1-2.375-3.284l3.431-10.392a2.5,2.5,0,0,1,4.748,1.567l-2.144,6.5,16.032-2.546a2.5,2.5,0,0,1,.785,4.938l-20.085,3.19A2.484,2.484,0,0,1,173.9,87.867Z"
                            fill="#04850d" />
                        <path
                            d="M176.2,153.736l-9.708-22.866c.486.255.791.405.861.439a2.5,2.5,0,0,0,2.183-4.5c-.108-.053-10.855-5.342-18.466-14.221-7.294-8.51-7.09-21.219-7.087-21.422a2.5,2.5,0,0,0-5-.135c-.016.581-.286,13.923,7.518,23.87l-5.973,32.368a2.5,2.5,0,0,0,2.459,2.954h8.87a2.5,2.5,0,0,0,2.492-2.287l1.568-18.387,5.867,27.828a2.5,2.5,0,0,0,2.989,1.925l9.667-2.15a2.5,2.5,0,0,0,1.758-3.418Zm-30.207-8.511,4.745-25.717q.471.455.944.891l-2.118,24.826Zm20.164,8.65-4.606-21.851,8.873,20.9Z"
                            fill="#04850d" />
                        <path
                            d="M125.782,96.11a2.494,2.494,0,0,1-1.566-.552L79.687,59.72a2.5,2.5,0,0,1,3.135-3.9l44.529,35.838a2.5,2.5,0,0,1-1.569,4.448Z"
                            fill="#ebe7f2" />
                        <path
                            d="M208.336,81.446l-5.75-6.045a2.5,2.5,0,0,0-3.623,3.447l5.75,6.044a8.279,8.279,0,0,1,1.695,8.72l-9.3,23.543a2.859,2.859,0,0,1-2.673,1.819h-21.05a2.889,2.889,0,0,1-2.313-1.166L157.714,99.746l9.162-7.35,11.891,13.531a4.5,4.5,0,0,0,7.538-1.251l3.825-9.247a2.5,2.5,0,0,0-4.621-1.911l-3.518,8.5L170.316,88.737a4.477,4.477,0,0,0-5.708-.858l-6.033-12.34a4.258,4.258,0,0,0-6.39-1.532l-6.513,4.908a2.484,2.484,0,0,0-.745-1.23l-6.385-5.746L144,64.482l17.513,9.2a4.669,4.669,0,0,0,5.764-1.177l2.839-3.476a19.895,19.895,0,1,0-2.425-4.737,2.5,2.5,0,0,0-.569.5l-3.537,4.332-17.641-9.269a4.488,4.488,0,0,0-3.54-.251L133,48.755a4.261,4.261,0,0,0-6.569.161l-6.6,8.413a4.26,4.26,0,0,0,1.405,6.419l12.533,6.434a4.482,4.482,0,0,0,1.095,5.172l6.721,6.048a2.478,2.478,0,0,0,.84.5A4.166,4.166,0,0,0,142.562,86l-2.21.914L77.392,42.13a4.637,4.637,0,0,0-6.789,1.6l-4.785-4.287a2.493,2.493,0,0,1-.828-2L65.7,24.667a2.523,2.523,0,0,0,0-.275,11.405,11.405,0,0,0-5.476-9.134l-1.6-.972a4.5,4.5,0,0,0-6.647,2.562L44.2,42.949a4.507,4.507,0,0,0,1.672,4.927L62.6,60a4.631,4.631,0,0,0,1.544,4.257L127.161,118.7a12.567,12.567,0,0,1,4.311,8.8l4.609,87.484a4.637,4.637,0,0,0,4.4,4.384v18.5a4.505,4.505,0,0,0,4.5,4.5h27.387a4.5,4.5,0,0,0,4.354-5.638l-.207-.794a13.41,13.41,0,0,0-8.451-9.232l-9.034-3.24a2.508,2.508,0,0,1-1.656-2.354v-1.719h.5a4.648,4.648,0,0,0,4.643-4.406l2.558-48.646a2.5,2.5,0,1,0-4.992-.263l-2.541,48.315H141.058l-4.594-87.153a17.582,17.582,0,0,0-6.034-12.322L67.615,60.653l7.21-14.213L138.58,91.794a2.5,2.5,0,0,0,2.405.273l5.419-2.242c.017-.007.031-.018.047-.025l7.413,6.684a4.47,4.47,0,0,0-.456,5.848l13.641,18.449a7.907,7.907,0,0,0,6.332,3.193h21.05a7.831,7.831,0,0,0,7.324-4.981l9.3-23.543A13.3,13.3,0,0,0,208.336,81.446ZM186.26,43.07a14.7,14.7,0,1,1-14.7,14.7A14.719,14.719,0,0,1,186.26,43.07Zm-56.448,9.639,9,10.39-2.157,2.947-12.343-6.337Zm27.535,175.462,9.034,3.24a8.412,8.412,0,0,1,5.3,5.79l.044.168h-26.24V219.392h6.893v1.719A7.518,7.518,0,0,0,157.347,228.171ZM64.7,55.35l-15.6-11.314,7.49-25.14,1.049.636a6.415,6.415,0,0,1,3.07,5.007L60,37.167a7.467,7.467,0,0,0,2.483,6l5.773,5.172Zm89.779,23.19,6.106,12.494-2.8,2.249L147.37,83.9Z"
                            fill="#846f75" />
                    </svg>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint magnam iste soluta eaque explicabo.
                    Error, repudiandae aperiam aut ipsa ullam totam, sint voluptatum ea explicabo fuga quisquam!
                    Officiis, perspiciatis quam!</p>
            </section>

            <section class="servicio">
                <h3>Escuelas</h3>
                <div class="iconos">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-school" width="52"
                        height="52" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00b341" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6" />
                        <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4" />
                    </svg>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint magnam iste soluta eaque explicabo.
                    Error, repudiandae aperiam aut ipsa ullam totam, sint voluptatum ea explicabo fuga quisquam!
                    Officiis, perspiciatis quam!</p>
            </section>
        </div>
    </main>
    <footer class="footer">
    <?php
      include_once('footer.php');
      ?>
    </footer>

</body>

</html>