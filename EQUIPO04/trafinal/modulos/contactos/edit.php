<?php 
include("../../conexion.php");

if(isset($_GET['codigo'])){
    $txtcodigo = isset($_GET['codigo']) ? $_GET['codigo'] : "";
    $stm = $conexion->prepare("SELECT * FROM productos WHERE codigo = :codigo"); 
    $stm->bindparam(":codigo", $txtcodigo);
    $stm->execute();
    $registro = $stm->fetch(PDO::FETCH_LAZY);
    $codigo = $registro['codigo'];
    $producto = $registro['producto'];
    $categoria = $registro['categoria'];
    $stock = $registro['stock'];
    $precio = $registro['precio'];
}

if ($_POST) {
    $nuevo_codigo = isset($_POST['codigo']) ? $_POST['codigo'] : "";
    $producto = isset($_POST['producto']) ? $_POST['producto'] : "";
    $categoria = isset($_POST['categoria']) ? $_POST['categoria'] : "";
    $stock = isset($_POST['stock']) ? $_POST['stock'] : "";
    $precio = isset($_POST['precio']) ? $_POST['precio'] : "";

    $stm = $conexion->prepare("UPDATE productos SET codigo = :nuevo_codigo, producto = :producto, categoria = :categoria, stock = :stock, precio = :precio WHERE codigo = :txtcodigo");
    $stm->bindParam(":nuevo_codigo", $nuevo_codigo);
    $stm->bindParam(":producto", $producto);
    $stm->bindParam(":categoria", $categoria);
    $stm->bindParam(":stock", $stock);
    $stm->bindParam(":precio", $precio);
    $stm->bindParam(":txtcodigo", $txtcodigo);
    $stm->execute();

    header("location: index.php");
}
?>

<?php include("../../template/header.php"); ?>

<form action="" method="post">
    <label for="">Código</label>
    <input type="text" class="form-control" name="codigo" value="<?php echo $codigo; ?>">
    <label for="">Producto</label>
    <input type="text" class="form-control" name="producto" value="<?php echo $producto; ?>">
    <label for="">Categoría</label>
    <input type="text" class="form-control" name="categoria" value="<?php echo $categoria; ?>">
    <label for="">Stock</label>
    <input type="text" class="form-control" name="stock" value="<?php echo $stock; ?>">
    <label for="">Precio</label>
    <input type="text" class="form-control" name="precio" value="<?php echo $precio; ?>">
    
    <div class="modal-footer">
        <a href="index.php" class="btn btn-danger">Cancelar</a>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </div>
</form>

<?php include("../../template/footer.php"); ?>
