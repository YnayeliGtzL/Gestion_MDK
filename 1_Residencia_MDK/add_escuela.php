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
            <legend align="center">Datos del Doyang</legend>
            <div class="contenedor-campos">
                <div class="campo">
                    <label for="">Nombre</label>
                    <input class="input-text" type="text" placeholder="Nombre">
                </div>
                <div class="campo">
                    <label for="">Dirección</label>
                    <input class="input-text" type="text" placeholder="Calle Numero Col C.P.">
                </div>
                <div class="campo">
                    <label for="">Sabonim a cargo</label>
                    <select class ="select-input" name="categoria">
                        <?php
                        $query = "SELECT * FROM participante WHERE id_ta=4";
                        $ejecutar = mysqli_query($conexion,$query) or die(mysqli_error($conexion));
                        ?>
                       <?php foreach ($ejecutar as $valores):   ?>
                        <option value="<?php echo $valores['id_categoria'] ?>"> 
                            <?php echo  $valores['Nombres'],' ',$valores['Apellidos'] ?> 
                        </option>
                        <?php endforeach; ?>
                       </select>
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