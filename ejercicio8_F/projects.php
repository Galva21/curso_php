<?php include('header.php') ?>
<?php include('connection.php') ?>
<?php

if ($_POST) {
    $name = $_POST['name'];
    $description = $_POST['description'];

    $date = new DateTime();
    $image = $date->getTimestamp() . "_" . $_FILES['image']['name'];
    $imageTemp = $_FILES['image']['tmp_name'];
    move_uploaded_file($imageTemp, "images/".$image);

    $objConnection = new ConnectionMySql();
    $sql = "INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL, '$name', '$image', '$description');";
    $objConnection->executeQuery($sql);
    header("location:projects.php");
}

if ($_GET) {
    $id = $_GET['borrar'];

    $objConnection = new ConnectionMySql();
    $image = $objConnection->consultQuery("SELECT imagen FROM `proyectos` WHERE id=" . $_GET['borrar'] );
    unlink("images/".$image[0]['imagen']);  
    $sql = "DELETE FROM `proyectos` WHERE `proyectos`.`id` = $id";
    $objConnection->executeQuery($sql);
    header("location:projects.php");
}

$objConnection = new ConnectionMySql();
$sql = "SELECT * FROM `proyectos`";
$result = $objConnection->consultQuery($sql);

?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Resgister your project</div>
                <div class="card-body">
                    <form action="projects.php" method="post" enctype="multipart/form-data">
                        Name: <input require type="text" name="name" class="form-control"><br />
                        Image: <input require type="file" name="image" class="form-control"><br />
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea require class="form-control" name="description" id="description" rows="3"></textarea>
                        </div>
                        <input type="submit" value="Send" class="btn btn-success">
                    </form>
                </div>
                <div class="card-footer text-muted"></div>
            </div>
        </div>

        <div class="col-md-6">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($result as $project) { ?>
                    <tr>
                        <td><?php echo $project['id']; ?></td>
                        <td><?php echo $project['nombre']; ?></td>
                        <td>
                            <img width="100" src="images/<?php echo $project['imagen'];?>"
                                class="img-fluid" alt="">
                        </td>
                        <td><?php echo $project['descripcion']; ?></td>
                        <td><a name="" id="" class="btn btn-danger"
                                href="?borrar=<?php echo $project['id']; ?>">Delete</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>
</div>

<?php include('footer.php') ?>