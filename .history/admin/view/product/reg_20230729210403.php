<?php
include '../../database.php';

if (isset($_POST['btn-reg'])) {
    $name = $_POST['name'];
    $mota = $_POST['mota'];
    $soluong = $_POST['soluong'];
    $price = $_POST['price'];
    $danhmuc = $_POST['danhmuc'];

    // Kiểm tra xem người dùng đã chọn hình ảnh chưa
    if (!empty($_FILES['img']['name'])) {
        $img = $_FILES['img']['name'];
        $target_dir = "../uploads/";
        $target_file = $target_dir . basename($_FILES["img"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Kiểm tra kiểu hình ảnh cho phép
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Di chuyển hình ảnh tải lên đến thư mục đích
        if ($uploadOk) {
            if (move_uploaded_file($_FILES['img']['tmp_name'], $target_file)) {
                // Tiến hành thêm dữ liệu vào cơ sở dữ liệu
                try {
                    $stmt = $conn->prepare("SELECT COUNT(*) as count FROM product WHERE name_sp = :name");
                    $stmt->bindParam(':name', $name);
                    $stmt->execute();
                    $result = $stmt->fetch();

                    if ($result['count'] > 0) {
                        echo "Tên sản phẩm Đã Tồn Tại";
                    } else {
                        $stmt = $conn->prepare("INSERT INTO product (name_sp, soluong, price, mota, img, category_id) VALUES (:name, :soluong, :price, :mota, :img, :category_id)");
                        $stmt->bindParam(':name', $name);
                        $stmt->bindParam(':soluong', $soluong);
                        $stmt->bindParam(':price', $price);
                        $stmt->bindParam(':mota', $mota);
                        $stmt->bindParam(':img', $img);
                        $stmt->bindParam(':category_id', $danhmuc);
                        $stmt->execute();

                        header('Location: index.php');
                        exit;
                    }
                } catch (PDOException $e) {
                    // Handle the exception here, if needed.
                    echo "Error: " . $e->getMessage();
                }
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        echo "Please select an image.";
    }
}
?>
