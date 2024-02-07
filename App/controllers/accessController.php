<?php
require_once ("models/access_model.php");
$producto = new access_model();
$insertar = $producto->insert_access($nombre, $valor);
$matrizprod = $producto->get_access();

if($insertar == 0){
    echo "<script>alert('Error al guardar los datos')</script>";
}else{
    echo "<script>alert('Datos guardados correctamente')</script>";
    //require_once ("views/access_view.php");
}
