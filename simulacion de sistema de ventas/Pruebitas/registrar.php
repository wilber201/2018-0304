<?php

    $union = mysqli_connect('localhost','root','','personita');

    insertar($union);

    function insertar($union){

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $celular = $_POST['celular'];
        $mensage = $_POST['celular'];

        $escritura = "INSERT INTO registro(nombre, apellido, email, celular, mensage) 
        VALUES ('$nombre', '$apellido', '$email', '$celular', '$mensage')";

        mysqli_query($union, $escritura);
        mysqli_close($union);
        

    }




?>