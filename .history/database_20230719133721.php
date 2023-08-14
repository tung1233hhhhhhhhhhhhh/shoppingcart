<?php
$dsn = "mysql:host=localhost; dbname = ";
$user = "root";
$pass = "";

try {
    $db = new PDO($dsn,$user,$pass);
} catch (Exception $ex) {

}

?>