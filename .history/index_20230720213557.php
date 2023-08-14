
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
        rel="stylesheet"/>
       
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
        <link rel="stylesheet" href="./assets/fonts/themify-icons/themify-icons.css"/>
        <link rel="stylesheet" href="./assets/css/home.css"/>

</head>

<style>

.nav .navbar {
    z-index: 2;
}

.swiper img {
    width: 100%;
}

.swiper {
    width: 100%;
    height: 100%;
}

.swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
}
    </style>


<body>
    <?php
    include './components/header.php';
    include './components/category.php';
    include './components/collection.php';
    include './components/footer.php';
    ?>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


<script src="./js/sliderSwiper.js"></script>

<script>
    function myPlugin({ swiper, extendParams, on }) {
  extendParams({
    debugger: false,
  });

  const logEvent = (eventName, ...args) => {
    if (!swiper.params.debugger) return;
    console.log(eventName, ...args);
  };

  on("init", () => logEvent("init"));
  on("click", (swiper, e) => logEvent("click"));
  on("tap", (swiper, e) => logEvent("tap"));
  on("doubleTap", (swiper, e) => logEvent("doubleTap"));
  on("sliderMove", (swiper, e) => logEvent("sliderMove"));
  on("slideChange", () =>
    logEvent("slideChange", swiper.previousIndex, "->", swiper.activeIndex)
  );
  on("slideChangeTransitionStart", () =>
    logEvent("slideChangeTransitionStart")
  );
  on("slideChangeTransitionEnd", () => logEvent("slideChangeTransitionEnd"));
  on("transitionStart", () => logEvent("transitionStart"));
  on("transitionEnd", () => logEvent("transitionEnd"));
  on("fromEdge", () => logEvent("fromEdge"));
  on("reachBeginning", () => logEvent("reachBeginning"));
  on("reachEnd", () => logEvent("reachEnd"));
}

var swiper = new Swiper(".swiper", {
  // Install Plugin To Swiper
  modules: [myPlugin],
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  // Enable auto-play with 3 seconds interval
  autoplay: {
    delay: 2000,
  },
  // Enable debugger
  debugger: true,
});

</script>




</body>

</html>