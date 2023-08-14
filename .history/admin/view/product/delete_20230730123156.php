<?php
    require '../../database.php';
?>

<!DOCTYPE html>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
	
    $sql =$conn->query("DELETE from product WHERE id='".$id."'");
    try {
        $sql->execute();
	header("location: index.php");

    } catch (\Throwable $th) {
        //throw $th;
    }

    
}
?>

