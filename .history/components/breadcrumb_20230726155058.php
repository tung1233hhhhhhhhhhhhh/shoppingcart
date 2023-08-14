<style>
    /* li {
        list-style: none;
    } */

    /* a {
        text-decoration: none;
    } */

    .breadcrumb {
        display: flex;
        flex-direction: column;
    }

    .breadcrumb .container {
        margin: 0 10rem;
        padding: 0 2rem;
    }

    .breadcrumb .container .text-top a {
        color: #ccc;
    }

    .breadcrumb .container .text-top a:hover {
        color: black;
        transition: .2s linear;
    }

    .breadcrumb .container .text-main {
        font-size: 2rem;
        font-weight: 900;
        margin: 3rem 0;
        text-align: center;
    }

    .breadcrumb .container .text-bottom {
        color: black;
        cursor: pointer;
        display: inline-block;
        position: relative;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 5px;
    }

    .breadcrumb .container .text-bottom:hover .breadcrumb-list {
        display: block;
    }

    .breadcrumb-list {
        position: absolute;
        width: 160%;
        display: none;
        animation: animation .2s linear;
        padding: 10px;
        border: 1px solid #ccc;
        box-shadow: 0 0 5px #ccc;
        left: 0;
        transform: translateY(5px);
    }

    .breadcrumb-list li {
        margin-bottom: 5px;
        cursor: pointer;
        padding: 5px;
    }

    .breadcrumb-list a {
        color: black;
        text-decoration: none;
    }

    .breadcrumb-list a:hover {
        color: #ccc;
    }
</style>

<div class="breadcrumb">
    <ul class="container">
        <li class="text-top">
            <a href="">Trang Chủ</a> / Tất cả sản phẩm
        </li>
        <li class="text-main">TẤT CẢ SẢN PHẨM</li>
        <li class="text-bottom">
            Danh Mục
            <i class="ti-angle-down"></i>
            <ul class="breadcrumb-list">
                <li><a href="">Áo</a></li>
                <li><a href="">Áo khoác</a></li>
                <li><a href="">Quần</a></li>
            </ul>
        </li>
    </ul>
</div>