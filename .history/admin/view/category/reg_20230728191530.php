<?php
include '../../admin/database.php';
?>


<?php
if (isset($_POST['btn-reg'])) {
    $name = $_POST['name'];
    $mota = $_POST['mota'];
    if (!empty($name)) {
        $stmt = $conn->prepare("SELECT COUNT(*) as count FROM category WHERE name_category = :name");
        $stmt->bindParam(':name', $name);
        try {
            $stmt->execute();
            $result = $stmt->fetch();
            if ($result['count'] > 0) {
                echo "Tên Danh Mục Đã Tồn Tại";
            } else {
                $stmt = $conn->prepare("INSERT INTO category (name_category, mota) VALUES (:name, :mota)");
                $stmt->bindParam(':name', $name);
                $stmt->bindParam(':mota', $mota);
                try {
                    $stmt->execute();
                   header('Location: /index.php');
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
