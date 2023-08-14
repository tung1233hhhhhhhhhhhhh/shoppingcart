<?php
    require '../../database.php';
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
	
    $sql =$conn->query("DELETE from category WHERE id='".$id."'");
    $sql->execute();

	header("location: index.php");
    
}
?>

