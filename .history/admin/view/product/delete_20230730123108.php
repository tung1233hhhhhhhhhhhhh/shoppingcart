<?php
    require '../../database.php';
?>

<!DOCTYPE html>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
	
    $sql =$conn->query("DELETE * from product WHERE id='".$id."'");
    $sql->execute();

	header("location: index.php");
    
}
?>

