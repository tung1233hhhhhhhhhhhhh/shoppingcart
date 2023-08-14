<?php
session_start();
require '../../admin/database.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Gajraj+One&family=Noto+Sans+Bamum&family=Noto+Sans+Mongolian&family=Oleo+Script:wght@400;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&display=swap"
        rel="stylesheet"/>
        <link rel="stylesheet" href="../../assets/fonts/themify-icons/themify-icons.css"/>
        <link rel="stylesheet" href="../../bootstrap/bootstrap-4.0.0/assets/css/docs.min.css">
        <link rel="stylesheet" href="../../bootstrap/bootstrap-4.0.0/dist/css/bootstrap.css">
        <link rel="stylesheet" href="../../assets/css/home.css"/>
        <link rel="stylesheet" href="./components/css/breadcrumb.css">
        <!-- <link rel="stylesheet" href="./components/css/shoppingcart.css"> -->

</head>

<?php
if (isset($_POST['add-product'])) {

    $id = $_GET['id'];
    $sql = $conn->prepare("SELECT * FROM product WHERE id = :id");
    $sql->bindParam(':id', $id, PDO::PARAM_INT);
    $sql->execute();
    $row = $sql->fetch();

    if (isset($_SESSION['cart'])) {
        $session_array_id = array_column($_SESSION['cart'],"id");
        if (!in_array($id,$session_array_id)) {
            $session_array = array(
                'id' => $id,
                'name'=> $row['name_sp'],
                'price'=>$row['price'],
                'img'=>$row['img'],
                'size'=>$_POST['size'],
                'quantity'=>$_POST['soluong']
            );
    
            $_SESSION['cart'][] =$session_array;
        
        }

    }else{
           

            $session_array = array(
                'id' => $id,
                'name'=> $row['name_sp'],
                'price'=>$row['price'],
                'img'=>$row['img'],
                'size'=>$_POST['size'],
                'quantity'=>$_POST['soluong']
            );
    
            $_SESSION['cart'][] =$session_array;
        

       
    }
}

?>
<body>

<div id="header">
    <div class="container">
    <?php include './components/nav.php';?>
    </div>
</div>

<div class="breadcrumb">
    <ul class="container">
        <li class="text-top">
            <a href="../../index.php">Trang Chủ</a> / Giỏ Hàng
        </li>
        <li class="text-main">Giỏ Hàng</li>
    </ul>   
</div>

<!--  -->
<section class="h-100 h-custom" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card">
          <div class="card-body p-4">

            <div class="row">

              <div class="col-lg-7">
                <h5 class="mb-3"><a href="#!" class="text-body"><i
                      class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping</a></h5>
                <hr>

                <div class="d-flex justify-content-between align-items-center mb-4">
                  <div>
                    <p class="mb-1">Shopping cart</p>
                    <p class="mb-0">You have 4 items in your cart</p>
                  </div>
                  <div>
                    <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!"
                        class="text-body">price <i class="fas fa-angle-down mt-1"></i></a></p>
                  </div>
                </div>
                <!--  -->

                <?php
if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
        ?>
        <div class="card mb-3">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="d-flex flex-row align-items-center">
                        <div>
                            <img src="../../admin/view/uploads/<?php echo $value['img']; ?>"
                                 class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                        </div>
                        <div class="ms-3">
                            <h5><?php echo $value['name']; ?></h5>
                        </div>
                    </div>
                    <div class="d-flex flex-row align-items-center">
                        <div style="width: 50px;">
                            <h5 class="fw-normal mb-0"><?php echo $value['quantity']; ?></h5>
                        </div>
                        <div style="width: 80px;">
                            <h5 class="mb-0"><?php echo $value['price']; ?></h5>
                        </div>
                        <a href="#!" style="color: #cecece;"><i class="ti-trash"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
?>

                   
               
                <!--  -->
              </div>
              <!--  -->
              <div class="col-lg-5">

                <div class="card bg-primary text-white rounded-3">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                      <h5 class="mb-0">Card details</h5>
                    </div>

                    <form class="mt-4">
                      <div class="form-outline form-white mb-4">
                        <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
                          placeholder="Cardholder's Name" />
                        <label class="form-label" for="typeName">Cardholder's Name</label>
                      </div>

                      <div class="form-outline form-white mb-4">
                        <input type="text" id="typeText" class="form-control form-control-lg" siez="17"
                          placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" />
                        <label class="form-label" for="typeText">Card Number</label>
                      </div>

                    
                      <div class="form-outline form-white mb-4">
                        <input type="text" id="address" class="form-control form-control-lg" siez="17"
                          placeholder="Cardholder's Address" />
                        <label class="form-label" for="typeName">Cardholder's Address</label>
                      </div>
                    
                    </form>

                    <hr class="my-4">

                    <div class="d-flex justify-content-between mb-4">
                      <p class="mb-2">Total</p>
                      <p class="mb-2">$4818.00</p>
                    </div>

                    <button type="button" class="btn btn-info btn-block btn-lg">
                      <div class="d-flex justify-content-between">
                        <span>$4818.00</span>
                        <span>Checkout <i class="ti-shift-right"></i></span>
                      </div>
                    </button>

                  </div>
                </div>

              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
include './components/footer.php';

?>




</body>
</html>
