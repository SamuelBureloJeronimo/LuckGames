<?php
    require 'conexion.php';

    $userl = $_POST['jtxtUser'];
    $passl = $_POST['jtxtPass'];
    $passConfirml = $_POST['jtxtPassConfirm'];

    $p = "SELECT COUNT(*) as cont from tbleLogin where Usuario='$userl';";
    $con = mysqli_query($conexion,$p);
    $array = mysqli_fetch_array($con);
    //Case 1: Si las contraseñas no coinciden retorna esto:
    if($passl !== $passConfirml){
        echo "<script>alert('Las contraseñas no coinciden')</script>";
        echo "<script>self.location='../crearUser.php';</script>";
        return;
    }
    //Case 2: Si el usuario ya existe retorna esto:
    if($array['cont']>0){
        echo "<script>alert('El usuario ya existe. Elige otro')</script>";
        echo "<script>self.location='../crearUser.php';</script>";
        return;
    }
    
    //Case default: Si pasa todas las condiciones entonces crea el usuario:
    $p = "INSERT INTO tbleLogin (Usuario,Pass) VALUES ('$userl','$passConfirml');";
    $con = mysqli_query($conexion,$p);
    //Case 1.1: Si el usuario ya existe retorna esto:
    if($array['cont']>0){
        echo "<script>alert('Error al guardar los datos.')</script>";
        echo "<script>self.location='../crearUser.php';</script>";
        return;
    }
    
    //Case default: Si pasa todas las condiciones entonces crea el usuario:
    echo "<script>alert('La cuenta se creo correctamente')</script>";
    echo "<script>self.location='../index.php';</script>";
?>