<?php 
    include_once("../../config/DBConect.php");
    include_once("../../config/Config.php");

    //session_start();

    $id = $_GET['id'];

    $conexion = new Database;  
    $result = $conexion->editEstudiante($id);

    $estud_id = $estud_identificacion = "";
    foreach($result->fetchAll(PDO::FETCH_OBJ) as $r){
        $estud_id             = $r->id;
        $estud_identificacion = $r->identificacion;
        $estud_nombres        = $r->nombres;
        $estud_apellidos      = $r->apellidos;
        $estud_email          = $r->email;
        $estud_telefono       = $r->telefono;
        $estud_direccion      = $r->direccion;
        $estud_universidad    = $r->universidad;
        $estud_carrera        = $r->carrera;
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../../css/estilos.css">
    <link rel="stylesheet" type="text/css" href="../../css/menu.css">
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../../css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

    <nav>
        <ul class="menu">
            <li class="logo"> 
                <a href="#"> 
                    <img src="../../img/u.png">
                </a>  
            </li>
            <li> 
                <a href="<?= ROOT ?>index.php">    
                    Inicio  
                </a>  
            </li>
            
        </ul>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8 col-xl-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        Modificar Estudiante
                        <a href="<?= ROOT ?>modulos/estudiantes/estudiantes.php" class="btn btn-primary">Regresar</a>
                    </div>
                    <div class="card-body">
                        <form action="update.php" method="POST" name="forrol">

                            <div class="form-group">
                                <label for="identificacion">Identificacion</label>
                                <input type="text" class="form-control" id="identificacion" name="identificacion" value="<?= $estud_identificacion ?>" required>
                                <input type="hidden" class="form-control" id="id" name="id" value="<?= $estud_id ?>">
                            </div>

                            <div class="form-group">
                                <label for="nombres">Nombres</label>
                                <input type="text" class="form-control" id="nombres" name="nombres" value="<?= $estud_nombres ?>" required>
                                <input type="hidden" class="form-control" id="id" name="id" value="<?= $estud_id ?>">
                            </div>

                            <div class="form-group">
                                <label for="apellidos">Apellidos</label>
                                <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?= $estud_apellidos ?>" required>
                                <input type="hidden" class="form-control" id="id" name="id" value="<?= $estud_id ?>">
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email" value="<?= $estud_email ?>" required>
                                <input type="hidden" class="form-control" id="id" name="id" value="<?= $estud_id ?>">
                            </div>

                            <div class="form-group">
                                <label for="telefono">Telefono</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" value="<?= $estud_telefono ?>" required>
                                <input type="hidden" class="form-control" id="id" name="id" value="<?= $estud_id ?>">
                            </div>

                            <div class="form-group">
                                <label for="direccion">Direccion</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" value="<?= $estud_direccion ?>" required>
                                <input type="hidden" class="form-control" id="id" name="id" value="<?= $estud_id ?>">
                            </div>

                            <div class="form-group">
                                <label for="universidad">Universidad</label>
                                <input type="text" class="form-control" id="universidad" name="universidad" value="<?= $estud_universidad ?>" required>
                                <input type="hidden" class="form-control" id="id" name="id" value="<?= $estud_id ?>">
                            </div>

                            <div class="form-group">
                                <label for="carrera">Carrera</label>
                                <input type="text" class="form-control" id="carrera" name="carrera" value="<?= $estud_carrera ?>" required>
                                <input type="hidden" class="form-control" id="id" name="id" value="<?= $estud_id ?>">
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </form>     
                    </div>
                </div>
            </div>
        </div>
    <div>

    <script src="../../js/javascript.js" ></script>
    <script src="../../bootstrap/js/bootstrap.bundle.min.js" ></script>
</body>
</html>