<?php
    require '../../database.php';
?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->

<?php
    

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $stmt = $conn->prepare("SELECT * FROM category WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $rs = $stmt->fetch();

        if (isset($_POST['edit'])) {
            $name = $_POST['name'];
            $mota = $_POST['mota'];

            $stmt1 = $conn->prepare("SELECT COUNT(*) as count FROM category WHERE name_category = :name");
            $stmt1->bindParam(':name', $name);

        try {
            $stmt1->execute();
            $result = $stmt1->fetch();
            if ($result['count'] > 0) {
                echo "Tên Danh Mục Đã Tồn Tại";
            }else{
                $stmt = $conn->prepare("UPDATE category SET name_category = :name, mota = :mota WHERE id = :id");
                $stmt->bindParam(':name', $name);
                $stmt->bindParam(':mota', $mota);
                $stmt->bindParam(':id', $id); // Thêm binding parameter cho id
                try {
                    $stmt->execute();
                } catch (\Throwable $th) {
                    echo "Error: " . $th->getMessage();
                }
                header("Location: index.php");
                exit(); 
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
        }
    }
?>


<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Starter</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->

  <!-- <link rel="stylesheet" href="../public/adminlte/plugins/fontawesome-free/css/all.min.css"> -->
  <!-- <link rel="stylesheet" href="../../public/adminlte/plugins/fontawesome-free/css/all.min.css"> -->
  <!-- <link rel="stylesheet" href="/../admin/public/adminlte/plugins/fontawesome-free/css/all.min.css"> -->
  <link rel="stylesheet" href="../../public/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../public/adminlte/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <?php
  include '../layout/header.php';
  $path=['path1'=>'../..'];
  extract($path);
  include '../layout/slideber.php';
  ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <?php
      $params = ['name' => 'Category', 'key' => 'Edit','path'=>'./index.php'];
      extract($params);
      include '../layout/content-header.php';
    ?>
    <!-- /.content-header -->



    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
          <form method="post" >
            <div class="form-group">
                <label for="exampleInputEmail1">Name category</label>
                <input type="text" name="name" class="form-control w-25" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" >
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <textarea name="mota" id="" class="form-control w-25" ></textarea>
            </div>
            <button type="submit" name="edit"  class="btn btn-primary">Submit</button>
        </form>
          </div>
        </div>
      </div>
    </div>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <?php
include '../layout/footer.php';
  ?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../../public/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../public/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../public/adminlte/dist/js/adminlte.min.js"></script>
</body>
</html>
