<?php include('header.php') ?>
<?php include('connection.php') ?>
<?php 

$objConnection = new ConnectionMySql();
$sql = "SELECT * FROM `proyectos`";
$result = $objConnection->consultQuery($sql);

?>
<div class="p-5 bg-light">
    <div class="container">
        <h1 class="display-3">Welcome</h1>
        <p class="lead">These are my projects</p>
        <hr class="my-2">
    </div>
</div>

<div class="row">
    <?php foreach ($result as $project) { ?>
    <div class="col-3">
        <div class="card mb-3">
            <img height="300" src="images/<?php echo $project['imagen'];?>" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title"><?php echo $project['nombre'];?></h5>
                <p class="card-text"><?php echo $project['descripcion'];?></p>
            </div>
        </div>
    </div>
    <?php } ?>
</div>

<?php include('footer.php') ?>