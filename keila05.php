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
                    background-color: skyblue;
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
                            border: 1.5px solid black;
                        }
                        tr:nth-child(even){
                            background-color: white;
                            color: black;
                        }
                        tr:nth-child(odd){
                            background-color: peachpuff;
                            color: black;
                        }
                        th{
                            background-color: pink; <!-- ese es el color de antes 84c047-->
                            color: white;
                        }
            </style>
            
            <div class="jumbotron" style="background-color: rgb(255,225,205);">
            <h1 class="display-4" style="font-family:'Apes On Parade',sans-serif; font-size: 40px ; color: black;">PAGINA DE MOSTRAR DATOS RELACIONADOS</h1>

            <div class="container1">
            <form method="POST" id="formulario"> <!--Agregue el id a los de aqui-->
                <label for="numero_control">Numero de control:</label>
                <input type="text" id="numero_control" name="numero_control" required><br>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required><br>
                <label for="apellido_paterno">Apellido paterno:</label>
                <input type="text" id="apellido_paterno" name="apellido_paterno" required><br>
                <label for="apellido_materno">Apellido materno:</label>
                <input type="text" id="apellido_materno" name="apellido_materno" required><br>
                <label for="id_edad">Edad:</label>
                <input type="number" id="id_edad" name="id_edad" required><br>
                <label for="id_colonia">Colonia:</label>
                <input type="text" id="id_colonia" name="id_colonia" required><br>
                <label for="id_especialidad">Especialidad:</label>
                <input type="text" id="id_especialidad" name="id_especialidad" required><br>
                <label for="id_genero">Genero:</label>
                <input type="text" id="id_genero" name="id_genero" required><br>
                <label for="correo">Correo:</label>
                <input type="text" id="correo" name="correo" required><br>
                <label for="telefono">Telefono:</label>
                <input type="text" id="telefono" name="telefono" required><br>
                <label for="fecha_ingreso">Fecha ingreso:</label>
                <input type="date" id="fecha_ingreso" name="fecha_ingreso" required><br>
                
                <input type="submit" value="Agregar Registro">
            </form>
            </div>  
        
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
                function insertarAlumno($conexion) //agrego esto, el jueves-------------------------------------------------------------
                {
                    if($_SERVER["REQUEST_METHOD"]=="POST"){
                        var_dump($_POST);//nueva linea, el de aqui
                        //Se obtienen los datos del formulario
                        $numero_control = $conexion->real_escape_string ($_POST["numero_control"]); //tal cual aparece en subase de datos lo que va en comillas
                        $nombre = $conexion->real_escape_string ($_POST["nombre"]);
                        $apellido_paterno = $conexion->real_escape_string ($_POST["apellido_paterno"]);
                        $apellido_materno = $conexion->real_escape_string ($_POST["apellido_materno"]);
                        $id_edad = $conexion->real_escape_string ($_POST["id_edad"]);
                        $id_colonia = $conexion->real_escape_string ($_POST["id_colonia"]);
                        $id_especialidad = $conexion->real_escape_string ($_POST["id_especialidad"]);
                        $id_genero = $conexion->real_escape_string ($_POST["id_genero"]);
                        $correo = $conexion->real_escape_string ($_POST["correo"]);
                        $telefono = $conexion->real_escape_string ($_POST["telefono"]);
                        $fecha_ingreso = $conexion->real_escape_string ($_POST["fecha_ingreso"]);
                        
                        $sql = "INSERT INTO alumnos (numero_control, nombre, apellido_paterno, apellido_materno, id_edad, id_colonia, id_especialidad, id_genero, correo, telefono, fecha_ingreso) 
                        VALUES ('$numero_control', '$nombre', '$apellido_paterno', '$apellido_materno', '$id_edad', '$id_colonia', '$id_especialidad', '$id_genero', '$correo', '$telefono', '$fecha_ingreso')";

                        if($conexion->query($sql)==TRUE){
                            echo "<p class='success'> Nuevo alumno agregado con exito. </p>"; 
                            header ("Location: " . $_SERVER['PHP_SELF']);
                            exit();//nuevas 2 filas
                        }else{
                            echo "<p class='error'>Error al agregar al alumno:" . $conexion->error . "</p>";
                        }
                    }
                }

                insertarAlumno($conexion);
                //Mostrar datos de la tabla
                $sql="SELECT * FROM alumnos";
                $resultado = $conexion -> query ($sql);

                if ($resultado-> num_rows >0){
                    echo "<table class='table table-bordered'>";
                    echo "<tr><th>Número de control</th><th>Nombre</th><th>Apellido paterno</th><th>Apellido materno</th><th>Edad</th><th>Colonia</th><th>Especialidad</th><th>Géneros</th><th>Correo</th><th>Teléfono</th><th>Fecha de Ingreso</th></tr>";
                    while($row = $resultado->fetch_assoc()){
                        echo "<tr>
                        <td>" . $row ["numero_control"] . "</td>
                        <td>" . $row ["nombre"] . "</td>
                        <td>" . $row ["apellido_paterno"] . "</td>
                        <td>" . $row ["apellido_materno"] . "</td>
                        <td>" . $row ["id_edad"] . "</td>
                        <td>" . $row ["id_colonia"] . "</td>
                        <td>" . $row ["id_especialidad"] . "</td>
                        <td>" . $row ["id_genero"] . "</td>
                        <td>" . $row ["correo"] . "</td>
                        <td>" . $row ["telefono"] . "</td>
                        <td>" . $row ["fecha_ingreso"] . "</td>
                        </tr>";
                    }
                    echo "</table>";
                } else {
                    echo "<p>No se encontraron registros en la base de datos. </p>";
                }
                        $conexion-> close ();
                ?>

                        </div>
                    </div>
             </table><!--este y div no lo tiene el profe-->
        </body>
    </html>