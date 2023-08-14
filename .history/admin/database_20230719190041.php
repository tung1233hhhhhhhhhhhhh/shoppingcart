<?php
$dsn = "mysql:host=localhost; dbname = website";
$user = "root";
$pass = "111111";

try {
    $db = new PDO($dsn,$user,$pass);
} catch (Exception $ex) {
}

?>