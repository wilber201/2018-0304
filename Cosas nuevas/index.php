<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <title>Registrar </title>
</head>
<body>
    <h1>Registrar</h1>
    <form action="registrar.php" method="post">
        <div><input type="text" class="ok" name="nombre" placeholder="Dijita tu nombre"></div>
        <div><input type="text" class="ok" name="apellido" placeholder="Dijita tu apellido"></div>
        <div><input type="text" class="ok" name="cedula" placeholder="Dijita tu cedula"></div>
        <div><input type="text" class="ok" name="celular" placeholder="Dijita tu celular"><br>
        <div><button type="submit" class="bad" name="enviar_registro">Enviar</button></div>
    </form>
    

</body>
</html>