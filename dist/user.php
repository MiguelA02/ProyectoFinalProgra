<?php
include("conexion.php");

if(isset($_POST['btnSubmit'])){
    if (strlen($_POST['email'])>=1 && strlen($_POST['comment'])>=1) {
       
        $correo=trim($_POST['email']);
        $mensaje=trim($_POST['comment']);
       
        $recibirBD = "INSERT INTO comments (email, comment) VALUES ('$correo','$mensaje')";
        $obtencionBD=mysqli_query($conexion,$recibirBD);
    }
}
?>