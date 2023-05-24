<?php

$objeBD = new datosBase();

class datosBase
{

    var $conexion;
    var $numeRegistros;
    var $bloqueRegistros;

    var $numeColumnas;
    var $nombColumnas;

    function conecta()
    {
        $this->conexion = mysqli_connect("localhost", "root", "", "serviciomecanico"); // or die("No se puede conectar");
    }

    function cierraBD()
    {
        mysqli_close($this->conexion);
    }

    function consulta($p_sql)
    {  //  solo para select, si meto insert da error
        $this->conecta();
        $this->bloqueRegistros = mysqli_query($this->conexion, $p_sql);

        // if ($this->bloqueRegistros) {
        //     printf("Error: %s\n", mysqli_error($p_sql));
        // }

        if (strpos(strtoupper($p_sql), "SELECT") !== false) {
            $this->numeRegistros = mysqli_num_rows($this->bloqueRegistros);

            $this->numeColumnas = mysqli_num_fields($this->bloqueRegistros);
            for ($temp = 0; $temp < $this->numeColumnas; $temp++) {
                $this->nombColumnas[$temp] = mysqli_fetch_field_direct($this->bloqueRegistros, $temp);
            }

            if (mysqli_error($this->conexion) > "") {  //  por si la cago y pongo un insert
                echo mysqli_error($this->conexion) . " " . $p_sql;
                exit;
            }
        }
        $this->cierraBD();
    }

    function getRecord()
    {
        return mysqli_fetch_array($this->bloqueRegistros);
    }

    function getTupla($query)
    {
        $this->consulta($query);
        return mysqli_fetch_object($this->bloqueRegistros);
    }
}
