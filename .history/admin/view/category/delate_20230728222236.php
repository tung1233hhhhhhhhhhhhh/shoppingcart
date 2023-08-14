<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    require 'database.php';
	$sql = "delete from NEWS WHERE News_ID='".$id."'";

    $result=$db->query($sql);

	header("location: new_view.php");
	$result->close();
}
?>

