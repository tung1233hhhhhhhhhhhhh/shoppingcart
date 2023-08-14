
<?php

// ket noi db
    require 'database.php';
    $sql = 'SELECT * FROM website';
    $result = $db->query($sql);
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
        rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/home.css">
    <link rel="stylesheet" href="./assets/fonts/themify-icons/themify-icons.css">
</head>


<style>

</style>

<body>

    <!-- header -->

    <div id="header">
        <div class="container">
            <div class="nav">
                <div class="nav-top">
                    <div class="header-icons">
                        <i class="ti-search"></i>
                        <i class="ti-shopping-cart"></i>
                        <i class="ti-user"></i>
                    </div>
                    <div class="logo-header">
                        <img src="./assets/imgs/image 5.png" alt="">
                    </div>
                    <div class="header-icons">
                        <i class="ti-search"></i>
                        <i class="ti-shopping-cart"></i>
                        <i class="ti-user"></i>
                    </div>
                </div>
                <div class="navbar">
                    <ul class="navbar-container">
                        <li><a href="">Trang chủ</a></li>
                        <li><a href="">Về chúng tôi</a></li>
                        <li class="store">
                            <a href="a-store">
                                Cửa hàng
                                <i class="ti-angle-down"></i>

                            </a>
                            <ul class="navbar-child">
                                <li>Áo
                                    <i class="ti-angle-right"></i>
                                </li>
                                <li>Áo khoác
                                    <i class="ti-angle-right"></i>
                                </li>
                                <li>Quần
                                    <i class="ti-angle-right"></i>
                                </li>
                                <li>Phụ kiện
                                    <i class="ti-angle-right"></i>
                                </li>
                                <li>Đồ phối
                                    <i class="ti-angle-right"></i>
                                </li>
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
            <div class="banner">
                <img src="./assets/imgs/slideshow_1.jpg" alt="">
                <img src="./assets/imgs/slideshow_2.jpg" alt="">
            </div>
        </div>
    </div>

    <!-- category -->

    <div id="category">
        <div class="container">
            <div class="box-category">
                <div class="img-category">
                    <img src="./assets/imgs/img_category_1.png" alt="">
                </div>
                <p>Áo Thun</p>
            </div>
            <div class="box-category">
                <div class="img-category">
                    <img src="./assets/imgs/img_category_2.png" alt="">
                </div>
                <p>Áo Thun</p>
            </div>
            <div class="box-category">
                <div class="img-category">
                    <img src="./assets/imgs/img_category_3.png" alt="">
                </div>
                <p>Áo Thun</p>
            </div>
            <div class="box-category">
                <div class="img-category">
                    <img src="./assets/imgs/img_category_4.png" alt="">
                </div>
                <p>Áo Thun</p>
            </div>
        </div>
    </div>

    <!-- collection -->

    <div id="collection">
        <div class="container">
            <div class="collection-heading">
                <ul class="list-heading-collection">
                    <li class="item-heading-collection">
                        <a href="">Sản Phẩm Nổi Bật</a>
                    </li>
                    <li class="item-heading-collection">
                        <a href="">Sản Phẩm Bán Chạy</a>
                    </li>
                    <li class="item-heading-collection">
                        <a href="">Gợi Ý cho bạn</a>
                    </li>
                </ul>
            </div>
            <div class="collection-content">
                <div class="collection-content_container">
                    <div class="collection-content_item">
                        <div class="collection-item_img">
                            <img src="./assets/imgs/ao.png" alt="">
                        </div>
                        <div class="collection-item_text">
                            <p>HARD MODE BASIC TEE / GREY</p>
                            <p>79,000 đ</p>
                        </div>
                    </div>
                    <div class="collection-content_item">
                        <div class="collection-item_img">
                            <img src="./assets/imgs/ao.png" alt="">
                        </div>
                        <div class="collection-item_text">
                            <p>HARD MODE BASIC TEE / GREY</p>
                            <p>79,000 đ</p>
                        </div>
                    </div>
                    <div class="collection-content_item">
                        <div class="collection-item_img">
                            <img src="./assets/imgs/ao.png" alt="">
                        </div>
                        <div class="collection-item_text">
                            <p>HARD MODE BASIC TEE / GREY</p>
                            <p>79,000 đ</p>
                        </div>
                    </div>
                    <div class="collection-content_item">
                        <div class="collection-item_img">
                            <img src="./assets/imgs/ao.png" alt="">
                        </div>
                        <div class="collection-item_text">
                            <p>HARD MODE BASIC TEE / GREY</p>
                            <p>79,000 đ</p>
                        </div>
                    </div>

                    <div class="collection-content_item">
                        <div class="collection-item_img">
                            <img src="./assets/imgs/ao.png" alt="">
                        </div>
                        <div class="collection-item_text">
                            <p>HARD MODE BASIC TEE / GREY</p>
                            <p>79,000 đ</p>
                        </div>
                    </div>
                    <div class="collection-content_item">
                        <div class="collection-item_img">
                            <img src="./assets/imgs/ao.png" alt="">
                        </div>
                        <div class="collection-item_text">
                            <p>HARD MODE BASIC TEE / GREY</p>
                            <p>79,000 đ</p>
                        </div>
                    </div>
                    <div class="collection-content_item">
                        <div class="collection-item_img">
                            <img src="./assets/imgs/ao.png" alt="">
                        </div>
                        <div class="collection-item_text">
                            <p>HARD MODE BASIC TEE / GREY</p>
                            <p>79,000 đ</p>
                        </div>
                    </div>
                    <div class="collection-content_item">
                        <div class="collection-item_img">
                            <img src="./assets/imgs/ao.png" alt="">
                        </div>
                        <div class="collection-item_text">
                            <p>HARD MODE BASIC TEE / GREY</p>
                            <p>79,000 đ</p>
                        </div>
                    </div>

                </div>
                <div class="collection-content_btn">
                    <a href="" class="xemthem">Xem Thêm
                        <i class="ti-angle-down"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->

    <div id="footer">
        <div class="container">
            <div class="footer-left">
                <div class="footer-left_text">
                    <p>VỀ CHÚNG TÔI</p>
                    <h5>SICKO® - tiền thân là thương hiệu Hard Mode</h5>
                    <h6>Iconic Green Streetwear</h6>
                    <h4>More Products Tiktok @sicko.vn
                        © Bản quyền thuộc về SICKO</h4>
                </div>
            </div>
            <div class="footer-right">
                <div class="footer-right_top">
                    <div class="box-footer">
                        <h1>LIÊN HỆ</h1>
                        <ul>
                            <li>
                                <p>Điện thoại</p>
                                <h5>097 875 8975</h5>
                            </li>
                            <li>
                                <p>Email</p>
                                <h5>custom@gmail.vn</h5>
                            </li>
                            <li>
                                <p>Thứ Hai-Chủ Nhật</p>
                                <h5>9H00-21H00</h5>
                            </li>
                        </ul>
                    </div>
                    <div class="box-footer">
                        <h1>HỖ TRỢ</h1>
                        <ul>
                            <li>
                                <p>Tài Khoản</p>

                            </li>
                            <li>
                                <p>Chính sách đổi trả</p>

                            </li>
                            <li>
                                <p>Chính sách bảo mật</p>

                            </li>
                            <li>
                                <p>Tích lũy điểm thưởng tại SICKO thế nào?</p>

                            </li>
                        </ul>
                    </div>
                    <div class="box-footer">
                        <h1>HỆ THỐNG CỬA HÀNG</h1>
                        <ul>
                            <li>
                                <p>Hiện tại SICKO chỉ hoạt động kinh doanh qua các kênh trực tuyến:Website, Facebook,
                                    Instagram,Shopee,Lazada</p>

                            </li>
                            <li>
                                <p>Mở rộng</p>

                            </li>
                            <li>
                                <p>Bài viết</p>

                            </li>
                            <li>
                                <p>Tuyển dụng</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer-right_bottom"></div>
            </div>
        </div>
    </div>
</body>

</html>