<?php

/*
    4 pasos para procesar con un servidor

    1- Abrir la conexion:

    mysqli_connect(servidor,usuario,claveUsuario,baseDAtos);

    2- Realizar la consulta:

    mysqli_query("conexion","cadena de consulta");

    3- Procesar los registros 
    4- Cerrar la conexion
*/

session_start();

include "class/classBD.php";

if (isset($_GET['email']) && isset($_GET['password'])) {
    if ($_GET['email'] > '' && $_GET['password'] > '') {

        $query = "SELECT * FROM usuario_cat WHERE correo='" . $_GET['email'] . "' and contrasena=MD5('" . $_GET['password'] . "')";

        $registro = $objeBD->getTupla($query);

        //echo $registro;

        if ($objeBD->bloqueRegistros) {
            $_SESSION['nombre'] = $registro->nombre . " " . $registro->primer_ap . " " . $registro->segundo_ap;
            $_SESSION['correo'] = $registro->correo;
            $_SESSION['id'] = $registro->id_usuario;

            if ($registro->rol == 2) {
                header("location: admin/home_admin.php");
            } else {
                //$objeBD->consulta("update usuario set fechaUltAcceso='".date("Y-m-d H:i:s")."', numeAccesos=numeAccesos+1 where id=".$registro->id);
                header("location: regular_user/home_users.php");
            }
        } else {
            header("location: login.php?e=3");
        }
    } else {
        header("location: login.php?e=1");  //  no hay ninguna info en los correos 
    }
} else {
    header("location: login.php?e=2");  //  no jala nada de la BD
}
