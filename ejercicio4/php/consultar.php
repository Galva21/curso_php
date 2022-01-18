<?php
    //http://localhost/php_curso/ejercicio4/php/consultar.php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "sistema_curso_php";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);
    //query read
    $sql = "SELECT * FROM `clientes`;";
    $result = mysqli_query($conn, $sql);

    $clientes = array();
    while($row = mysqli_fetch_array($result)){
        array_push($clientes, $row);
    }

    echo json_encode($clientes);

    mysqli_close($conn);
?>