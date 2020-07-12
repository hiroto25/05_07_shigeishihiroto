<?php

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>食べチョク</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>

    <div class="box">
        <!-- <div class="box1">
            <img src="img/IMG_0262.jpg" alt="">
        </div> -->
        <div class="box2">
            <h1>食べチョク</h1>
            <p><button><a href="hazimete.php">初めての方へ</a></button></p>
        </div>
        <!-- <div>
            <p><button><a href="hazimete.php">初めての方へ</a></button></p>
        </div> -->
    </div>

    

    <div class="main">
        <!--スライドを表示させる画面-->
        <div class="slider">
            <!--  横に並べた複数のスライドを格納する用コンテナ  -->
            <ul class="slider__container">
                <!--  各スライド -->
                <img src="img/suika_ec(1).jpg" alt="" class="slider__item slider__item1">
                <img src="img/20600200-m-01-dl.jpg" alt="" class="slider__item slider__item1">
                <img src="img/201004121818041.jpg" alt="" class="slider__item slider__item1">
                <img src="img/d21357-44-624002-1.jpg" alt="" class="slider__item slider__item1">
            </ul>
        </div>
    </div>

    <div class="tou">
        <p><button><a href="text.php">投稿を見る</a></button></p>
    </div>

    <script src="app.js"></script>

</body>

</html>