<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

if (isset($_POST['add'])) {
    $title = $_POST['title'];
    $intro = $_POST['intro'];


    $image = $_FILES['file']['name'];
    $linkup="images/";
    move_uploaded_file($_FILES['file']['tmp_name'], $linkup.$image);

    
    $hot_news = $_POST['hot_news'];
    $cate_ID = $_POST['cate_ID'];
    
    
    require 'database.php';
    $sql1 = "INSERT INTO news VALUES ('', '".$title."', '".$intro."', '".$image."', '".$hot_news."', '".$cate_ID."')";
    $result1 = $db->exec($sql1);
    
    header("location: new_view.php");
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <h3>ADD News</h3>
        <form method="post" enctype="multipart/form-data">
            <label>Title</label>
            <input type="text" name="title" required/>
            <br>
            <label>Intro</label>
            <textarea name="intro"></textarea>
            <br>
            <label>Imgae</label>
            <input type="file" name="file"/>
            <br>
            <label>Hot News</label>
            <select name="hot_news">
                <option value="0">Yes</option>
                <option value="1">No</option>
            </select>
            <br>
            <label>Cate ID</label>
            <select name="cate_ID" size="2">
                <option value="1">Education</option>
                <option value="2">Car</option>
            </select>
            <br>
            <input type="submit" name="add" value="ADD"/>


        </form>
    </body>
</html>
