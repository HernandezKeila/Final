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
                                <a class="dropdown-item" href="/keilaleon/keila01.php" style="color: #000;">Tabla 1</a><br>
                                <a class="dropdown-item" href="/keilaleon/keila02.php" style="color: #000;">Tabla 2</a><br>
                                <a class="dropdown-item" href="/keilaleon/keila03.php" style="color: #000;">Ingresar datos</a><br>
                                <a class="dropdown-item" href="/keilaleon/keila04.php" style="color: #000;">Datos relacionados</a><br>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarNavDropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #ecf39e;">Parcial 2</a>
                            <!--Lo que sigue son los menos que se va a desplegar hacia abajo, cada uno tendra el nombre de su práctica, ejemplo, práctica 1 se llamara su nombre+el numero de la practica xx terminando con HTML-->
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="/keilaleon/keila05.php" style="color: #000;">Registrar alumno</a><br>
                                <a class="dropdown-item" href="/keilaleon/keila05a.php" style="color: #000;">Registrar alumno 2</a><br>
                                <a class="dropdown-item" href="/keilaleon/zeret01.php" style="color: #000;">Productos</a><br>
                                <a class="dropdown-item" href="/keilaleon/pag.php" style="color: #000;">Proyecto primavera</a><br>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarNavDropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #ecf39e;">Parcial 3</a>
                            <!--Lo que sigue son los menos que se va a desplegar hacia abajo, cada uno tendra el nombre de su práctica, ejemplo, práctica 1 se llamara su nombre+el numero de la practica xx terminando con HTML-->
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="/keilaleon/keila06.html" style="color: #000;">Pokedex</a><br>
                                <a class="dropdown-item" href="/keilaleon/keila07.html" style="color: #000;">Peliculas API</a><br>
                                <a class="dropdown-item" href="/keilaleon/keila08.html" style="color: #000;">DragonBall API</a><br>
                                <a class="dropdown-item" href="/keilaleon/keila09.html" style="color: #000;">Final</a><br>
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
                .container1{
                    margin: 0 auto;
                    justify-content: center;
                    align-items: center;
                    width: 50%;
                    background-color:rgba(13, 142, 178, 0.58);
                    padding: 20px;
                    border-radius: 10px;
                    box-shadow: 0 0 10px rgba(0,0,0,0.2);
                    color: black;
                }
                h1{
                    font-family:'Apes On Parade', sans-serif;
                    text-align: center;
                    color: black;
                    margin-bottom: 15px;  
                }
                h2{
                    font-family:'Apes On Parade', sans-serif;
                    text-align: center;
                    color: white;
                    margin-bottom: 15px; 
                }
                form{
                    display: flex;
                    flex-direction: column;
                }
                label{
                    font-size: 16px;
                    margin-bottom: 5px;
                }
                input[type= "text"] {
                    padding: 8px;
                    margin-bottom: 10px;
                    border: none;
                    border-radius: 5px;
                    font-size: 16px;
                    background-color: white;
                    color: black;
                }
                input [type="submit"]{
                    padding: 10px;
                    background-color: white;
                    border-radius: 5px;
                    cursor: pointer;
                    transition: background 0.3s;
                }
                input[type="submit"]: hover {
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
                            border: 1.5px solid #000;
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
                            background-color: #84c047;
                            color: white;
                        }
            </style>
            
            <h1>Ingresar Datos</h1>

            <div class="container1"> 
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="formulario">
                   <label for="Pelicula">Pelicula</label>
                   <input type="text" id="Pelicula" name="Pelicula" required><br>
                   <label for="Año">Año</label>
                   <input type="text" id="Año" name="Año" required><br>
                   <label for="Subgenero">Subgenero</label>
                   <input type="text" id="Subgenero" name="Subgenero" required><br>
                   <label for="Calificacion">Calificacion</label>
                   <input type="text" id="Calificacion" name="Calificacion" required><br>
                   <label for="Clasificacion">Clasificacion</label>
                   <input type="text" id="Clasificacion" name="Clasificacion" required><br>
                    
                   <input type="submit" value="Agregar registro">
                </form>

                <?php
                $username = "root";
                $password = "";
                $servername = "localhost";
                $database = "ghibli";

                $conexion = new mysqli( $servername,$username, $password, $database);
                if ($conexion->connect_error) {
                    die("Conexion Fallida: " . $conexion->connect_error);
                }

                function insertarpeliculas ($conexion){//nueva linea

                if($_SERVER["REQUEST_METHOD"]=="POST"){
                    var_dump($_POST);//nueva linea
                    //Se obtienen los datos del formulario
                    $Pelicula = $conexion->real_escape_string ($_POST["Pelicula"]); //tal caul aparece en subase de datos lo que va en comillas
                    $Año = $conexion->real_escape_string ($_POST["Año"]);
                    $Subgenero = $conexion->real_escape_string ($_POST["Subgenero"]);
                    $Calificacion = $conexion->real_escape_string ($_POST["Calificacion"]);
                    $Clasificacion = $conexion->real_escape_string ($_POST["Clasificacion"]);
                    
                    $sql = "INSERT INTO peliculas (Pelicula, Año, Subgenero, Calificacion, Clasificacion) VALUES ('$Pelicula', '$Año', '$Subgenero', '$Calificacion', '$Clasificacion')";
                    if($conexion->query($sql)==TRUE){
                        echo "<p class='success'> Nueva pelicula agregada con exito. </p>"; //esto lo quito Ivette
                        header ("Location: " . $_SERVER['PHP_SELF']);
                        exit();//nuevas 2 filas
                    }else{
                        echo "<p class='error'>Error al agregar la pelicula: " . $conexion->error . "</p>";
                    }
                }
            } insertarpeliculas($conexion);
                //mostrar datos de la tabla
                $sql = "SELECT * FROM peliculas ORDER BY id DESC";
                $resultado = $conexion -> query ($sql);
                ?>
                <h2>Registros ingresados</h2>
     
                            <?php 
                            if ($resultado-> num_rows >0){
                                echo "<table class='table table-bordered'>";
                                echo "<tr><th>Id</th><th>Pelicula</th><th>Año</th><th>Subgenero</th><th>Calificacion</th><th>Clasificacion</th></tr>";
                                while($row = $resultado->fetch_assoc()){
                                    echo "<tr><td>" . $row ["Id"] . "</td><td>" . $row ["Pelicula"] . "</td><td>" . $row ["Año"] . "</td><td>" . $row ["Subgenero"] . "</td><td>" . $row ["Calificacion"] . "</td><td>" . $row ["Clasificacion"] . "</td></tr>";
                                }
                        }else{
                            echo "<p>No se encontraron registros en la base de datos. </p>";
                        }
                        $conexion-> close ();
                        ?>
                 </table>
                    </div> 
        </body>
    </html>