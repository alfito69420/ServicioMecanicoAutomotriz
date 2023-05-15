<?php

include "classBD.php";

$cita = "insert into cita set fecha_cita='" . $_POST['fecha'] . "', reporte='" . $_POST['causa'] . "'";
$marca = "insert into marca_cat set marca='".$_POST['marca']."'";
$modelo = "insert into modelo_cat set modelo='".$_POST['modelo']."'";
$vehiculo = "insert into vehiculo set placa='".$_POST['placa']."', ano_automovil='".$_POST['anio']."'";

echo $cita;
echo $modelo;
echo $vehiculo;

debug_to_console($cita);
debug_to_console($modelo);
debug_to_console($vehiculo);

function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

$objeBD->consulta($cita);
$objeBD->consulta($marca);
$objeBD->consulta($modelo);
$objeBD->consulta($vehiculo);

header("location: ../regular_user/mis_citas.php");

class GenerarCita
{
    function getDatos()
    {

    }//close function

    function verificarInput()
    {

    }// close function
}//close class
