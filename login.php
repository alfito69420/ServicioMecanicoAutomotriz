<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" media="screen" rel="stylesheet">
    <title>Login | </title>
</head>

<body>
    <?php
    include 'menu/menu_index.php';
    ?>

    <!--FORM-->
    <div class="container">
        <div class="row">
            <form class="mb-3 mt-3 w-25 mx-auto" action="validar.php" method="get">
                <label for="emailInput" class="form-label">Email</label>
                <input name="email" type="text" class="form-control"placeholder="Ingrese su email">
                <label for="passInput" class="form-label mt-3">Contraseña</label>
                <input name="password" type="password" class="form-control" placeholder="Ingrese su contraseña">

                <input type="submit" class="btn btn-dark mx-auto mt-3" value="Iniciar sesión">
            </form>
            <!-- <div class="d-flex justify-content-center align-items-center">
                <button type="button" class="btn btn-dark mx-auto mt-3 w-25">Iniciar sesión</button>
            </div> -->
        </div>
    </div>
    <!--/FORM-->
</body>

</html>