<?php 

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        require 'database.php';

        $sql = " delete from NEWS WHERE News_ID";
    }

?>