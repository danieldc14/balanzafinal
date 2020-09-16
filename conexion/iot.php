<?php
    // iot.php
    // Importamos la configuración
    require("cn.php");
    // Leemos los valores que nos llegan por GET
    $cod_alimento = mysqli_real_escape_string($con, $_GET['cod_alimento']);
    $peso = mysqli_real_escape_string($con, $_GET['peso']);
    // Esta es la instrucción para insertar los valores
    $query = "INSERT INTO datos(cod_alimento, peso) values ($cod_alimento,'$peso')";
    // Ejecutamos la instrucción

   $resultado = mysqli_query($con, $query);
   if(!$resultado)
   {
    echo "error";
   }
   
    mysqli_close($con);
?>