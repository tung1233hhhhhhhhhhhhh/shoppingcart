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

    $image = $_FILES['file']['name'];
    $linkup="../../uploads/";
    move_uploaded_file($_FILES['file']['tmp_name'], $linkup.$image);

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
