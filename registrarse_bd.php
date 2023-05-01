<?
session_start();

include "class/classBD.php";

if ($_POST['captcha'] != $_SESSION['captcha']) {
    header("Location: registrarse.php?e=1");
}

$cad = "insert into usuario_cat set nombre='" . $_POST['nombre'] . "', primer_ap='" . $_POST['primerAp'] . "', segundo_ap='" . $_POST['segundoAp'] . "', correo='" . $_POST['email'] . "', contrasena=password('" . $_POST['pass'] . "')";

// if (!$mail->Send()) {
//     echo  "Error: " . $mail->ErrorInfo;
// } else {
//     $objeBD->consulta($cad);
//     header("location: index.php?e=7");
// }

$objeBD->consulta($cad);
header("location: index.php?e=7");
