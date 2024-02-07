<?php

require_once ("models/access_model.php");
$producto = new access_model();
$delete = $producto -> delete_access($idEliminar);
$matrizprod = $producto -> get_access();
if($delete == 0){
    echo "<script>alert('Error al aliminar los datos')</script>";
}else{
    echo "<script>alert('Datos eliminados correctamente')</script>";
    include 'views/access_view.php';
}

