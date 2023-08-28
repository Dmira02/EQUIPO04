<?php 
$servidor="localhost";
$db="db_productos";
$username="root";
$password="";
try {
    $conexion=new PDO("mysql:host=$servidor;dbname=$db", $username, $password);
   
} catch (Exception $e) {
    echo $e->getMessage();
    
}


?>