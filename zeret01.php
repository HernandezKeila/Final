<?php
   $username = "root";
   $password = "";
   $servername = "localhost";
   $database = "kzhl";

   $conexion = new mysqli( $servername,$username, $password, $database);
   if ($conexion->connect_error) {
       die("Conexion Fallida: " . $conexion->connect_error);
   }
//estas lineas van a analizar si el formulario ya ha sido enviado
   if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    $id_categoria = $_POST["categoria"];
    $sql = "INSERT INTO productos (nombre, precio, id_categoria) VALUES ('$nombre', '$precio', '$id_categoria')";
    if ($conexion->query($sql)===TRUE){
        echo "<p style='color: green';>Producto agregado correctamente</p>";
    }else{
        echo "<p style='color: red';>Error:" . $conexion->error . "</p>;";
    }
   }
   //obtener categorias para sacar info de la basede datos para dropdown con la info que se solicita, eso es lo que nos hace falta en la pagina anterior.
   $sql_categorias = "SELECT * FROM categorias"; //categorias es una tabla que hare despues
   $resul_categorias = $conexion->query ($sql_categorias);
?>

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
            
        <title>Pagina alterna de prueba</title>
    </head>
    <body>
    <link href="https://fonts.cdnfonts.com/css/sorean" rel="stylesheet">
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
            background-color: #fbdfa2;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            color: black;
        }
        h1{
            font-family: 'Sorean', sans-serif;
            text-align: center;
            color: #8eb694;
            margin-bottom: 15px;  
        } 
        h2{
            font-family: 'Sorean', sans-serif;
            text-align: center;
            color:  #8eb694;
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
            background-color: skyblue;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }
        input[type="submit"]: hover {
            background-color: white;
        }
                
                table{
                            width:80%;
                            margin: 20px auto;
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
                            background-color: #fbccd4;
                            color: black;
                        }
                        tr:nth-child(odd){
                            background-color: white;
                            color: black;
                        }
                        th{
                            background-color: #fa9da6;
                            color: white;
                        }
    </style>

        <h1> Registrar productos</h1>
        <div class="container1">
        <form method="POST">
            <label>Nombre del producto: </label>
            <input type="text" name="nombre" required><br><br>
            <label>Precio: </label>
            <input type="number" name="precio" required><br><br>
            <label>Categoria: </label>
            <select name="categoria" required>
                <option value="">Seleccionar una categoria</option>
                <?php
                if($resul_categorias->num_rows > 0){
                    while($row = $resul_categorias-> fetch_assoc()){
                        echo "<option value='" . $row["id"] . "'>" . $row["nombre"] . "</option>";
                    }
                }
                ?>
            </select><br><br>
            <input type="submit" value="Agregar producto">
        </form>
            </div>
            <br>

        <h2>Lista de Productos</h2>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Categoria</th>
            </tr>
            <?php
            $sql_productos = "SELECT productos.nombre, productos.precio, categorias.nombre AS categoria FROM productos JOIN categorias ON productos.id_categoria = categorias.id";
            $result_productos = $conexion->query($sql_productos);
            if($result_productos->num_rows>0){
                while($row = $result_productos->fetch_assoc()){
                    echo "<tr>
                    <td>{$row['nombre']}</td>
                    <td>{$row['precio']}</td>
                    <td>{$row['categoria']}</td>
                    </tr>";
                } 
            }else{
                echo "<tr><td>No hay productos resgistrados</td></tr>";
            }
            ?>
        </table>
    </body>
</html>