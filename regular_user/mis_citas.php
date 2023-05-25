<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.css" media="screen" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../css/footer.css" media="screen">

    <title>Servicars | Mis Citas</title>
</head>

<body>
    <?php
    include '../menu/menu_user.php';
    ?>

    <div class="container-fluid text-center mt-5">
        <h1>Mis Citas</h1>
    </div>

    <div class="container-fluid">
        <?php
        include '../class/classCitaCliente.php';
        //echo $objeCitaCliente->lista();
        if (isset($_POST['accion']) && isset($_POST['id'])) {
            echo $objeCitaCliente->ejecuta($_POST['accion'], $_POST['id']);
        } else {
            if (isset($_POST['accion'])) {
                echo $objeCitaCliente->ejecuta($_POST['accion']);
            } else
                echo $objeCitaCliente->lista();
        }
        ?>
    </div>
    <div class="container-fluid">
        <a class="btn btn-primary" href="generar_cita.php" role="button">Generar Nueva Cita</a>
    </div>

    <?php
    include '../footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>