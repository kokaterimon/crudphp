<?php
$servidor="127.0.0.1";
$db = "phpcrud";
$username="root";
$password="";

try {
    $conexion = new PDO("mysql:host=$servidor;dbname=$db", $username,$password);    
} catch (Exception $e) {
    echo $e->getMessage();
}

?>