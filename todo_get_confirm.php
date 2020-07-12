<?php

// var_dump($_POST);
// exit();

// データの取り出し
$todo = $_POST['todo'];
$deadline = $_POST['deadline'];
$kazu = $_POST['kazu'];
$denwa = $_POST['denwa'];
$zyusyo = $_POST['zyusyo'];
$situ = $_POST['situ'];
$size = $_POST['size'];

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>スイカ予約画面</title>
</head>

<body>
    <fieldset>
        <legend>スイカ予約画面</legend>
        <table>
            <thead>
                <tr>
                    <th>名前</th>
                    <th>購入日</th>
                    <th>購入数</th>
                    <th>電話番号</th>
                    <th>住所</th>
                    <th>品質</th>
                    <th>サイズ</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </fieldset>
</body>

</html>