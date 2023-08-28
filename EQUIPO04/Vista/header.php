<?php 
$url_base="http://localhost/trafinal/"; ?>

<!doctype html>
<html lang="es">

<head>
  <title>Sistema inventarios</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

 <nav class="navbar navbar-expand navbar-dark bg-dark">
     <ul class="nav navbar-nav">
         <li class="nav-item">
             <a class="nav-link active" href="../index.php" aria-current="page">Crud php <span class="visually-hidden">(current)</span></a>
         </li>
         <li class="nav-item">
             <a class="nav-link" href="./Controlador/lista.php"<?php echo $url_base; ?>modulos">Productos</a>
         </li>
     </ul>
 </nav>

<br>
<br>

  <main class="container">