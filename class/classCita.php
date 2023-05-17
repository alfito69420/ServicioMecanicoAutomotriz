<?php
//include "../class/classBD.php";
include "classBD.php";

class Cita extends datosBase
{
    function lista()
    {
        $this->consulta("SELECT id_cita, e.estatus, fecha_entrega, fecha_cita FROM cita JOIN estatus_cat e ON estatus_cat_fk=id_estatus_cat");

        // $this->consulta("SELECT id_cita, e.estatus, fecha_entrega, fecha_cita 
        // FROM cita JOIN estatus_cat e ON estatus_cat_fk=id_estatus_cat WHERE id_usuario=".$_SESSION['id']);

        $html = '<table class="table table-hover table-striped table-secondary">';

        //$html .= '<tr><td colspan="2"></td>';

        $html .= '<thead><tr class="table-dark">
                            <td colspan="2">
                                <form method="post" action="citas.php">
                                <input type="image" src ="../img/edit.webp" width="24px" />
                                <input type="hidden" name="accion" value="formNew"/>
                                </form> 
                            </td>';

        for ($col = 0; $col < $this->numeColumnas; $col++) { //cabeceras
            $html .= '<th>' . $this->nombColumnas[$col]->name . '</th>';
        }
        $html .= '</tr>';

        for ($ren = 0; $ren < $this->numeRegistros; $ren++) {
            $html .= '<tr>';
            $datos = $this->getRecord();
            //$html .= '<td><img src="../img/user.webp" width="24px" /></td><td><img src="../img/garbage.webp" width="24px" /></td>';
            $html .= '
                    
                    <td>
                        <form method="post" action="../admin/citas.php" onsubmit="return confirm(\'Estas seguro?\')">
                        <input type="image" src="../img/garbage.webp" width="24px" />
                        <input type="hidden" name="id" value=' . $datos[0] . '  />
                        <input type="hidden" name="accion" value="borrar"/>
                        </form>
                    </td>
                    
            
                    
                    <td>
                        <form method="post" action="../admin/citas.php")">
                        <input type="image" src="../img/estatus.webp" width="24px" />
                        <input type="hidden" name="id" value=' . $datos[0] . '  />
                        <input type="hidden" name="accion" value="estatus"/>
                        </form>
                    </td>';

            for ($col = 0; $col < $this->numeColumnas; $col++) {

                if ($datos[$col] == 1) {
                    echo "HOLA MUNDO";
                    $html .= '<td>
                        <form method="post" action="../admin/citas.php">
                        <input type="image" src="../img/user.webp" width="24px" />
                        <input type="hidden" name="id" value=' . $datos[0] . ' />
                        <input type="hidden" name="accion" value="aaaaa"/>
                        </form>
                    </td>';
                }
                $html .= '<td>' . $datos[$col] . '</td>';
            }
            $html .= '</tr>';
        }
        $html .= '</table>';
        return $html;
    } //close function

    function ejecuta($p_accion, $p_id = 0)
    {
        $p_accion =  str_replace('/', '', $p_accion);
        $html = "";
        switch ($p_accion) {
            case 'estatus':
                $registro = $this->getTupla("SELECT * FROM cita WHERE id_cita=" . $p_id);
            case 'formNew':

                $html .= '<div class="d-flex justify-content-center">
                            <form method="post" class="col-4">';
                if ($p_accion == 'formNew')
                    $html .= "<h3  class='text-center mb-5'>Nueva Cita</h3>";
                else {
                    $html .= '<h3 class="text-center mb-5">Actualizar Cita</h3>
                            <input type="hidden" name="Id" value="' . (isset($registro) ? $registro->id_cita : '') . '"';
                }

                // $html .= '<div class="container">
                //                 <div class="row">
                //                     <label class="col-4">Nombre</label>
                //                         <div class="col-8">
                //                             <input class="" type="text" name="nombre" value=' .
                //     (isset($registro) ? $registro->Nombre : '') . '>
                //                         </div>
                //                     </div>
                //                     <div class="row mt-d mt-5">
                //                         <button type="submit" class="btn btn-success btn-sm">'
                //     .
                //     (isset($registro) ? 'Actualizar' : 'Registrar') . '
                //                         </button>
                //                         <input type="hidden" name="accion" value='
                //     .
                //     (isset($registro) ? 'update' : 'insert') . '
                //                         />
                //                     </div>
                //                 </div>
                //             </form>
                //         </div>';

                $html .= '<div class="container">
                                <div class="row">
                                    <label class="col-4">Estatus</label>
                                        <div class="col-8">
                                            <input class="" type="text" name="estatus" value=' . (isset($registro) ? $registro->estatus_cat_fk : '') . '>
                                        </div>
                                    <label class="col-4">Fecha de Cita (aa/mm/dd)</label>
                                        <div class="col-8">
                                            <input class="" type="text" name="fechaCita" value=' . (isset($registro) ? $registro->fecha_cita : '') . '>
                                        </div>
                                    <label class="col-4">Fecha de entrega (aa/mm/dd)</label>
                                        <div class="col-8">
                                            <input class="" type="text" name="fechaEntrega" value=' . (isset($registro) ? $registro->fecha_entrega : '') . '>
                                        </div>
                                    </div>
                                    <div class="row mt-d mt-5">
                                        <button type="submit" class="btn btn-success btn-sm">' . (isset($registro) ? 'Actualizar' : 'Registrar') . '
                                        </button>
                                        <input type="hidden" name="accion" value=' . (isset($registro) ? 'update' : 'insert') . '/>
                                        
                                    </div>
                                </div>
                            </form>
                        </div>';
                break;
            case 'borrar':
                $query = 'delete from cita where id_cita=' . $p_id;
                $this->consulta($query);
                return $this->lista();
                break;
            case 'insert';
                //$query = "insert into cita(Nombre) values ('" . $_POST['nombre'] . "')";

                $query2 = "INSERT INTO cita SET fecha_cita='" . $_POST['fechaCita'] . "'
                , fecha_entrega='" . $_POST['fechaEntrega'] . "', estatus_cat_fk=" . $_POST['estatus'];

                $this->consulta($query2);
                return $this->lista();
                break;
            case 'update':
                //$query = 'UPDATE cita SET Nombre="' . $_POST['nombre'] . '" where id_cita=' . $_POST['Id'];

                //$query2 = "UPDATE cita SET fecha_cita='" . $_POST['fechaCita'] . "'
                //, fecha_entrega='" . $_POST['fechaEntrega'] . "'
                //, estatus_cat_fk=" . $_POST['estatus']  . "WHERE id_usuario=" . $_POST['Id'];


                $query2 = "UPDATE cita SET fecha_cita='" . $_POST['fechaCita'] . "'
                , fecha_entrega='" . $_POST['fechaEntrega'] . "'
                , estatus_cat_fk=" . $_POST['estatus'] . " WHERE id_cita=" . $_POST['Id'];
                $this->consulta($query2);
                return $this->lista();
                break;
            default:
                $html = $p_accion . "No esta programada en classCita";
        }
        return $html;
    } //close function
}
$objeCita = new Cita();
