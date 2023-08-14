<?php
include '../../database.php';
?>


<?php
if (isset($_POST['btn-reg'])) {
    $name = $_POST['name'];
    $mota = $_POST['mota'];
    $soluong = $_POST['soluong'];
    $price = $_POST['price'];
    $img = $_POST['img'];
    $danhmuc = $_POST['danhmuc'];

    // $img = $_FILES['img']['name'];
    // $linkup="../../uploads/";
    // move_uploaded_file($_FILES['img']['tmp_name'], $linkup.$img);

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["img"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
          // if everything is ok, try to upload file
          } else {
            if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
              echo "The file ". htmlspecialchars( basename( $_FILES["img"]["name"])). " has been uploaded.";
            } else {
              echo "Sorry, there was an error uploading your file.";
            }
          }
            
        }

    if (!empty($name) && !empty($soluong) && !empty($price) && !empty($danhmuc) && !empty($img)) {
        $stmt = $conn->prepare("SELECT COUNT(*) as count FROM product WHERE name_sp = :name");
        $stmt->bindParam(':name', $name);
        try {
            $stmt->execute();
            $result = $stmt->fetch();
            if ($result['count'] > 0) {
                echo "Tên sản phẩm Đã Tồn Tại";
            } else {
                $stmt = $conn->prepare("INSERT INTO product (name_sp,soluong,price, mota,img,category_id) VALUES (:name,:soluong,:price,:mota,:img,:category_id)");
                $stmt->bindParam(':name', $name);
                $stmt->bindParam(':soluong', $soluong);
                $stmt->bindParam(':price', $price);
                $stmt->bindParam(':mota', $mota);
                $stmt->bindParam(':img', $img);
                $stmt->bindParam(':category_id', $danhmuc);


                try {
                    $stmt->execute();
                   header('Location: index.php');
                   exit;
                } catch (PDOException $e) {
                    // Handle the exception here, if needed.
                }
            }
        } catch (PDOException $e) {
            // Handle the exception here, if needed.
        }
    }
}
?>
