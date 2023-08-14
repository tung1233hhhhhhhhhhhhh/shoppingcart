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
        $nameSp = $_POST['nameSp'];
        $soluong = $_POST['soluong'];
        if($_FILES['file']['name']!=''){
        $img = $_FILES['file']['name'];
        $linkup = "uploads/";
        move_uploaded_file($_FILES['file']['tmp_name'], $linkup . $img);
        }  else {
            $img=$_POST['img_old'];
        }


        $mota = $_POST['mota'];
        $category_id = $_POST['category_id'];
        $price = $_POST['price'];



        require 'database.php';
        $sql1="UPDATE product SET name_sp='" . $nameSp . "', soluong='" . $soluong . "', price='" . $price . "', img='" . $img . "', category_id='" . $category_id . "' WHERE id='$idnew'";
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
            <label>price</label>
            <input name="price"><?php echo $rs['price'] ?></input>
            <br>
            <label>Imgae</label>
            <input type="file" name="file"/><img src="uploads/<?php echo $rs['img'] ?>"/>
            <br>
            <label>mota</label>
            <textarea name="mota" id="" cols="30" rows="10"><?php echo $rs['mota']?></textarea>
            <br>
            <label>Cate ID</label>
            <select name="cate_ID">
                <?php echo $rs['category_id'] ?>
                <?php if($rs['category_id']=='1'){?>
                <option value="1">ÁO</option>
                <option value="2">Áo khoác</option>
                <option value="3">Quần</option>
                <?php }  else if($rs['category_id']=='2'){?>
                <option value="2">Áo khoác</option>
                <option value="1">ÁO</option>
                <option value="3">Quần</option>
                <?php } else {?>
                    <option value="3">Quần</option>
                    <option value="2">Áo khoác</option>
                    <option value="1">ÁO</option>
                <?php }?>
            </select>
            <br>
            <input type="submit" name="edit" value="EDIT"/>


        </form>
    </body>
</html>
