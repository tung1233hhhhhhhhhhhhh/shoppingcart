<?php
    require '../../database.php';
?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
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
  include '../layout/slideber.php';
  ?>
  <!-- /.navbar -->


  
  <!-- Main Sidebar Container -->
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <?php
      $params = ['name' => 'Product', 'key' => 'Add','path'=>'./index.php'];
      extract($params);
      include '../layout/content-header.php';
    ?>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
          <form method="post" action="./reg.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Tên Sản Phẩm</label>
                <input type="text" name="name" class="form-control w-25" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập tên sản phẩm" >
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Số Lượng sản phẩm</label>
                <input type="text" name="soluong" class="form-control w-25" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập số lượng" >
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Giá sản phẩm</label>
                <input type="number" name="price" class="form-control w-25" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập giá sản phẩm" >
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Mô tả Sản phẩm</label>
                <textarea name="mota" id="" class="form-control w-25" ></textarea>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Ảnh sản phẩm</label>
                <input type="file" name="imgupload" class="form-control w-25" style="border:none;" id="exampleInputEmail1" aria-describedby="emailHelp"  >
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Tên danh mục </label>
                <select class="form-select form-control w-25 " aria-label="Default select example" name="danhmuc">
                    <option selected>Open this select menu</option>

                    <?php

                    $sql =$conn->query("SELECT * FROM category");
                    $sql->execute();
                        while ($row=$sql->fetch()) {
                        ?>
                            <option value='<?php echo $row['id']?>'><?php echo $row['name_category'] ?></option>
                           
                       <?php }
                    ?>
                </select>
            </div>
            <button type="submit" name="btn-reg"  class="btn btn-primary">Submit</button>
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
