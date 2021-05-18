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
    <link rel="stylesheet" href="css/style.css?v3">
</head>
<body>
    <header class="header">
      <?php
      include_once('header.php');
      ?>
    </header>
    <section class="seccion-Alumno">
                 <?php
                  $query = "SELECT relacion_eventos.id_evento, relacion_eventos.id_alumno, relacion_eventos.id_modalidad,relacion_eventos.id_area,relacion_eventos.Puntaje,relacion_eventos.Color,
                  evento.Nombre_Evento,evento.Lugar,evento.Fecha,evento.Estatus,
                  modalidad.Descrip_mod,
                  participante.Nombres,participante.Apellidos,participante.Sexo,participante.Edad,participante.Fotografia,participante.Altura,participante.Peso,
                  historial_grados.id_Alumno, historial_grados.id_Grado, 
                  grados.Nom_Grado,
                  categoria.Nom_Cat
                  FROM relacion_eventos  
                  JOIN evento ON relacion_eventos.id_evento=evento.id_evento 
                  JOIN modalidad ON relacion_eventos.id_modalidad=modalidad.id_modalidad 
                  JOIN historial_grados ON relacion_eventos.id_alumno=historial_grados.id_Alumno 
                  JOIN participante ON historial_grados.id_Alumno= participante.id_Alumno 
                  JOIN categoria ON participante.id_categoria=categoria.id_categoria
                  JOIN grados ON historial_grados.id_Grado=grados.id_grado";
                  $ejecutar = mysqli_query($conexion,$query) or die(mysqli_error($conexion));
                foreach ($ejecutar as $valores):?>
                        <div class="div-Alumno">     
                        <img class="img-Alumno" id="<?php echo $valores['id_Alumno'] ?>" src="data:image/jpg;base64,<?php echo base64_encode($valores['Fotografia']);?>"/>
                        <label class="label-alumno-1" for="">Nombre: <?php echo $valores['Nombres'], " ", $valores['Apellidos'] ?></label>
                        <label for="" class="label-alumno-rigth">No. Control: <?php echo $valores['id_alumno'] ?> </label>
                        <label class="label-alumno-1" for="">Edad: <?php 
                        $cumpleanos = new DateTime($valores['Edad']);
                        $hoy = new DateTime();
                        $annos = $hoy->diff($cumpleanos);
                        echo $annos->y;?>
                        </label>
                        <label for="" class="label-alumno-rigth">Categoria: <?php echo $valores['Nom_Cat'] ?></label>
                        <label class="label-alumno-1" for="">Sexo: <?php if($valores['Sexo'] == 1){
                            echo 'Femenino';
                        }else echo'Masculino';
                        ?></label>
                        <label for="" class="label-alumno-rigth">Altura (en "cm"): <?php echo $valores['Altura'] ?></label>
                        <label for="" class="label-alumno-1">Grado: <?php echo $valores['Nom_Grado'] ?> </label>
                        <label for="" class="label-alumno-rigth">Peso: <?php echo $valores['Peso'] ?></label>
                        <label for="" class="label-alumno-1">Evento: <?php echo $valores['Nombre_Evento'] ?> </label>
                        <label for="" class="label-alumno-rigth">Modalidad: <?php echo $valores['Descrip_mod'] ?> </label>
                        </div>
                        <?php endforeach; ?> 
                 </section>
    <footer class="footer">
    <?php
      include_once('footer.php');
      ?>
    </footer>

</body>

</html>