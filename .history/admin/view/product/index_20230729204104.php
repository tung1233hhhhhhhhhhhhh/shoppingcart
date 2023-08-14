  <!-- connection database -->

  <?php
    require '../../database.php';
    ?>
    <!--  -->

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
      $params = ['name' => 'Product', 'key' => 'List'];
      extract($params);
      include '../layout/content-header.php';
    ?>
    <!-- /.content-header -->

  



    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 ">
            <a href="./add.php" class="btn btn-success m-2 float-right">ADD</a>
          </div>
        </div>
        <div class="col-md-12">
        <table class="table table-striped">
          <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Giá</th>
                <th scope="col">Mô tả</th>
                <th scope="col">Ảnh</th>
                <th scope="col">Danh Mục</th>
                <th scope="col">Action</th>
            </tr>
          
          </thead>
          <tbody>

         <?php
         $sql = $conn->query("SELECT * FROM product");
         $sql->execute();
         
         // Truy vấn lấy dữ liệu từ bảng "product" kết hợp với bảng "category"
         $sql1 = $conn->query("SELECT product.*, category.name_category FROM product INNER JOIN category ON product.category_id = category.id");
         $sql1->execute();
            $stt=0;
            while ($row = $sql->fetch()) {
                  $row1 = $sql1->fetch();
                    $stt++;
            ?>
                    
                    <tr>
                        <th scope='row'><?php echo $stt ?></th>
                        <td><?php echo $row['name_sp'] ?></td>
                        <td><?php echo $row['soluong'] ?></td>
                        <td><?php echo $row['price'] ?></td>
                        <td><?php echo $row['mota'] ?></td>
                        <td><img src="../../uploads/<?php echo $row['img'] ?>" ></td>
                        <td><?php echo $row1['name_category'] ?></td>
                        <td>
                            <a class= 'btn btn-default ' href='edit.php?id=<?php echo $row['id']?> '>Edit</a>
                            <a class= 'btn btn-danger' onclick="return confirm('Bạn có Chắc Xóa?')" href="delete.php?id=<?php echo $row['id']?> ">Delete</a>
                        </td>
                    </tr>
                   
                <?php }?>
           
          </tbody>
        </table>
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
