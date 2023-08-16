<?php
    session_start();
    include_once("../../config/DBConect.php");
    include_once("../../config/Config.php");

    if(isset($_POST['identificacion']))  $identificacion = $_POST['identificacion'];
    if(isset($_POST['nombres']))         $nombres = $_POST['nombres']; 
    if(isset($_POST['apellidos']))       $apellidos = $_POST['apellidos']; 
    if(isset($_POST['email']))           $email = $_POST['email']; 
    if(isset($_POST['telefono']))        $telefono = $_POST['telefono']; 
    if(isset($_POST['direccion']))       $direccion = $_POST['direccion'];
    if(isset($_POST['universidad']))     $universidad = $_POST['universidad'];
    if(isset($_POST['carrera']))         $carrera = $_POST['carrera'];
    if(isset($_POST['id']))              $id      = $_POST['id'];

    $conexion = new Database;  
    $result = $conexion->updateEstudiante($identificacion,$nombres,$apellidos,$email,$telefono,$direccion,$universidad,$carrera,$id);

    header("Location: ".ROOT."modulos/estudiantes/estudiantes.php?mensaje=".$result);

?>