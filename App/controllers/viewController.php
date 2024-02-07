<?php

require_once ("models/access_model.php");
$producto = new access_model();
$matrizprod = $producto->get_access();
include 'views/access_view.php';