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
    <form class="formulario">
        <fieldset>
            <legend align="center">Datos del Participante</legend>
            <div class="contenedor-campos">
                <div class="campo">
                    <label for="">Nombre (s)</label>
                    <input class="input-text" type="text" placeholder="Nombre(s)">
                </div>
                <div class="campo">
                    <label for="">Apellido (s)</label>
                    <input class="input-text" type="text" placeholder="Apellido(s)">
                </div>
                <div class="campo">
                    <label for="">Fecha de nacimiento</label>
                    <input class="input-text" type="date">
                </div>
                <div class="campo">
                    <label for="">Sexo</label>
                    <select class ="select-input" name="select">
                        <option value="null" selected>Seleccionar</option>
                        <option value="1">Femenino</option>
                        <option value="0">Masculino</option>
                    </select>
                </div>
                <div class="campo">
                    <label for="">Altura (en "cm")</label>
                    <input class="input-text" type="number" placeholder="Altura en cm">
                </div>
                <div class="campo">
                    <label for="">Peso</label>
                    <input class="input-text" type="number">
                </div>
                <div class="campo">
                    <label for="">Categoria</label>
                    <select class ="select-input" name="categoria">
                        <?php
                        $query = "SELECT * FROM categoria";
                        $ejecutar = mysqli_query($conexion,$query) or die(mysqli_error($conexion));
                        ?>
                       <?php foreach ($ejecutar as $valores):   ?>
                        <option value="<?php echo $valores['id_categoria'] ?>"> 
                            <?php echo  $valores['Nom_Cat'],' ',$valores['Rango'] ?> 
                        </option>
                        <?php endforeach; ?>
                       </select>
                </div>
                <div class="campo">
                    <label for="">Nivel</label>
                    <select class ="select-input"  name="nivel">
                        <?php
                        $query = "SELECT * FROM nivel";
                        $ejecutar = mysqli_query($conexion,$query) or die(mysqli_error($conexion));
                        ?>
                       <?php foreach ($ejecutar as $valores):   ?>
                        <option value="<?php echo $valores['id_Nivel'] ?>"> 
                            <?php echo $valores['Descrip_niv'],' ', $valores['Rango']?> 
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="campo">
                    <label for="">Tipo de Permisos </label>
                    <select class ="select-input" name="tipo_usuario">
                        <?php
                        $query = "SELECT * FROM tipo_usuario";
                        $ejecutar = mysqli_query($conexion,$query) or die(mysqli_error($conexion));
                        ?>
                       <?php foreach ($ejecutar as $valores):   ?>
                        <option value="<?php echo $valores['id_tu'] ?>"> 
                            <?php echo $valores['tu_descrip'] ?> 
                        </option>
                        <?php endforeach; ?>
                    </select>
                   </div>
                <div class="campo">
                    <label for="">Tipo de Participante</label>
                    <select class ="select-input" name="tipo_alumn">
                        <?php
                        $query = "SELECT * FROM tipo_alumn";
                        $ejecutar = mysqli_query($conexion,$query) or die(mysqli_error($conexion));
                        ?>
                       <?php foreach ($ejecutar as $valores):   ?>
                        <option value="<?php echo $valores['id_ta'] ?>"> 
                            <?php echo $valores['Descrip_ta'] ?> 
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="campo">
                    <label for="">Escuela</label>
                    <select class ="select-input" name="escuela">  
                    <?php
                        $query = "SELECT * FROM escuela";
                        $ejecutar = mysqli_query($conexion,$query) or die(mysqli_error($conexion));
                        ?>
                       <?php foreach ($ejecutar as $valores):   ?>
                        <option value="<?php echo $valores['id_escuela'] ?>"> 
                            <?php echo $valores['es_Nombres'] ?> 
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="campo">
                    <label for="">Foto</label>
                    <input class="input-text" type="file">
                </div>
            </div>
            <div class="alinear-derecha flex">
                <input class="boton w-100" type="submit" value="Guardar">
            </div>
        </fieldset>
    </form>
    <footer class="footer">
        <p>Todos los derechos reservados Nayeli Gutierrez - 2021</p>
    </footer>
</body>

</html>