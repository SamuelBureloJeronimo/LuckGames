<?php
    require 'conexion.php';

    $userl = $_POST['jtxtUser'];
    $passl = $_POST['jtxtPass'];

    $p = "SELECT COUNT(*) as cont from tbleLogin where Usuario='$userl' and Pass='$passl';";
    $con = mysqli_query($conexion,$p);
    $array = mysqli_fetch_array($con);
    //Case 1: Si el usuario no existe retorna esto:
    if(!$array['cont']){
        echo "<script>alert('No se encontro usuario.')</script>";
        echo "<script>self.location='../login.php';</script>";
        return;
    }
    //Case 2: Si el usuario es 'admin' retorna esto:
    $con = mysqli_query($conexion,"SELECT * from tbleLogin where Usuario='$userl';");
    $array = mysqli_fetch_array($con);
    if($array['Rol'] !== "admin"){
        echo "<script>alert('Bienvenido $userl')</script>";
        echo "<script>self.location='../index.php';</script>";
        return;
    }
    //Case default: Si el usuario no es 'admin' retorna esto:
    echo "<script>alert('Bienvenido administrador [$userl].');</script>";  
    echo "<script>self.location='../index.php';</script>";
?>