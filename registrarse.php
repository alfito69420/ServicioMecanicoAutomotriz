<?php
session_start();
$captcha = "Cuanto es: ";
$var1 = rand() % 9 + 1;
$var2 = rand() % 9 + 1;
$ope = rand() % 3;

switch ($ope) {
    case 0:
        $captcha .= $var1 . " + " . $var2;
        $resu = $var1 + $var2;
        break;

    case 1:
        $captcha .= $var1 . " - " . $var2;
        $resu = $var1 - $var2;
        break;

    case 2:
        $captcha .= $var1 . " * " . $var2;
        $resu = $var1 * $var2;
}

$_SESSION['captcha'] = $resu;
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Servicars | Registrarse</title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/footer.css" media="screen">
</head>

<body>
    <?php
    include "menu/menu_index.php"
    ?>

    <!--FORM-->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form class="mb-3 mt-3 w-50 mx-auto bg-dark p-3" action="registrarse_bd.php" method="post">
                    <label for="nameInput" class="form-label">Nombre</label>
                    <input name="nombre" type="text" class="form-control" id="nameRegister" placeholder="Ingrese su nombre">

                    <label for="primerApInput" class="form-label mt-3">Apellido Paterno</label>
                    <input name="primerAp" type="text" class="form-control" id="apRegister" placeholder="Ingrese su apellido">

                    <label for="segundoApInput" class="form-label mt-3 mt-3">Apellido Materno</label>
                    <input name="segundoAp" type="text" class="form-control" id="apRegister" placeholder="Ingrese su apellido">

                    <label for="emailInput" class="form-label mt-3">Correo electrónico</label>
                    <input name="email" type="email" class="form-control" id="emailRegister" placeholder="Ingrese su correo electrónico">
                
                    <label for="passInput" class="form-label mt-3">Password</label>
                    <input name="pass" type="password" class="form-control" id="passRegister" placeholder="Ingrese su contraseña">

                    <?php
                    //include "class/classBD.php";
                    //echo $objeBD->crearLista("select * from catatendencia order by Nombre;", "Tendencia", "idTendencia", "Nombre");
                    ?>

                    <label for="captchaInput" class="form-label mt-3">Captcha</label>
                    <input name="captcha" type="text" class="form-control" placeholder="<?= $captcha; ?>" required>

                    <input type="submit" class="btn btn-primary mx-auto mt-3 w-25" value="Registrar">
                </form>
            </div>
        </div>
    </div>
    <!--/FORM-->

    <?php
        include 'footer.php';
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>