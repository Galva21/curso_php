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
    //query insert
    if (isset($_GET['nombre'])) {
        $id=$_GET['id'];
        $nombre=$_GET['nombre'];
        $apellido=$_GET['apellido'];
        $email=$_GET['email'];
        $telefono=$_GET['telefono'];
        $detalle=$_GET['detalle'];

        $sql = "UPDATE `clientes` SET `nombre` = '$nombre', `apellido` = '$apellido', `email` = '$email', `telefono` = '$telefono', `detalle` = '$detalle' WHERE `clientes`.`id` = $id;";
        $query = mysqli_query($conn, $sql);
        if ($query) {
            echo "1 row updated";
        }else{
            echo "error";
        }
    }
    
    mysqli_close($conn);
?>