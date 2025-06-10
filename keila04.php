<?php
 ob_start();
?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="style.css">
    
            <title>RELACIONES</title>
        </head>
        <body>
        <link href="https://fonts.cdnfonts.com/css/apes-on-parade" rel="stylesheet"> 
        <link href="https://fonts.cdnfonts.com/css/ningst-sparkle" rel="stylesheet">
            <nav class="navbar navbar-ligth" style="background-color: #84c047;">
            <div class="container">
                <a class="navbar-brand" href="index.html" style="color:#ecf39e;">Inicio</a>
                <!--boton de inicio que lleva a si mismo, de color blanco-->
                <!--a continuación es el menú drowdownd para poner las ligas a las prácticas -->
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="nav navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="./index.html" id="navbarNavDropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #ecf39e;">Parcial 1</a>
                            <!--Lo que sigue son los menos que se va a desplegar hacia abajo, cada uno tendra el nombre de su práctica, ejemplo, práctica 1 se llamara su nombre+el numero de la practica xx terminando con HTML-->
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="keila01.php" style="color: #000;">Tabla 1</a><br>
                                <a class="dropdown-item" href="keila02.php" style="color: #000;">Tabla 2</a><br>
                                <a class="dropdown-item" href="keila03.php" style="color: #000;">Ingresar datos</a><br>
                            <a class="dropdown-item" href="keila04.php" style="color: #000;">Datos relacionados</a><br>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarNavDropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #ecf39e;">Parcial 2</a>
                            <!--Lo que sigue son los menos que se va a desplegar hacia abajo, cada uno tendra el nombre de su práctica, ejemplo, práctica 1 se llamara su nombre+el numero de la practica xx terminando con HTML-->
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="keila05.php" style="color: #000;">Registrar alumno</a><br>
                                <a class="dropdown-item" href="keila05a.php" style="color: #000;">Registrar alumno 2</a><br>
                                <a class="dropdown-item" href="zeret01.php" style="color: #000;">Productos</a><br>
                                <a class="dropdown-item" href="pag.php" style="color: #000;">Proyecto primavera</a><br>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarNavDropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #ecf39e;">Parcial 3</a>
                            <!--Lo que sigue son los menos que se va a desplegar hacia abajo, cada uno tendra el nombre de su práctica, ejemplo, práctica 1 se llamara su nombre+el numero de la practica xx terminando con HTML-->
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="keila06.html" style="color: #000;">Pokedex</a><br>
                                <a class="dropdown-item" href="keila07.html" style="color: #000;">Peliculas API</a><br>
                                <a class="dropdown-item" href="keila08.html" style="color: #000;">DragonBall API</a><br>
                                <a class="dropdown-item" href="keila09.html" style="color: #000;">Final</a><br>
                            </div>
                        </li>
                </ul>
                </div>
            </div>
            </nav>

            <style>
                body{
                    background-color:rgb(255, 225, 209);
                }
                h1{
                    font-family:'Apes On Parade', sans-serif;
                    text-align: center;
                    color: #0d8eb2;
                    margin-bottom: 15px;  
                } 
                <!--No uso ahora este, sino el de abajo-->
                h2{
                    font-family:'Apes On Parade', sans-serif;
                    text-align: center;
                    color: white;
                    margin-bottom: 15px; 
                }
                .jumbotron{
                    margin: 1.5%;
                    align-items: center;
                    background-color: white;
                }
                
                table{
                            width:100%;
                            border-collapse: collapse;
                            margin-top: 50px;
                            border-radius: 50px;
                        }
                        th, td{
                            padding: 10px;
                            text-align:left;
                            border-bottom: 1px solid #ddd;
                            border: 1.5px solid black;
                        }
                        tr:nth-child(even){
                            background-color: pink;
                            color: black;
                        }
                        tr:nth-child(odd){
                            background-color: white;
                            color: black;
                        }
                        th{
                            background-color: pink; <!-- ese es el color de antes 84c047-->
                            color: white;
                        }
            </style>
            <!--Aqui puso su nombre el profe, pero yo no-->
            <div class="jumbotron">
           <div class="container">
            <h1 class="display-4" style="font-family:'Apes On Parade',sans-serif; font-size: 40px ; color: black">PAGINA DE MOSTRAR DATOS RELACIONADOS</h1>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Numero de control</th>
                        <th>Nombre</th>
                        <th>Apellido paterno</th>
                        <th>Apellido materno</th>
                        <th>Edad</th>
                        <th>Colonia</th>
                        <th>Especialidad</th>
                        <th>Genero</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Fecha de ingreso</th>
                    </tr>
                </thead>
                <!--aqui estaba el table cerrado-->

                <?php
                error_reporting(E_ALL);
                ini_set('display_errors', 1);

                $username = "root";
                $password = "";
                $servername = "localhost";
                $database = "escuela";

                $conexion = new mysqli( $servername,$username, $password, $database);
                if ($conexion->connect_error) {
                    die("Conexion Fallida: " . $conexion->connect_error);
                }
//las que tienen la letra a pertenecen a la tabla principal llamada alumnos
//las demas letras son de esas tabas, como e de edades, la de c de colonias
                $sql = "SELECT 
                a.numero_control,
                a.nombre,
                a.apellido_paterno,
                a.apellido_materno,
                e.edad,
                c.nombre_colonias,
                es.nombre_especialidad,
                g.nombre_genero,
                a.correo,
                a.telefono,
                a.fecha_ingreso
                FROM alumnos a
                JOIN edades e ON a.id_edad = e.id
                JOIN colonias c ON a.id_colonia = c.id
                JOIN especialidades es ON a.id_especialidad = es.id
                JOIN generos g ON a.id_genero = g.id";
                //edades,colonias,especialidades, generos es el nombre de la tabla, lo de id_edad, colonia, especialidad,genero, es el nombre de la columna
                
                $resultado = $conexion -> query ($sql);

                            if ($resultado-> num_rows >0){
                                
                                while($row = $resultado->fetch_assoc()){
                                    echo "<tr>
                                    <td>{$row['numero_control']}</td>
                                    <td>{$row['nombre']}</td>
                                    <td>{$row['apellido_paterno']}</td>
                                    <td>{$row['apellido_materno']}</td>
                                    <td>{$row['edad']}</td>
                                    <td>{$row['nombre_colonias']}</td>
                                    <td>{$row['nombre_especialidad']}</td>
                                    <td>{$row['nombre_genero']}</td>
                                    <td>{$row['correo']}</td>
                                    <td>{$row['telefono']}</td>
                                    <td>{$row['fecha_ingreso']}</td>
                                    </tr>";
                                }
                        }else{
                            echo "<p>No se encontraron registros en la base de datos. </p>";
                        }
                        $conexion-> close ();
                        ?>
                        </div>
                    </div>
             </table><!--este y div no lo tiene el profe-->
        </body>
    </html>
