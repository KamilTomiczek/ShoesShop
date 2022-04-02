<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/dca336355f.js" crossorigin="anonymous"></script>

    <title>XZZX STORE</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/card.css">
</head>
<body>
    <div class="header">
        <div class="logo">
            <a href="/"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="menu">
            <ul>
                <li><a href="/mens">Mężczyźni</a><span></span></li>
                <li><a href="/women">Kobiety</a><span></span></li>
                <li><a href="/kids">Dzieci</a><span></span></li>
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
            <li><a href="/mens">Mężczyźni</a><span></span></li>
            <li><a href="/women">Kobiety</a><span></span></li>
            <li><a href="/kids">Dzieci</a></li>               
        </ul>
    </div>

    <div class="container">
        @foreach ($shoes as $row => $data)
            <div class="card">
            <div class="img">
                <img class="big" src="data:image/png;base64,{{ chunk_split(base64_encode($data->image)) }}" alt="">
                <div class="simg">
                    <div class="cont"><img src="data:image/png;base64,{{ chunk_split(base64_encode($data->image)) }}" alt="" class="sml"></div>
                    @foreach ($colors as $row => $col)
                        @if ($col->shoe_id == $data->ID)
                            <div class="cont"><img src="data:image/png;base64,{{ chunk_split(base64_encode($col->image)) }}" alt="" class="sml"></div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="detalist">
                <h1>{{ $data->name }}</h1>
                @foreach ($category as $row => $cat)
                    @if($cat->ID == $data->category_id)
                        <h3>{{ $cat->name }}</h3>
                    @endif
                @endforeach
            </div>
        </div>
        @endforeach
        
    </div>

    <script src="js/script.js"></script>
</body>
</html>