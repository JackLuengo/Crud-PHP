<?php


if (!isset($_POST['insert'])) {
    $insert = '';
} else {
    $insert = $_POST['insert'];
}

if (!isset($_POST['nombre'])) {
    $nombre = '';
} else {
    $nombre = $_POST['nombre'];
}

if (!isset($_POST['valor'])) {
    $valor = '';
} else {
    $valor = $_POST['valor'];
}

if (!isset($_POST['viewTable'])) {
    $viewTable = '';
} else {
    $viewTable = $_POST['viewTable'];
}

if (!isset($_POST['delete'])) {
    $delete = '';
} else {
    $delete = $_POST['delete'];
}

if (!isset($_POST['idEliminar'])) {
    $idEliminar = '';
} else {
    $idEliminar = $_POST['idEliminar'];
}

if (!isset($_POST['prodMod'])) {
    $prodMod = '';
} else {
    $prodMod = $_POST['prodMod'];
}

if (!isset($_POST['precioMod'])) {
    $precioMod = '';
} else {
    $precioMod = $_POST['precioMod'];
}

if (!isset($_POST['update'])) {
    $update = '';
} else {
    $update = $_POST['update'];
}
