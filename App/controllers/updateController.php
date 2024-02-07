<?php
require_once("models/access_model.php");
$producto = new access_model();
$update = $producto->update_access($idEliminar, $prodMod, $precioMod);
$matrizprod = $producto->get_access();
if ($update == 0) {
    echo "<script>alert('Error al modificar los datos')</script>";
} else {
    echo "<script>alert('Datos modificados correctamente')</script>";
    include 'views/access_view.php';
}