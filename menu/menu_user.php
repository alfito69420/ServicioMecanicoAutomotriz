<?php
// session_start();

// if (!isset($_SESSION['nombre']))
//     header("location: ../index.php?e=45");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    
<!--HEADER-->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">ServiCars</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../regular_user/mis_citas.php">Mis Citas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Reportes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../regular_user/mi_vehiculo.php">Mi Vehículo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../regular_user/home_users.php">Mi Perfil</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--/HEADER-->
</body>
</html>
