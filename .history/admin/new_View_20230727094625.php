<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
     require 'database.php';
    $sql="SELECT * FROM website";
    
    $result=$db->query($sql);
    
    
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
        <h3><a href="add.php">ADD</a></h3>
        <table border="1">
            <tr>
                <th>STT</th>
                <th>Title</th>
                <th>Into</th>
                <th>Imgage</th>
                <th>Hot new</th>
                <th>Cate ID</th>
                <th>Action</th>
            </tr>
            <?php
            $stt=0;
                    while ($rs=$result->fetch()){
                        $stt++;
            ?>
            
            <tr>
                <td><?php echo $stt ?></td>
                <td><?php echo $rs['name_sp'] ?></td>
                <td><?php echo $rs['soluong'] ?></td>
                <td><?php echo $rs['price'] ?></td>
                <td><?php echo $rs['mota'] ?></td>
                <td><img src="images/<?php echo $rs['image'] ?>"></td>
                <td><?php echo $rs['category_id'] ?></td>
                <td><a href="edit.php?id=<?php echo $rs['id'] ?>">Edit</a></td>
				<td><a onclick="return confirm('Ban co chac xoa ko?')" 
                href="delete.php?id=<?php echo $rs['id']?>">
                Delete</a></td>
				
            </tr>
                    <?php }?>
        </table>
    </body>
</html>
