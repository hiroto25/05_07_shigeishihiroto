<?php

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .pic {
             background-color: black; 
        }

        .slide-wrap {
            background-color: #ccc;
            display: flex;
            margin: 0 auto;
            max-width: 1024px;
            width: 100%;
        }

        .slide-box {
            height: auto;
            margin: .5%;
            width: 24%;
        }

        .slide-box a {
            background-color: #fff;
            color: #222;
            display: block;
            text-decoration: none;
        }

        .slide-box img {
            display: block;
            height: auto;
            width: 100%;
        }

        .slide-box p {
            font-weight: bold;
            padding: 10px;
            margin: .5rem auto;
        }

        @media screen and (max-width: 768px) {

            /* スマホサイズでスライダー表示 */
            .slide-wrap {
                overflow-x: scroll;
            }

            .slide-box {
                flex: 0 0 70%;
                margin: auto 1% auto auto;
            }
        }
    </style>
</head>

<body>

    <div class="pic">
        <div class="slide-wrap">
            <div class="slide-box">
                <a href="URL">
                    <img src="img/img0d0f8cd3zikezj.jpeg">
                </a>
                <p><button><a href="text1.php">調べる</a></button></p>
            </div>

            <div class="slide-box">
                <a href="URL">
                    <img src="img/20600200-m-01-dl.jpg">
                </a>
                <p><button><a href="text2.php">調べる</a></button></p>
            </div>

            <div class="slide-box">
                <a href="URL">
                    <img src="img/201004121818041.jpg">
                </a>
                <p><button><a href="text3.php">調べる</a></button></p>
            </div>
            <div class="slide-box">
                <a href="URL">
                    <img src="img/d21357-44-624002-1.jpg">
                </a>
                <p><button><a href="text4.php">調べる</a></button></p>
            </div>

            <div class="slide-box">
                <a href="URL">
                    <img src="img/b3780f717ff6ea72b947be540b0cf1b0_1469034904-480x320.jpg">
                </a>
                <p><button><a href="text5.php">調べる</a></button></p>
            </div>

            <div class="slide-box">
                <a href="URL">
                    <img src="img/densuke-02.jpg">
                </a>
                <p><button><a href="text6.php">調べる</a></button></p>
            </div>
        </div>
    </div>




</body>

</html>