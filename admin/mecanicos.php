<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.css" media="screen" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../css/footer.css" media="screen">
    <title>ServiCars | Inicio</title>
</head>

<body>
    
    <?php
    include "../menu/menu_admin.php";
    ?>
    <div class="text-center pt-4">
        <h3 >Mecánicos</h3>
    </div>
    <div class="container">
    <?php
        include "../class/classMecanicos.php";
        echo $objeMecanicos->lista();
    ?>
    </div>
    <?php
    include '../footer.php';
    ?>
</body>

</html>