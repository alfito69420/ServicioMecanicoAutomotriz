<?php
//include "../class/classBD.php";
include "classBD.php";

class Mecanicos extends datosBase 
{
    function lista()
    {
        $this->consulta("SELECT id_usuario, nombre, primer_ap, segundo_ap FROM usuario_cat WHERE rol_fk =7");
        $html = '<table class="table table-hover table-striped table-dark">';

        $html .= '<tr><td colspan="2"><img src="../img/user.webp" width="24px" /></td>';

        for ($col = 0; $col < $this->numeColumnas; $col++) { //cabeceras
            $html .= '<th>' . $this->nombColumnas[$col]->name . '</th>';
        }
        $html .= '</tr>';

        for ($ren = 0; $ren < $this->numeRegistros; $ren++) {
            $html .= '<tr>';
            $datos = $this->getRecord();
            $html .= '<td><img src="../img/edit.webp" width="24px" /></td><td><img src="../img/garbage.webp" width="24px" /></td>';
            for ($col = 0; $col < $this->numeColumnas; $col++) {
                $html .= '<td>' . $datos[$col] . '</td>';
            }
            $html .= '</tr>';
        }
        $html .= '</table>';
        return $html;
    }
}
$objeMecanicos = new Mecanicos();
?>
