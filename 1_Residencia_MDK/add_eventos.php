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
    <link rel="stylesheet" href="css/style.css?v1">
</head>
<body>
    <header class="header">
      <?php
      include_once('header.php');
      ?>
    </header>
    <form class="formulario">
        <fieldset>
            <legend align="center">Datos del Evento</legend>
            <div class="contenedor-campos">
                <div class="campo-ev">
                    <label for="">Fecha</label>
                    <input class="input-text" type="date">
                </div>
                <div class="campo-ev">
                    <label for="">Estatus</label>
                    <select class ="select-input" name="status">
                        <option value="Abierto">Abierto</option>
                        <option value="Finalizado">Finalizado</option>
                       </select>
                </div>
                <div class="campo-ev">
                    <label for="">Nombre del Evento</label>
                    <input class="input-text" type="text" placeholder="Nombre">
                </div>
                <div class="campo-ev">
                    <label for="">Descripcion</label>
                    <input class ="input-text" type="text" id="descrip">
                </div>
            </div>
            <div class="alinear-derecha flex">
                <input class="boton w-100" type="submit" value="Guardar">
            </div>
        </fieldset>
    </form>
    <footer class="footer">
    <?php
      include_once('footer.php');
      ?>
    </footer>
</body>

</html>