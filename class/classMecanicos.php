<?php
//include "../class/classBD.php";
include "classBD.php";

class Mecanicos extends datosBase
{
    function lista()
    {
        $this->consulta("SELECT id_usuario, nombre, primer_ap, segundo_ap FROM usuario_cat WHERE rol_fk =7");
        $html = '<table class="table table-hover table-striped table-dark">';

        //$html .= '<tr><td colspan="2"><img src="../img/edit.webp" width="24px" /></td>';

        $html .= '<thead><tr class="table-dark">
                            <td colspan="2">
                                <form method="post" action="mecanicos.php">
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

            $html .= '<td>
                        <form method="post" action="../admin/mecanicos.php">
                        <input type="image" src="../img/user.webp" width="24px" />
                        <input type="hidden" name="id" value=' . $datos[0] . ' />
                        <input type="hidden" name="accion" value="formEdit"/>
                        </form>
                    </td>
                    
                    <td>
                        <form method="post" action="../admin/mecanicos.php" onsubmit="return confirm(\'Estas seguro?\')">
                        <input type="image" src="../img/garbage.webp" width="24px" 
                        />
                        <input type="hidden" name="id" value=' . $datos[0] . '  />
                        <input type="hidden" name="accion" value="borrar"/>
                        </form>
                    </td>';

            for ($col = 0; $col < $this->numeColumnas; $col++) {
                $html .= '<td>' . $datos[$col] . '</td>';
            }
            $html .= '</tr>';
        }
        $html .= '</table>';
        return $html;
    } //close function

    function ejecuta($p_accion, $p_id = 0)
    {
        $html = "";
        switch ($p_accion) {
            case 'formEdit':
                $registro = $this->getTupla("SELECT * FROM usuario_cat WHERE id_usuario=" . $p_id);
            case 'formNew':


                $html .= '<div class="d-flex justify-content-center">
                            <form method="post" class="col-4">';
                if ($p_accion == 'formNew')
                    $html .= "<h3  class='text-center mb-5'>Nuevo Mecanico</h3>";
                else {
                    $html .= '<h3 class="text-center mb-5">Actualizar Mecanico</h3>
                            <input type="hidden" name="Id" value="' . (isset($registro) ? $registro->id_usuario : '') . '"';
                }

                $html .= '<div class="container">
                                <div class="row">
                                    <label class="col-4">Nombre</label>
                                        <div class="col-8">
                                            <input class="" type="text" name="nombre" value=' .
                    (isset($registro) ? $registro->nombre : '') . '>
                                        </div>
                                    <label class="col-4">Primer Apellido</label>
                                    <div class="col-8">
                                            <input class="" type="text" name="primerAp" value=' .
                    (isset($registro) ? $registro->primer_ap : '') . '>
                                        </div>
                                    <label class="col-4">Segundo Apellido</label>
                                    <div class="col-8">
                                            <input class="" type="text" name="segundoAp" value=' .
                    (isset($registro) ? $registro->segundo_ap : '') . '>
                                        </div>
                                        <label class="col-4">Correo</label>
                                    <div class="col-8">
                                            <input class="" type="text" name="correo" value=' .
                    (isset($registro) ? $registro->correo : '') . '>
                                        </div>
                                        <label class="col-4">Password</label>
                                    <div class="col-8">
                                            <input class="" type="text" name="contrasena" value=' .
                    (isset($registro) ? $registro->contrasena : '') . '>
                                        </div>
                                        <label class="col-4">Rol</label>
                                    <div class="col-8">
                                            <input class="" type="text" name="rol" value=' .
                    (isset($registro) ? $registro->rol_fk : '') . '>
                                        </div>
                                    </div>
                                    <div class="row mt-d mt-5">
                                        <button type="submit" class="btn btn-success btn-sm">'
                    .
                    (isset($registro) ? 'Actualizar' : 'Registrar') . '
                                        </button>
                                        <input type="hidden" name="accion" value='
                    .
                    (isset($registro) ? 'update' : 'insert') . '
                                        />
                                    </div>
                                </div>
                            </form>
                        </div>';
                break;
            case 'borrar':
                $query = 'delete from usuario_cat where id_usuario=' . $p_id;
                $this->consulta($query);
                return $this->lista();
                break;
            case 'insert';
                //$query = "insert into usuario_cat(nombre, primer_ap, segundo_ap,contrasena,correo,rol_fk) 
                //values ('" . $_POST['nombre'] . "','" . $_POST['primerAp'] . "','" . $_POST['segundoAp'] . "','" . $_POST['correo'] . "',MD5('" . $_POST['contrasena'] . "'),'" . $_POST['rol_fk'] . "')";
                
                $query = "insert into usuario_cat set nombre='" . $_POST['nombre'] . "', primer_ap='" . $_POST['primerAp'] . "', segundo_ap='" . $_POST['segundoAp'] . "', correo='" . $_POST['correo'] . "', contrasena=MD5('" . $_POST['contrasena'] . "', rol_fk='".$_POST['rol']."')";
                $this->consulta($query);
                return $this->lista();
                break;
            case 'update':
                $query = 'update usuario_cat set nombre="' . $_POST['nombre'] . '" where id_usuario=' . $_POST['Id'];
                $this->consulta($query);
                return $this->lista();
                break;
            default:
                $html = $p_accion . "No esta programada en classUsuarios";
        }
        return $html;
    } //close function
}
$objeMecanicos = new Mecanicos();
