<?php
    session_start();
    include_once("../../config/DBConect.php");
    include_once("../../config/Config.php");

    if(isset($_POST['nombre']))      $nombre = $_POST['nombre'];
    if(isset($_POST['fechaInicio'])) $fechaInicio = $_POST['fechaInicio'];
    if(isset($_POST['valor']))       $valor = $_POST['valor'];
    if(isset($_POST['jornada']))     $jornada = $_POST['jornada']; 
    if(isset($_POST['id']))          $id = $_POST['id']; 

    $conexion = new Database;  
    $result = $conexion->updateMateria($nombre,$fechaInicio,$valor,$jornada,$id);

    header("Location: ".ROOT."modulos/materias/materias.php?mensaje=".$result);

?>