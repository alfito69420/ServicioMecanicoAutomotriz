<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.css" media="screen" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../css/footer.css" media="screen">


    <title>ServiCars | Mecánicos</title>
</head>

<body>

    <?php
    include "../menu/menu_admin.php";
    ?>
    <div class="text-center pt-4">
        <h3>Mecánicos</h3>
    </div>
    <div class="container">
        <?php
        include "../class/classMecanicos.php";
        //echo $objeMecanicos->lista();

        if (isset($_POST['accion']) && isset($_POST['id'])) {
            echo $objeMecanicos->ejecuta($_POST['accion'], $_POST['id']);
        } else {
            if (isset($_POST['accion'])) {
                echo $objeMecanicos->ejecuta($_POST['accion']);
            } else
                echo $objeMecanicos->lista();
        }


        //echo $query;
        ?>
    </div>
    <?php
    include '../footer.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>