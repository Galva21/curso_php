<?php 
$archivo = 'text.txt';

if(isset($_GET['archivo'])){
    $archivo = $_GET['archivo'];

    if($_GET['accion'] == 'Guardar'){
        file_put_contents($archivo, $_GET['texto']);
    }

}
$texto = file_get_contents($archivo);

?>

<h1>Editar archivo de texto</h1>

<form>

<label for="">nombre del archivo: </label>
<input type="text" name="archivo" value="<?=$archivo?>">

<br><br>

<textarea name="texto" id="" cols="30" rows="10"><?=$texto?></textarea>

<input type="submit" value="Guardar" name="accion">
<input type="submit" value="Cargar" name="accion">

</form>