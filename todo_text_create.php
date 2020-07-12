<?php
// ファイル書き込み操作の流れ
$todo = $_POST["todo"]; // データ受け取り
$deadline = $_POST["deadline"];
$kazu = $_POST['kazu'];
$denwa = $_POST['denwa'];
$zyusyo = $_POST['zyusyo'];
$situ = $_POST['situ'];
$size = $_POST['size'];
$write_data = "{$size} {$situ} {$zyusyo} {$denwa} {$kazu} {$deadline} {$todo}\n";// スペース区切りで最後に改行
$file = fopen('data/todo.txt', 'a'); // ファイルを開く 引数はa
flock($file, LOCK_EX); // ファイルをロック
fwrite($file, $write_data); // データに書き込み，「""」必須！
flock($file, LOCK_UN); // ロック解除
fclose($file); // ファイルを閉じる
header("Location:todo_text.php");// 入力画面に移動