<?php
require_once 'models/Validacion.php';
require_once 'models/conec.php';

$link = Conectarse();

// Check if the "Productos" table exists
$mostrarBoton = !verifyTable($link);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["CrearTabla"])) {
        createTable($link); // Create the "Productos" table
        $mostrarBoton = false; // Hide the "Crear Tabla" button after creating the table
    } else {
        // Handle product submission
    }
}
include 'views/complementos/variable.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width,initial-scale=1" name="viewport" />
    <link rel="stylesheet" href="../public/css/estilo.css">
    <title>Document</title>
</head>

<body>


    <nav>
        <li>
            <form method="post" action="index.php"><input type="hidden" name="viewTable" value="VIEW"><input
                    type="submit" value="Ver Tabla"></form>
        </li>
    </nav>
    <?php include 'views/complementos/formulario.php'; ?>

    <?php
    if ($insert == "INSERT") {
        require_once 'controllers/accessController.php';
        if ($insertar > 0) {
            include 'views/access_view.php';
        }
    }

    if ($viewTable == "VIEW") {
        require_once 'controllers/viewController.php';
    }

    if ($delete == "ELIMINAR") {
        require_once 'controllers/deleteController.php';
    }

    if ($update == "MODIFICAR") {
        require_once 'controllers/updateController.php';
    }
    ?>


</body>

</html>