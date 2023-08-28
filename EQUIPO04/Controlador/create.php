
<?php 
if ($_POST) {
    $producto = isset($_POST['producto']) ? $_POST['producto'] : "";
    $categoria = isset($_POST['categoria']) ? $_POST['categoria'] : "";
    $stock = isset($_POST['stock']) ? $_POST['stock'] : "";
    $precio = isset($_POST['precio']) ? $_POST['precio'] : "";

    $stm = $conexion->prepare("INSERT INTO productos (producto, categoria, stock, precio) VALUES (:producto, :categoria, :stock, :precio)");
    $stm->bindParam(":producto", $producto);
    $stm->bindParam(":categoria", $categoria);
    $stm->bindParam(":stock", $stock);
    $stm->bindParam(":precio", $precio);
    $stm->execute();

    header("location: index.php");
    


}    

?>


<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="post">
      <div class="modal-body">
        <label for="">Producto</label>
        <input type="text" class="form-control" name="producto" value="">
        <label for="">Categoria</label>
        <input type="text" class="form-control" name="categoria" value="">
        <label for="">Stock</label>
        <input type="text" class="form-control" name="stock" value="">
        <label for="">Precio</label>
        <input type="text" class="form-control" name="precio" value="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>