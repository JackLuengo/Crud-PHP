<?php
require_once 'models/conec.php';

$link = Conectarse();

if (!$link) {
    die("Error: " . mysqli_connect_error());
}

function verifyTable($link)
{
    $tableName = "productos";
    $state = false;

    //VERIFICAMOS LA EXISTENCIA DE LA TABLA
    $queryCheck = "SHOW TABLES LIKE '$tableName'";
    $verify = mysqli_query($link, $queryCheck);

    if (!$verify || mysqli_num_rows($verify) == 0) {
        $state = false;
    } else {
        $state = true;
    }
    return $state;
}



function createTable($link)
{
    $tableName = "productos";

    $buildTable = "create table $tableName(
            id int auto_increment primary key,
            producto varchar(255) not null,
            precio int not null
        )";

    if (verifyTable($link) == false) {
        $Create = mysqli_query($link, $buildTable);
        if (!$Create) {
            echo "<h3>Error al crear la tabla</h3>";
            return false;
        }
    }

   
    return true;
}
