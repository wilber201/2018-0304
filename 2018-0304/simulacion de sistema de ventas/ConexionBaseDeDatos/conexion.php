<?php

$conexion = mysqli_connect('localhost','root','','personita');
    
insertar($conexion);

function insertar($conexion){
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];


    $consulta = "INSERT INTO persona(cedula, nombre, apellido) 
    VALUES ('$cedula', '$nombre', '$apellido')";
    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);

}

?>