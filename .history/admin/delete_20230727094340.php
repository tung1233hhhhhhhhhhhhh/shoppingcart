<!DOCTYPE html>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    require 'database.php';
	$sql = "delete from website WHERE id='".$id."'";

    $result=$db->query($sql);

	header("location: new_view.php");
	$result->close();
}
?>
