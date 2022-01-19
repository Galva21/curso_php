<?php include('header.php') ?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Resgister your project</div>
                <div class="card-body">
                    <form action="projects.php" method="post">
                        Name: <input type="text" name="name" class="form-control"><br />
                        Image: <input type="file" name="image" class="form-control"><br />
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
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>App web</td>
                        <td>image.jpg</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>






<?php include('footer.php') ?>