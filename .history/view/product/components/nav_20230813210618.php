

<div class="nav">
                <div class="nav-top">
                    <div class="header-icons">
                        <i class="ti-search"></i>
                        <i class="ti-shopping-cart"></i>
                        <i class="ti-user"></i>
                    </div>
                    <div class="logo-header">
                       <a href="../../index.php"> <img src="../../assets/imgs/logo (1).png" alt=""></a>
                    </div>
                    <div class="header-icons">
                        <i class="ti-search"></i>
                        <a href="./shoppingcart.php"><i class="ti-shopping-cart"></i></a>
                        <i class="ti-user"></i>
                    </div>
                </div>
                <div class="navbar">
                    <ul class="navbar-container">
                        <li><a href="../../index.php">Trang chủ</a></li>
                        <li><a href="">Về chúng tôi</a></li>
                        <li class="store">
                            <a href="sanpham.php" >
                                Cửa hàng
                                <i class="ti-angle-down"></i>

                            </a>
                            <ul class="navbar-child">
                                <?php 
                                    $sql=$conn->prepare("SELECT * FROM category");
                                    $sql->execute();
                                    while ( $row=$sql->fetch()) { ?>
                                        <li><?php  echo $row['name_category'] ?>
                                        <i class="ti-angle-right"></i>
                                    </li>
                                    <?php
                                    }
                                
                                ?>
                             
                               
                            </ul>
                        </li>
                        <li><a href="">Bộ Sưu Tập</a></li>
                        <li><a href="">Bộ phối</a></li>
                        <li><a href="">Bài viết</a></li>
                        <li><a href="">Chăm sóc khách hàng</a></li>
                        <li><a href="">Tuyển dụng</a></li>
                        <li><a href="">Liên hệ</a></li>
                    </ul>
                </div>
            </div>