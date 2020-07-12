<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="todo_get_confirm.php" method="POST">
        <fieldset>
            <legend>スイカ注文リスト</legend>
            <div>
                名前: <input type="text" name="todo">
            </div>
            <div>
                購入日: <input type="date" name="deadline">
            </div>
            <div>
                購入数: <input type="text" name="kazu">
            </div>
            <div>
                電話番号: <input type="text" name="denwa">
            </div>
            <div>
                住所: <input type="text" name="zyusyo">
            </div>
            <div>
                品質: <input type="text" name="situ">
            </div>
            <div>
                サイズ: <input type="text" name="size">
            </div>
            <div>
                <button>送信</button>
            </div>
        </fieldset>
    </form>

</body>

</html>