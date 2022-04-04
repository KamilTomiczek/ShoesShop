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
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
    <div class="header">
        <div class="logo">
            <a href="/"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="icons">
            <i class="fa-solid fa-user"></i>
        </div>
    </div>

    <div class="form">
        <form action="/add" method="POST" enctype="multipart/form-data">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

            <div class="name">
                <label for="name">Nazwa produktu:</label>
                <input name="name" id="name" type="text"><br>
            </div>
            <div class="radiobtns">
            @foreach ($category as $row=>$data)
                <input class="rbtn" type="radio" id="{{ $data->name }}" value="{{ $data->ID }}" name="category">
                <label for="{{ $data->name }}">{{ $data->name }}</label><br>           
            @endforeach
            </div>
            <div class="files">
                <input type="file" id="file" name="file">
            </div>

            <div class="btns">
                <input onclick="dodaj()" type="button" value="dodaj wariant">
                <input type="submit">
            </div>
        </form>
    </div>

    <script src="js/admin.js"></script>
</body>
</html>