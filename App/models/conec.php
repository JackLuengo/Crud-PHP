<?php
    //CONECCION A LA BASE DE DATOS
    function Conectarse(){
        if(!($link = mysqli_connect("localhost","root",""))){
            echo "Error 1";
            exit();
        }

        if(!mysqli_select_db($link,"alumnosleones")){
            echo "Error 2";
            exit();
        }
        return $link;
    }
