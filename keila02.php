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
    
            <title>Keila Zeret Hernández León</title>
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
            
            <div class="container">
                <h1 style="font-family:'Apes On Parade', sans-serif; color: black">Studio Ghibli</h1>

                <style>
                    body{
                            background-color: rgb(255, 225, 209);
                        }
                        h1{
                            text-align: center;
                            color: #ecf39e;
                            margin-bottom: 20px;
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
                            background-color: rgba(13, 142, 178, 0.58);
                            color: white;
                        }
                    </style>

                <?php 
                $username = "root";
                $password = "";
                $servername = "localhost";
                $database = "ghibli";

                $conexion = new mysqli( $servername,$username, $password, $database);
                if ($conexion->connect_error) {
                    die("Conexion Fallida: " . $conexion->connect_error);
                }
                $sql = "SELECT * FROM peliculas"; //aqui agregan el nombre de la tabla que estan usando, en mi caso fue nfleast//
                $resultado = $conexion-> query($sql);
                if($resultado->num_rows >0){
                    echo "<table>";
                    echo "<tr><th>Id</th><th>Pelicula</th><th>Año</th><th>Subgenero</th><th>Calificacion</th><th>Clasificacion</th></tr>";
                    while($row = $resultado->fetch_assoc()){
                        echo "<tr><td>" . $row ["Id"] . "</td><td>" . $row ["Pelicula"] . "</td><td>" . $row ["Año"] . "</td><td>" . $row ["Subgenero"] . "</td><td>" . $row ["Calificacion"] . "</td><td>" . $row ["Clasificacion"] . "</td></tr>";
                    }
                    echo "</table>";
                }else{
                    echo "No se encontraron registros en la base de datos";
                }
                $conexion->close();
                ?>

                    
                    
            </div>
        </body>
    </html>
