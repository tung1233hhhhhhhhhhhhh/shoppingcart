<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    h1 {
        text-align: center;
        padding: 2rem;
        background-color: blue;
        margin-bottom: 2rem;
        color: white;
    }

    .main {}

    .main .container {
        display: flex;
        flex-direction: row;
        text-align: center;
    }

    a {
        text-decoration: none;
    }

    li {
        list-style: none;
    }

    p {
        display: block;
        text-decoration: none;
    }

    .box {
        width: 10%;
        cursor: pointer;
    }

    li:hover {
        color: red;
    }
</style>

<body>
    <h1>ADMIN</h1>

    <div class="main">
        <ul class="container">
            <li class="box">
                <a href="">
                    <img src="../assets/imgs/checkin.png" alt="">
                    <p>Website</p>
                </a>
            </li>
            <li class="box">
                <a href="">
                    <img src="../assets/imgs/categories.png" alt="">
                    <p>Sản Phẩm</p>
                </a>
            </li>
        </ul>
    </div>
</body>

</html>