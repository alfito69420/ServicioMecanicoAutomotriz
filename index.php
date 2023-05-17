<?php
session_start();
session_destroy();
$_SESSION = array();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/bootstrap.css" media="screen" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/footer.css" media="screen">

    <style>
        #main .carousel-inner img {

            max-height: 70vh;
            object-fit: cover;
            filter: grayscale(70%);
        }

        #carousel {
            position: relative;
        }

        #carousel .overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
        }
    </style>

    <title>Servicars | Inicio</title>
</head>

<body>

    <?php
    include 'menu/menu_index.php';
    ?>

    <!-- Main -->
    <main id="main">
        <div id="carousel" class="carousel slide" data-bs-ride="carousel" data-pause="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/mecanico5.webp" class="d-block w-100" alt="mecanico 1">
                </div>
                <div class="carousel-item">
                    <img src="img/mecanico4.webp" class="d-block w-100" alt="mecanico 2">
                </div>
                <div class="carousel-item">
                    <img src="img/mecanico6.webp" class="d-block w-100" alt="mecanico 3">
                </div>
                <div class="overlay">
                    <div class="container">
                        <div class="row">
                            <div class="carousel-caption d-none d-md-block">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center carousel-caption d-none d-md-block">
                <h1>Servicio de Calidad Garantizada</h1>
                <h3 class="">Tu automóvil en manos de profesionales</h3>
                <a class="btn btn-primary col-md-2" href="registrarse.php" role="button">Registrate</a>
            </div>
            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> -->
        </div>
    </main>
    <!-- /Main -->

    <section id="fancy" class="mt-5 mb-4">
        <div class="container-fluid">
            <div class="row m-5">
                <div class="col text-center text-uppercase">
                    <h2>Conócenos</h2>
                </div>
                <div class="row mt-4">
                    <div class="col-md-3 mb-4">
                        <div class="card" style="width: 18rem;">
                            <img src="img/card_1.webp" class="card-img-top" alt="a">
                            <div class="card-body">
                                <h5 class="card-title">Reparaciones Rápidas y Precisa</h5>
                                <p class="card-text">Devuelve la potencia a tu automóvil en tiempo récord.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card" style="width: 18rem;">
                            <img src="img/card_2.webp" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title tex-/center">Experiencia en Mantenimiento</h5>
                                <p class="card-text">Confía en nuestros expertos para cuidar de tu vehículo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card" style="width: 18rem;">
                            <img src="img/card_3.webp" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title tex-/center">Diagnóstico Profesional de Fallas</h5>
                                <p class="card-text">Encuentra y soluciona los problemas de tu vehículo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card" style="width: 18rem;">
                            <img src="img/card_4.webp" class="card-img-top" alt="a">
                            <div class="card-body">
                                <h5 class="card-title">Renueva el Rendimiento de tu Automóvil</h5>
                                <p class="card-text">Recupera la potencia y eficiencia de tu motor.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php
    // include 'menu/menu_index.php';
    include 'footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>