<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$username = "root";
$password = "";
$servername = "localhost";
$database = "ljh";

$conexion = new mysqli( $servername,$username, $password, $database);
if ($conexion->connect_error) {
    die("Conexion Fallida: " . $conexion->connect_error);
}

//obtener datospara los dropdowns
$sql_distritos = "SELECT id, num_distrito FROM distritos";
$sql_generos = "SELECT id, nombre_genero FROM generos";
$sql_roles = "SELECT id, act_roles FROM roles";

$result_distritos = $conexion->query ($sql_distritos);
$result_generos = $conexion->query ($sql_generos);
$result_roles = $conexion->query ($sql_roles);

//insertar la tabla
if($_SERVER["REQUEST_METHOD"]=="POST"){
    var_dump($_POST);
    $nombre = $conexion->real_escape_string ($_POST["nombre"]);
    $apellido = $conexion->real_escape_string ($_POST["apellido"]);
    $distrito = $conexion->real_escape_string ($_POST["distrito"]);
    $genero = $conexion->real_escape_string ($_POST["genero"]);
    $rol = $conexion->real_escape_string ($_POST["rol"]);
    $habilidad = $conexion->real_escape_string ($_POST["habilidad"]);
    $edad = $conexion->real_escape_string ($_POST["edad"]);
    
    $sql_insert = "INSERT INTO ljdh (nombre, apellido, id_distrito, id_genero, id_rol, habilidad, edad) 
    VALUES ('$nombre', '$apellido', '$distrito', '$genero', '$rol', '$habilidad', '$edad')";

    if($conexion->query($sql_insert)==TRUE){
        echo "<p class='success'> Nuevo personaje agregado con exito. </p>"; 
        header ("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }else{
        echo "<p class='error'>Error al agregar al personaje:" . $conexion->error . "</p>";
    }
}
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
    
            <title>Los juegos del hambre</title>
        </head>
        <body>
        <link href="https://fonts.cdnfonts.com/css/meizury" rel="stylesheet">
        <link href="https://fonts.cdnfonts.com/css/promethean" rel="stylesheet">
                
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
                    background-color:rgba(237, 220, 210, 0.66);
                }
                .container1{
                    margin: 0 auto;
                    justify-content: center;
                    align-items: center;
                    width: 50%;
                    background-color: #8a817c;
                    padding: 20px;
                    border-radius: 10px;
                    box-shadow: 0 0 10px rgba(0,0,0,0.2);
                    color: black;
                }
                h1{
                    font-family: 'Promethean Bold Expanded', sans-serif;
                    text-align: center;
                    color: #941b0c;
                    margin-bottom: 15px;  
                } 
                h2{
                    font-family: 'Promethean Bold Expanded', sans-serif;
                    text-align: center;
                    color: #941b0c;
                    margin-bottom: 30px; 
                }
                p {
                    font-size: 18px;
                    color: black;
                    margin-bottom: 25px;
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

                .card-container{
                    display: flex;
                    justify-content: center;
                    flex-wrap: wrap;
                    margin: top 100px;
                }
                .card{
                    width: 325px;
                    background-color: rgba(0, 0, 0, 0.95);
                    border-radius: 8px;
                    overflow: hidden;
                    box-shadow: 0px 2px 4px rgba(0,0,0,0.2);
                    margin: 20px;
                }
                .card img{
                    width: 100%;
                    height: auto;
                }

                hr {
                    height: 2px;
                    background-color: black;
                }

                select{
                    padding: 10px;
                    margin-bottom: 5px;
                    border: none;
                    border-radius: 5px;
                    width: 100%;
                }
                
                table{
                            width:70%;
                            margin: 50px auto;
                            border-collapse: collapse;
                            margin-top: 50px;
                            border-radius: 50px;
                        }
                        th, td{
                            border: 1px solid #cdcdcd;
                            padding: 10px;
                            text-align:left;
                            border-bottom: 1px solid #ddd;
                        }
                        tr:nth-child(even){
                            background-color: white;
                            color: black;
                        }
                        tr:nth-child(odd){
                            background-color:rgba(167, 31, 36, 0.53);
                            color: black;
                        }
                        th{
                            background-color: #81171B;
                            color: white;
                        }
            </style>
            
            <h1>LOS JUEGOS DEL HAMBRE</h1>
            <p style="text-align:center">"En una oscura versión del futuro próximo, doce chicos y doce chicas se ven obligados a participar en un reality show 
                llamado Los Juegos del Hambre. <br> 
                Sólo hay una regla: matar o morir". "Cuando Katniss Everdeen, una joven de dieciséis años, se presenta voluntaria para ocupar el lugar de su <br>
                hermana en los juegos, lo entiende como una condena a muerte. Sin embargo Katniss ya ha visto la muerte de cerca; y la supervivencia forma <br>
                 parte de su naturaleza." </p>
            <div class="card-container">
                <div class="card">
                    <img src="cap.jpg" alt="libros" >
                </div>
                <div class="card">
                    <img src="todos1.jpg" alt="capitolio" >
                </div>
                <div class="card">
                    <img src="est.jpeg" alt="estatua" >
                </div>
            </div>
            <p style= "text-align:center">En el siguiente formulario podrás poner un personaje de tu preferencia para que posteriormente se muestre en la tabla que se encuentra más <br>
            abajo. El 0 que se encuentra en las opciones del distrito, pertenece al capitolio.</p>

            <div class="container">
            <hr>

            <h1>Ingresa tu personaje</h1>
            <div class="container1">
            <form method="POST" id="formulario"> 
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required><br>
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" required><br>

                <label for="id_distrito">Distrito:</label>
                <select name="distrito" required>
                    <option value="">Seleccione el número de distrito:</option>
                    <?php while ($row = $result_distritos->fetch_assoc()){
                        echo "<option value='" . $row["id"] . "'>" . $row["num_distrito"] . "</option>";
                    } ?>
                </select><br><br>

                <label for="id_genero">Género:</label>
                <select name="genero" required>
                    <option value="">Seleccione un género</option>
                    <?php while ($row = $result_generos->fetch_assoc()){
                        echo "<option value='" . $row["id"] . "'>" . $row["nombre_genero"] . "</option>";
                    } ?>
                </select><br><br>

                <label for="id_rol">Rol:</label>
                <select name="rol" required>
                    <option value="">Seleccione el rol que se cumple</option>
                    <?php while ($row = $result_roles->fetch_assoc()){
                        echo "<option value='" . $row["id"] . "'>" . $row["act_roles"] . "</option>";
                    } ?>
                </select><br><br>

                <label for="habilidad">Habilidad:</label>
                <input type="text" id="habilidad" name="habilidad" required><br>
                <label for="edad">Edad:</label>
                <input type="text" id="edad" name="edad" required><br>
                
                
                <input type="submit" value="Agregar Registro">
            </form>
                </div><br>

                <hr>
            <div class="container2">
            <h2>Tabla de los personajes</h2>
            <table bordered="1"> <!--Se ve en el video border-->
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Distrito</th>
                    <th>Género</th>
                    <th>Rol</th>
                    <th>Habilidad</th>
                    <th>Edad</th>
                </tr>
            <?php
            $sql = "SELECT 
            a.nombre,
            a.apellido,
            d.num_distrito,
            g.nombre_genero,
            r.act_roles,
            a.habilidad,
            a.edad
            FROM ljdh a
            JOIN distritos d ON a.id_distrito = d.id
            JOIN generos g ON a.id_genero = g.id
            JOIN roles r ON a.id_rol = r.id";
            //edades,colonias,especialidades, generos es el nombre de la tabla, lo de id_edad, colonia, especialidad,genero, es el nombre de la columna
                
            $resultado = $conexion -> query ($sql);

            if ($resultado-> num_rows >0){
                
                while($row = $resultado->fetch_assoc()){
                    echo "<tr>
                    <td>{$row['nombre']}</td>
                    <td>{$row['apellido']}</td>
                    <td>{$row['num_distrito']}</td>
                    <td>{$row['nombre_genero']}</td>
                    <td>{$row['act_roles']}</td>
                    <td>{$row['habilidad']}</td>
                    <td>{$row['edad']}</td>
                    </tr>";
                }
        }else{
            echo "<p>No se encontraron registros en la base de datos. </p>";
        }
        $conexion-> close ();
        ?>
        </table>
    </div>
    </div>
    </body>
    </html>
    
