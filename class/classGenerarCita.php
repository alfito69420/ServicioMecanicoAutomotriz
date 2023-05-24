<?php
session_start();
//var_dump($_POST);
include "classBD.php";

$cita = "INSERT INTO cita SET fecha_cita='" . $_POST['fecha'] . "', reporte='" . $_POST['causa'] . "'";
$marca = "INSERT INTO marca_cat SET marca='" . $_POST['marca'] . "'";
$modelo = "INSERT INTO modelo_cat SET modelo='" . $_POST['modelo'] . "'";

//$vehiculo = "INSERT INTO vehiculo SET placa='" . $_POST['placa'] . "', ano_automovil='" . $_POST['anio'] . "'";
echo $_SESSION['id'];

$vehiculoMamalon = "INSERT INTO vehiculo(placa,ano_automovil,marca_cat_fk,modelo_cat_fk,usuario_cat,cita_fk) 
VALUES ('" . $_POST['placa'] . "','" . $_POST['anio'] . "',(select id_marca_cat from marca_cat order by id_marca_cat desc limit 1),
(SELECT id_modelo_cat from modelo_cat order by id_modelo_cat desc limit 1)," . $_SESSION['id'] . ",
(SELECT id_cita from cita order by id_cita desc limit 1))";
/*
echo "<br>".$cita."<br>";
echo $marca."<br>";
echo $modelo."<br>";
echo $vehiculoMamalon."<br>";*/

debug_to_console($cita);
debug_to_console($modelo);
debug_to_console($vehiculoMamalon);

function debug_to_console($data)
{
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

$objeBD->consulta($cita);
$objeBD->consulta($marca);
$objeBD->consulta($modelo);
$objeBD->consulta($vehiculoMamalon);

header("location: ../regular_user/mis_citas.php");
?>