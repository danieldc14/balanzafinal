<?php
  include("../conexion/cn.php");
  $sql="Select * from datos";
  ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../estilos/CSS/bootstrap.css">

    <title>Balanza</title>
  </head>
  <body>
    <?php
    require('menu.php');
    ?>
    <br>
    <center>
      
<div style="text-align: center;">
<table class="table">
  <thead class="thead-danger-light">
    <tr>
      <th scope="col">Descripción</th>
      <th scope="col">Peso(Kg)</th>
      <th scope="col">Fecha</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php $resultado=mysqli_query($con,$sql);
      while($row=mysqli_fetch_assoc($resultado)) { ?>
      <td scope="row"><?php if($row["cod_alimento"]==1){echo "Carne";}else
      {echo "Pollo";}?></td>
      <td><?php echo $row["peso"];?></td>
      <td><?php echo $row["fecha"];?></td>
     
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>
<br>
<a href="../reporte.php"><button type="button" class="btn btn-outline-success btn-lg">Reporte</button></a>    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="../estilos/JS/bootstrap.js"></script>
  </body>
</html>

