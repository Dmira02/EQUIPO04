
<?php 
include("/xampp/htdocs/EQUIPO04/Modelo/conexion.php");


$stm=$conexion->prepare("SELECT * FROM productos");
$stm->execute();
$contactos=$stm->fetchAll(PDO::FETCH_ASSOC);

if(isset($_GET['codigo'])){

$txtcodigo=(isset($_GET['codigo'])?$_GET['codigo']:"");
$stm=$conexion->prepare("DELETE FROM productos where codigo=:txtcodigo"); 
$stm->bindParam(":txtcodigo",$txtcodigo);
$stm->execute();
header("location:index.php");

}
?>

<?php include("/xampp/htdocs/EQUIPO04/Vista/header.php"); ?>


<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
Nuevo
</button><br></br>



<div class="table-responsive">
    <table class="table">
        <thead class=" table table-dark">
            <tr>
                <th scope="col">Codigo</th>
                <th scope="col">Producto</th>
                <th scope="col">Categoria</th>
                <th scope="col">Stock</th>
                <th scope="col">Precio</th>
                <th scope="col">Accciones</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach($contactos as $contacto){ ?> 
            
            <tr class="">
                <td scope="row"><?php echo $contacto['codigo']; ?></td>
                <td><?php echo $contacto['producto']; ?></td>
                <td><?php echo $contacto['categoria']; ?></td>
                <td><?php echo $contacto['stock']; ?></td>
                <td><?php echo $contacto['precio']; ?></td>
                <td>
                <a href="./Controlador/edit.php?codigo=<?php echo $contacto['codigo']; ?>" class="btn btn-success">Editar</a>
                <a href="index.php?codigo=<?php echo $contacto['codigo']; ?>" class="btn btn-danger">Eliminar</a>
                </td>
                
            </tr>
          <?php } ?> 
        </tbody>
    </table>
    <a href="./Vista/pedido.html" class="btn btn-info">Enviar Sugerencias</a>

</div>
<?php include("/xampp/htdocs/EQUIPO04/Controlador/create.php")?>



<?php include("/xampp/htdocs/EQUIPO04/Vista/footer.php"); ?>