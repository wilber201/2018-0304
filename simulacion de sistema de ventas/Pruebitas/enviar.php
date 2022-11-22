<?php

    //llamando los campos
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $mensage = $_POST['mensage'];

    //datos del correo
    $destinatario = "wilber201@hotmail.com";
    $asunto = "Mensages de prueba";

    $carta = "De: $nombre". " ". "$apellido \n";
    $carta .="Coreo: $email";
    $carta .="Celular: $celular";
    $carta .="Mensaje: $mensage";
    
    //enviando mensage
mail($destinatario, $asunto, $carta);


?>