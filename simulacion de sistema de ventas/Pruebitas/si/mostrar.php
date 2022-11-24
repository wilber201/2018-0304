<?php include 'db.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DocMostrar</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Email</th>
      <th scope="col">Celular</th>
    </tr>
  </thead>
  <tbody>
<?php

    $sql= 'SELECT * FROM personita';
    $resultado = mysqli_query($union, $sql);

    while($mostrar = mysqli_fetch_array($resultado)){

?>

    <tr>
      <th><?php  echo $mostrar['id'] ?></th>
      <th><?php  echo $mostrar['nombre'] ?></th>
      <th><?php  echo $mostrar['apellido'] ?></th>
      <th><?php  echo $mostrar['email']  ?></th>
      <th><?php  echo $mostrar['celular'] ?></th>
    <td>

        <form action="eliminar.php" method="post">

            <input type="text" value="<?php echo $mostrar['id']?>" name="elimnombre" reandoly>
            <td>
                <input type="submit" value = "eliminar" name="btnEliminar"></td>
        </form>

    </td>
    
    </tr>

<?php

    }

?>
  </tbody>
</table>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


</body>
</html>