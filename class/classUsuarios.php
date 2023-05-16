<?php
//include "../class/classBD.php";
include "classBD.php";

class Usuarios extends datosBase 
{
    function lista()
    {
        $this->consulta("SELECT id_usuario, nombre, primer_ap, segundo_ap FROM usuario_cat WHERE rol_fk =1");
        $html = '<table class="table table-hover table-striped table-dark">';

        //$html .= '<tr><td colspan="2"><img src="../img/edit.webp" width="24px" /></td>';

        $html .= '<thead><tr class="table-dark">
                            <td colspan="2">
                                <form method="post" action="usuarios.php">
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
            //
            
            $html.='<td>
                        <form method="post" action="../admin/usuarios.php">
                        <input type="image" src="../img/user.webp" width="24px" />
                        <input type="hidden" name="id" value='.$datos[0].' />
                        <input type="hidden" name="accion" value="formEdit"/>
                        </form>
                    </td>
                    
                    <td>
                        <form method="post" action="../admin/usuarios.php" onsubmit="return confirm(\'Estas seguro?\')">
                        <input type="image" src="../img/garbage.webp" width="24px" 
                        />
                        <input type="hidden" name="id" value='.$datos[0].'  />
                        <input type="hidden" name="accion" value="borrar"/>
                        </form>
                    </td>';
                    //$html .= '<td><img src="../img/user.webp" width="24px" /></td><td><img src="../img/garbage.webp" width="24px" /></td>';
            for ($col = 0; $col < $this->numeColumnas; $col++) {
                $html .= '<td>' . $datos[$col] . '</td>';
            }
            $html .= '</tr>';
        }
        $html .= '</table>';
        return $html;
    }//close function

    function ejecuta($p_accion,$p_id=0){
        $html="";
        switch($p_accion){
            case 'formEdit':
                $registro=$this->getTupla("SELECT * FROM usuario_cat WHERE id_usuario=".$p_id);
            case 'formNew':
                

                $html.='<div class="d-flex justify-content-center">
                            <form method="post" class="col-4">';
                if($p_accion=='formNew')
                    $html.="<h3  class='text-center mb-5'>Nuevo Cliente</h3>";
                else{
                    $html.='<h3 class="text-center mb-5">Actualizar Cliente</h3>
                            <input type="hidden" name="Id" value="'.(isset($registro)?$registro->id_usuario:'').'"';
                }               
                    $html.='<div class="container">
                                <div class="row">
                                    <label class="col-4">Nombre</label>
                                        <div class="col-8">
                                            <input class="" type="text" name="nombre" value='.
                                                (isset($registro)?$registro->nombre:'').'>
                                        </div>
                                    </div>
                                    <div class="row mt-d mt-5">
                                        <button type="submit" class="btn btn-success btn-sm">'
                                        .
                                                (isset($registro)?'Actualizar':'Registrar').'
                                        </button>
                                        <input type="hidden" name="accion" value='
                                        .
                                                (isset($registro)?'update':'insert').'
                                        />
                                    </div>
                                </div>
                            </form>
                        </div>';
                break;
            case 'borrar':
                $query='delete from usuario_cat where id_usuario='.$p_id;
                $this->consulta($query);
                return $this->lista();
                break;
            case 'insert';
                $query="insert into usuario_cat(nombre) values ('".$_POST['nombre']."')";
                $this->consulta($query);
                return $this->lista();
                break;
            case 'update':
                $query='update usuario_cat set nombre="'.$_POST['nombre'].'" where id_usuario='.$_POST['Id'];
                $this->consulta($query);
                return $this->lista();
                break;
            default:
                $html=$p_accion."No esta programada en classUsuarios";        
        }
        return $html;
    }//close function
}
$objeUsuarios = new Usuarios();
?>
