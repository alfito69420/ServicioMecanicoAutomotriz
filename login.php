

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" media="screen" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/footer.css" media="screen">
    <title>Servicars | Login</title>

    <style>
        /* #form {
            background-color: #777;
        } */
        
    </style>
</head>

<body>
    <?php
    include 'menu/menu_index.php';
    ?>

    <!--FORM-->
    <div class="container-fluid">
        <div class="row">
            <form id="form" class="mb-3 mt-3 w-25 mx-auto bg-dark p-3" action="validar.php" method="get">
                <label for="emailInput" class="form-label">Email</label>
                <input name="email" type="text" class="form-control" placeholder="Ingrese su email">
                <label for="passInput" class="form-label mt-3">Contraseña</label>
                <input name="password" type="password" class="form-control" placeholder="Ingrese su contraseña">

                <input type="button" class="btn btn-primary mx-auto mt-3" value="Iniciar sesión">
            </form>
            <!-- <div class="d-flex justify-content-center align-items-center">
                <button type="button" class="btn btn-dark mx-auto mt-3 w-25">Iniciar sesión</button>
            </div> -->
        </div>
    </div>
    <!--/FORM-->

    <?php
    include 'footer.php';
    ?>
</body>

</html>