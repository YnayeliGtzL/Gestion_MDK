<?php
function conectar(){
    $user="root";
    $pass= "";
    $server= "localhost";
    $db= "residencia_mdk";
    $conexion= mysqli_connect($server,$user,$pass) or die ("Error al conectar a la BD".mysqli_error());
    $conexion -> set_charset('utf8');
    mysqli_select_db($conexion, $db);
    return $conexion;
}
?>