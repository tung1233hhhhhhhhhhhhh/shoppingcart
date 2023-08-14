
<?php

// ket noi db
    require './admin/database.php';
    $sql = 'SELECT * FROM Product';
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
        <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="./assets/css/home.css">
    <link rel="stylesheet" href="./assets/fonts/themify-icons/themify-icons.css">
</head>


<style>

</style>

<body>
    <?php
    include './components/header.php';
    include './components/category.php';
    include './components/collection.php';
    include './components/footer.php';
    ?>
</body>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            virtual: {
                slides: [], // Dữ liệu của các slide ảo
                renderSlide: function (slide, index) {
                    // Hàm này sẽ được gọi để tạo nội dung cho slide ảo
                    // slide: phần tử slide ảo (HTML)
                    // index: chỉ số của slide ảo trong mảng slides

                    // Tạo phần tử hình ảnh thứ nhất
                    var image1 = document.createElement('img');
                    image1.src = 'assets/imgs/slideshows_1.jpg'; // Đường dẫn tới hình ảnh thứ nhất

                    // Tạo phần tử hình ảnh thứ hai
                    var image2 = document.createElement('img');
                    image2.src = 'assets/imgs/slideshows_2.jpg'; // Đường dẫn tới hình ảnh thứ hai

                    // Thêm hình ảnh vào slide
                    slide.appendChild(image1);
                    slide.appendChild(image2);

                    return slide;
                },
            },
        });

        var virtualData = []; // Dữ liệu của các slide ảo

        // Tạo dữ liệu cho các slide ảo
        for (var i = 0; i < 3; i++) {
            virtualData.push({
                id: i + 1,
                image1: 'assets/imgs/slideshows_1.jpg', // Đường dẫn tới hình ảnh thứ nhất
                image2: 'assets/imgs/slideshows_2.jpg', // Đường dẫn tới hình ảnh thứ hai
                // Thêm các thuộc tính khác nếu cần
            });
        }

        // Cập nhật dữ liệu cho các slide ảo
        swiper.virtual.updateSlides(function () {
            return virtualData.map(function (data) {
                return {
                    id: data.id,
                    content: '<img src="' + data.image1 + '"> <img src="' + data.image2 + '">', // Nội dung slide chứa hai hình ảnh
                    // Thêm các thuộc tính khác nếu cần
                };
            });
        });
    </script>
    </body>
</html>