<?php
session_start();
$id = $_SESSION['id'];
include "classBD.php";

class Vehiculo extends datosBase
{
    function lista()
    {
        // //$this->consulta("SELECT id_usuario, nombre, primer_ap, segundo_ap FROM usuario_cat WHERE rol_fk = 7");
        // $this->consulta("SELECT ma.marca, mo.modelo, us.nombre FROM vehiculo 
        // JOIN marca_cat ma ON marca_cat_fk=id_marca_cat JOIN modelo_cat mo ON modelo_cat_fk=id_modelo_cat JOIN
        // usuario_cat us ON usuario_cat=id_usuario");

        $this->consulta("SELECT ma.marca as MARCA, mo.modelo as MODELO, placa as PLACA, ano_automovil AS AÑO, c.id_cita as CITA FROM vehiculo join marca_cat ma on id_marca_cat=marca_cat_fk join modelo_cat mo on id_modelo_cat=modelo_cat_fk join cita c on id_cita=cita_fk WHERE usuario_cat=".$_SESSION['id']);
        //$this->consulta("SELECT ma.marca, mo.modelo, ano_automovil, u.id_usuario FROM vehiculo join marca_cat ma on id_marca_cat=marca_cat_fk join modelo_cat mo on id_modelo_cat=modelo_cat_fk join usuario_cat u on id_usuario=usuario_cat WHERE usuario_cat=".$_SESSION['id']);
        $html = '<table class="table table-hover table-striped table-secondary">';

        $html .= '<thead><tr class="table-dark">
                            <td colspan="1">
                                
                            </td>';

        for ($col = 0; $col < $this->numeColumnas; $col++) { //cabeceras
            $html .= '<th>' . $this->nombColumnas[$col]->name . '</th>';
        }
        $html .= '</tr>';

        for ($ren = 0; $ren < $this->numeRegistros; $ren++) {
            $html .= '<tr>';
            $datos = $this->getRecord();
            
            $html .= '<td>
                       
                    </td>';

            for ($col = 0; $col < $this->numeColumnas; $col++) {
                $html .= '<td>' . $datos[$col] . '</td>';
            }
            $html .= '</tr>';
        }
        $html .= '</table>';
        return $html;
    } //close function

    
}//close class

$objeVehiculo = new Vehiculo();
