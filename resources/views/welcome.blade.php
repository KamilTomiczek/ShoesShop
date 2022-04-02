<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/dca336355f.js" crossorigin="anonymous"></script>

    <title>XZZX STORE</title>

    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="header">
        <div class="logo">
            <a href="/"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="menu">
            <ul>
                <li><a href="#">Mężczyźni</a><span></span></li>
                <li><a href="#">Kobiety</a><span></span></li>
                <li><a href="#">Dzieci</a><span></span></li>
            </ul>
        </div>
        <div class="icons">
            <i class="fa-solid fa-user"></i>
            <i class="fa-solid fa-cart-shopping"></i>
            <i onclick="dropdown()" id="menu" class="fa-solid fa-bars"></i>
        </div>
    </div>
    <div class="drop-down">
        <ul>               
            <li><a href="#">Mężczyźni</a><span></span></li>
            <li><a href="#">Kobiety</a><span></span></li>
            <li><a href="#">Dzieci</a></li>               
        </ul>
    </div>

    <script src="script.js"></script>
</body>
</html>