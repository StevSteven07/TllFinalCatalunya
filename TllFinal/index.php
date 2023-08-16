<?php
    session_start();
    include_once("./config/DBConect.php");
    include_once("./config/Config.php");

    $conexion = new Database;
    $sql = "SELECT nombres, universidad FROM estudiantes";
   // $result = $conexion->query($sql);
      

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Estilos CSS -->
    <link rel="stylesheet" type="text/css" href="./css/estilos.css">
    <link rel="stylesheet" type="text/css" href="./css/menu.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>

    <nav>
        <ul class="menu">
            <li class="logo"> 
                <a href="#"> 
                    <img src="./img/u.png"> 
                </a>  
            </li>
            <li> 
                <a href="modulos/estudiantes/estudiantes.php">    
                    Estudiantes  
                </a>  
            </li>
            <li> 
                <a href="modulos/materias/materias.php">    
                    Materias 
                </a>  
            </li>
        </ul>
    </nav>

    <div class="container">
        <header> 
            <h1 class="TTPrincipal"> 
                Todos Nuestros Estudiantes
            </h1>
        </header>

        <!--section class="section-flex">
            <?php
            // Generar artículos con los datos de la tabla estudiantes
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<article class="character">';
                    echo '<header> <h2>' . $row["nombres"] . '</h2> </header>';
                    echo '<img src="./img/Rick.jpeg">';
                    echo '<div class="info-character">';
                    echo '<p> <b> Nombre: </b>' . $row["nombres"] . '</p>';
                    echo '<p> <b> Universidad: </b>' . $row["universidad"] . '</p>';
                    echo '</div>';
                    echo '</article>';
                }
            } else {
                echo "No se encontraron estudiantes.";
            }
            ?>
        </section-->
     
        <section class="section-flex">
            <article class="character">
                <header> <h2> Rick Sanchez</h2>  </header>
                <img src="./img/Rick.jpeg">
                <div class="info-character">
                    <p> <b> Genero: </b> Masculino </p>
                    <p> <b> Especie: </b> Humano </p>
                </div>
            </article>

            <article class="character">
                <header> <h2> Beth </h2>  </header>
                <img src="./img/Beth.jpeg">
                <div class="info-character">
                    <p> <b> Genero: </b> Masculino </p>
                    <p> <b> Especie: </b> Humano </p>
                </div>
            </article>

            <article class="character">
                <header> <h2> Davin </h2>  </header>
                <img src="./img/Davin.jpeg">
                <div class="info-character">
                    <p> <b> Genero: </b> Masculino </p>
                    <p> <b> Especie: </b> Humano </p>
                </div>
            </article>

            <article class="character">
                <header> <h2> Arthricia </h2>  </header>
                <img src="./img/Arthricia.jpeg">
                <div class="info-character">
                    <p> <b> Genero: </b> Masculino </p>
                    <p> <b> Especie: </b> Humano </p>
                </div>
            </article>

            <article class="character">
                <header> <h2> Benjamin </h2>  </header>
                <img src="./img/Benjamin.jpeg">
                <div class="info-character">
                    <p> <b> Genero: </b> Masculino </p>
                    <p> <b> Especie: </b> Humano </p>
                </div>
            </article >

            
        </section-->

    </div>
    

    <script src="./js/javascript.js"></script>

</body>
</html>