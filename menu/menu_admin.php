<?php
// session_start();

// if (!isset($_SESSION['nombre']))
//     header("location: ../index.php?e=45");
// 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                        <a class="nav-link" aria-current="page" href="../admin/citas.php">Citas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../admin/reportes.php">Reportes</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Usuarios
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="../admin/mecanicos.php">Mecánicos</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../admin/usuarios.php">Clientes</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../admin/admin_perfil.php">Mi Perfil</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--/HEADER-->
</body>

</html>