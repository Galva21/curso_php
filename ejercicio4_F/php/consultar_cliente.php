<?php
    //http://localhost/php_curso/ejercicio4/php/consultar_cliente.php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "sistema_curso_php";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);
    //query read
    $id = $_GET['id'];
    $sql = "SELECT * FROM `clientes` WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    $clientes = array();
    while($row = mysqli_fetch_array($result)){
        array_push($clientes, $row);
    }

    echo json_encode($clientes);

    mysqli_close($conn);
?>