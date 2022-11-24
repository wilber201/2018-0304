<?php

    include "db.php";

    $nombre=$_POST['elimnombre'];
    mysqli_query($union, "DELETE FROM personita WHERE id='$nombre'");
    mysqli_close($union);
    header("location:mostrar.php")

?>