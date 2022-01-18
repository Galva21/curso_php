<?php
    //http://localhost/php_curso/ejercicio4/php/eliminar.php?id=2
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

    //query delete
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM `clientes` WHERE `clientes`.`id` = $id";
        $query = mysqli_query($conn, $sql);
        if ($query) {
            echo "1 row deleted";
        }else{
            echo "error";
        }
    }
    
    mysqli_close($conn);
?>