<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.css" media="screen" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../css/footer.css" media="screen">
    <title>ServiCars | Mi Perfil</title>
</head>

<body>
    <?php
    include "../menu/menu_admin.php";
    ?>

<div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-md-5 mt-5 pt-5">
                <div class="row z-depth-3">
                    <div class="col-sm-4 bg-info rounded-left">
                        <div class="card-block text-center text-white">
                            <i class="fas fa-user-tie fa-7x mt-5"></i>
                            <h2 class="font-weight-bold mt-4">Hola</h2>
                            <p>Hola</p>
                            <i class="far fa-edit fa-2x mb-4"></i>
                        </div>
                    </div>
                    <div class="col-sm-8 bg-secondary rounded-right">
                        <h3 class="mt-3 text-center">Información</h3>
                        <!-- <hr class="badge-secondary w-50"> -->
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="font-weight-bold">Nombre:</p>
                                <h6 class="text-muted">
                                    <?php
                                    echo $_SESSION['nombre'];
                                    ?>
                                </h6>
                            </div>
                            <div class="col-sm-6">
                                <p class="font-weight-bold">Correo:</p>
                                <h6 class="text-muted">el email de este cabron</h6>
                            </div>
                            <h4 class="mt-3">AAAAAAAAAAAAA</h4>
                            <!-- <hr class="badge-secondary w-50"> -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="font-weight-bold">TEXTO</p>
                                    <h6 class="text-muted">TEXTOel email de este cabron</h6>
                                </div>
                                <div class="col-sm-6">
                                    <p class="font-weight-bold">TEXTO</p>
                                    <h6 class="text-muted">TEXTO</h6>
                                </div>
                            </div>

                        </div>
                    </div>
                    <a class="btn btn-danger col-md-12 mt-3" href="../index.php" role="button">Cerrar Sesión</a>
                </div>

            </div>
        </div>
    </div>
    
    <?php
    include '../footer.php';
    ?>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>