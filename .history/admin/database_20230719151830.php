<?php
$dsn = "mysql:host=localhost; dbname = website";
$user = "root";
$pass = "";

try {
    $db = new PDO($dsn,$user,$pass);
} catch (Exception $ex) {

}

?>