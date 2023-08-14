
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
       
    <link rel="stylesheet" href="./assets/css/home.css">
    <link rel="stylesheet" href="./assets/fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

</head>




<body>
    <?php
    include './components/header.php';
    include './components/category.php';
    include './components/collection.php';
    include './components/footer.php';
    ?>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script>
  
    function myPlugin({ swiper, extendParams, on }) {
        extendParams({
            debugger: false,
        });

        on('init', () => {
            if (!swiper.params.debugger) return;
            console.log('init');
        });
        on('click', (swiper, e) => {
            if (!swiper.params.debugger) return;
            console.log('click');
        });
        on('tap', (swiper, e) => {
            if (!swiper.params.debugger) return;
            console.log('tap');
        });
        on('doubleTap', (swiper, e) => {
            if (!swiper.params.debugger) return;
            console.log('doubleTap');
        });
        on('sliderMove', (swiper, e) => {
            if (!swiper.params.debugger) return;
            console.log('sliderMove');
        });
        on('slideChange', () => {
            if (!swiper.params.debugger) return;
            console.log(
                'slideChange',
                swiper.previousIndex,
                '->',
                swiper.activeIndex
            );
        });
        on('slideChangeTransitionStart', () => {
            if (!swiper.params.debugger) return;
            console.log('slideChangeTransitionStart');
        });
        on('slideChangeTransitionEnd', () => {
            if (!swiper.params.debugger) return;
            console.log('slideChangeTransitionEnd');
        });
        on('transitionStart', () => {
            if (!swiper.params.debugger) return;
            console.log('transitionStart');
        });
        on('transitionEnd', () => {
            if (!swiper.params.debugger) return;
            console.log('transitionEnd');
        });
        on('fromEdge', () => {
            if (!swiper.params.debugger) return;
            console.log('fromEdge');
        });
        on('reachBeginning', () => {
            if (!swiper.params.debugger) return;
            console.log('reachBeginning');
        });
        on('reachEnd', () => {
            if (!swiper.params.debugger) return;
            console.log('reachEnd');
        });
    }
</script>

<script>
    // Init Swiper
    var swiper = new Swiper('.swiper', {
        // Install Plugin To Swiper
        modules: [myPlugin],
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        // Enable debugger
        debugger: true,
    });
</script>


</body>

</html>