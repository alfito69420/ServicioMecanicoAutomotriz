<?php
//include "../class/classBD.php";
include "classBD.php";

class Cita extends datosBase 
{
    function lista()
    {
        $this->consulta("SELECT id_cita, e.estatus, fecha_entrega, fecha_cita FROM cita JOIN estatus_cat e ON estatus_cat_fk=id_estatus_cat");
        $html = '<table class="table table-hover table-striped table-dark">';

        //$html .= '<tr><td colspan="2"></td>';

        for ($col = 0; $col < $this->numeColumnas; $col++) { //cabeceras
            $html .= '<th>' . $this->nombColumnas[$col]->name . '</th>';
        }
        $html .= '</tr>';

        for ($ren = 0; $ren < $this->numeRegistros; $ren++) {
            $html .= '<tr>';
            $datos = $this->getRecord();
            //$html .= '<td><img src="../img/user.webp" width="24px" /></td><td><img src="../img/garbage.webp" width="24px" /></td>';
            for ($col = 0; $col < $this->numeColumnas; $col++) {
                $html .= '<td>' . $datos[$col] . '</td>';
            }
            $html .= '</tr>';
        }
        $html .= '</table>';
        return $html;
    }
}
$objeCita = new Cita();
