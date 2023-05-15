<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="../css/bootstrap.css" media="screen" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../css/footer.css" media="screen">
    
    <title>Servicars | Generar Reporte</title>
</head>
<body>
    <!--FORM-->
    <div class="container">
        <div class="row">
            <div class="col-12">

                <h1 class="text-center mt-5">Crear Cita</h1>

                <form class="mb-3 mt-3 w-50 mx-auto bg-dark p-3" action="registrarse_bd.php" method="post">
                    <label for="marcaInput" class="form-label">Marca</label>

                    <input name="marca" type="text" class="form-control" id="nameRegister" placeholder="Ingrese la marca del vehículo">

                    <label for="modeloInput" class="form-label mt-3">Modelo</label>
                    <input name="modelo" type="text" class="form-control" id="modelo" placeholder="Ingrese el modelo del vehículo">

                    <label for="placaInput" class="form-label mt-3">Num. Placa</label>
                    <input name="placa" type="text" class="form-control" id="placa" placeholder="Ingrese el número de placa">

                    <label for="anioInput" class="form-label mt-3">Año</label>
                    <input name="anio" type="number" class="form-control" id="anio" placeholder="Ingrese el año del automovil">

                    <label for="fechaInput" class="form-label mt-3">Fecha Cita</label>
                    <input name="fecha" type="date" class="form-control" id="fecha" placeholder="Ingrese la fecha para agendar la cita">
                
                    <label for="causaInput" class="form-label mt-3">Causa de averío</label>
                    <input name="causa" type="text" class="form-control" id="causa" placeholder="Ingrese la causa de averío del automóvil">

                    <?php
                    //include "class/classBD.php";
                    //echo $objeBD->crearLista("select * from catatendencia order by Nombre;", "Tendencia", "idTendencia", "Nombre");
                    ?>
<!-- 
                    <label for="captchaInput" class="form-label">Captcha</label>
                    <input name="captcha" type="text" class="form-control" placeholder="<?= $captcha; ?>" required> -->

                    <input type="submit" class="btn btn-secondary mx-auto mt-3 w-25" value="Crear cita">
                </form>
            </div>
        </div>
        
        <a class="btn btn-primary mb-5" href="mis_citas.php" role="button">Volver</a>
    </div>
    <!--/FORM-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>