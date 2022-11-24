<?php

    include "db.php";
    
    $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $celular = $_POST['celular'];
        $mensage = $_POST['mensage'];

        $escritura = "INSERT INTO personita(nombre, apellido, email, celular, mensage) 
        VALUES ('$nombre', '$apellido', '$email', '$celular', '$mensage')";

        mysqli_query($union, $escritura);
        mysqli_close($union);

?>