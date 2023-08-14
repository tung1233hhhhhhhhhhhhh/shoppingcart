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
    $sql="SELECT * FROM website WHERE id='".$id."'";
    $result=$db->query($sql);
    $rs=$result->fetch();

    if (isset($_POST['edit'])) {
        $idnew=$_POST['id'];
        $title = $_POST['title'];
        $intro = $_POST['intro'];
        if($_FILES['file']['name']!=''){
        $image = $_FILES['file']['name'];
        $linkup = "images/";
        move_uploaded_file($_FILES['file']['tmp_name'], $linkup . $image);
        }  else {
            $image=$_POST['img_old'];
        }


        $hot_news = $_POST['hot_news'];
        $cate_ID = $_POST['cate_ID'];


        require 'database.php';
        $sql1="UPDATE news SET title='" . $title . "', intro='" . $intro . "', image='" . $image . "', hot_news='" . $hot_news . "', cate_ID='" . $cate_ID . "' WHERE News_ID='$idnew'";
        $result1 = $db->exec($sql1);
        

        
        header("location: new_view.php");
    }
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
        <h3>Edit News</h3>
        <form method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $rs['id'] ?>"/>
            <input type="hidden" name="img_old" value="<?php echo $rs['image'] ?>"/>
            <label>Name-sanpham</label>
            <input type="text" value="<?php echo $rs['name_sp'] ?>" name="nameSp" required/>
            <br>
            <label>soluong</label>
            <input name="soluong"><?php echo $rs['soluong'] ?></input>
            <br>
            <label>Imgae</label>
            <input type="file" name="file"/><img src="uploads/<?php echo $rs['img'] ?>"/>
            <br>
            <label>Hot News</label>
            <select name="hot_news">
                <?php echo $rs['hot_news'] ?>
                <?php if($rs['hot_news']=='0'){?>
                <option value="0">Yes</option>
                <option value="1">No</option>
                <?php }  else {?>
                <option value="1">No</option>
                <option value="0">Yes</option>
                <?php }?>
            </select>
            <br>
            <label>Cate ID</label>
            <select name="cate_ID">
                <?php echo $rs['cate_ID'] ?>
                <?php if($rs['cate_ID']=='1'){?>
                <option value="1">Education</option>
                <option value="2">Car</option>
                <?php }  else {?>
                <option value="2">Car</option>
                <option value="1">Education</option>
                
                <?php }?>
            </select>
            <br>
            <input type="submit" name="edit" value="EDIT"/>


        </form>
    </body>
</html>
