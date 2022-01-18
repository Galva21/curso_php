<?php
    //http://localhost/php_curso/ejercicio4/php/agregar.php?nombre=a&apellido=b&email=c&telefono=1&detalle=d
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "sistema_curso_php";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";

    //query insert
    if (isset($_GET['nombre'])) {
        $nombre=$_GET['nombre'];
        $apellido=$_GET['apellido'];
        $email=$_GET['email'];
        $telefono=$_GET['telefono'];
        $detalle=$_GET['detalle'];

        $sql = "INSERT INTO `clientes` (`id`, `nombre`, `apellido`, `email`, `telefono`, `detalle`) VALUES (NULL, '$nombre', '$apellido', '$email', '$telefono', '$detalle');";
        $query = mysqli_query($conn, $sql);
        if ($query) {
            echo "1 row inserted";
        }else{
            echo "error";
        }
    }
    
    mysqli_close($conn);
?>