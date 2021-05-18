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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/select2.css">
</head>
<body>
    <header class="header">
      <?php
      include_once('header.php');
      ?>
    </header>
    <section class="contenedor">
    <h3>Eventos</h3>
    <?php
    $query = "SELECT * FROM Evento where Estatus='Abierto'";
    $ejecutar = mysqli_query($conexion,$query) or die(mysqli_error($conexion));
    foreach ($ejecutar as $valores):?>  
    <button class="accordion">
    <?php echo $valores['Nombre_Evento']?>
    </button>
    <div class="panel">
    <button class="btn" id="AddUsertoEvent" value="<?php  echo $valores['id_evento']?>"><i class='fas fa-user-plus'></i> Agregar</button>
    <?php
    $query = "SELECT relacion_eventos.id_evento, relacion_eventos.id_alumno, relacion_eventos.id_modalidad, relacion_eventos.Puntaje, relacion_eventos.Color, participante.Nombres,participante.Apellidos,participante.id_categoria, participante.id_nivel,participante.Fotografia, evento.id_evento,evento.Nombre_Evento,evento.Estatus 
    FROM relacion_eventos 
    JOIN participante ON relacion_eventos.id_alumno=participante.id_Alumno 
    JOIN evento ON relacion_eventos.id_evento='".$valores['id_evento']."' 
    where evento.Estatus='Abierto'";
    $ejecutar2 = mysqli_query($conexion,$query) or die(mysqli_error($conexion));
    foreach ($ejecutar2 as $valores2):?> 
    <p><?php echo $valores2['Nombres']," ", $valores2['Apellidos'] ?></p>
    <?php endforeach; ?>
    </div>
    <?php endforeach; ?>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
    </section>

    <div class="modal_AddUsertoEvent">
      <div class="modal modal_cerrar">
      <p class="cerrar">X</p>
        <div class="modal_textos">
        <h2>Agregar Participantes </h2>
        <form action="php/add_part_event.php" methoe="post">
        <input type="text" class="id_eventoModal">
        <select name="id_Buscador" id="id_Buscador">
        <?php
            $query = "SELECT id_alumno, Nombres,Apellidos FROM participante WHERE participante.id_Alumno NOT IN (SELECT id_alumno FROM relacion_eventos) ";
            $ejecutar3 = mysqli_query($conexion,$query) or die(mysqli_error($conexion));
            while ($ver=mysqli_fetch_row($ejecutar3)){?>
        <option value="<?php echo $ver[0]?>"><?php echo $ver[1]," ",$ver[2]?></option>
        <?php } ?>
        </select>
        <select class="campo" name="id_modalidad" id="id_modalidad">
        <?php 
        $query2 = "SELECT * FROM modalidad";
        $ejecutar4= mysqli_query($conexion,$query2) or die(mysqli_error($conexion));
        while ($ver2=mysqli_fetch_row($ejecutar4)){?>
        <option value="<?php echo $ver2[0]?>"><?php echo $ver2[1] ?></option>
        <?php } ?>
        </select>
        <select name="id_color" id="id_color">
        <option value="ROJO">Rojo</option>
        <option value="AZUL">Azul</option>
        </select> 
        <input type="submit" value="Enviar">
        </form>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
        </div>
      </div>
    </div>
    <footer class="footer">
    <?php
      include_once('footer.php');
      ?>
    </footer>
    <script type="text/javascript" src="js/funciones.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="js/select2.js"></script>
</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
$('#id_Buscador').select2();
});
</script>