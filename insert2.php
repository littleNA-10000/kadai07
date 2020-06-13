<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>登録エラー</title>
    <link href="https://fonts.googleapis.com/css2?family=Sawarabi+Mincho&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body id="top">
<div id="top_box">
<?php
//1. POSTデータ取得
//$name = filter_input( INPUT_GET, ","name" ); //こういうのもあるよ
//$email = filter_input( INPUT_POST, "email" ); //こういうのもあるよ

$bookname = $_POST["bookname"];
$point = $_POST["point"];
$url = $_POST["url"];
$comment = $_POST["comment"];

//2. DB接続します
try {
  //Password:MAMP='root',XAMPP=''
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','root');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}

//３．データ登録SQL作成
if($bookname == ""){
        echo '<p>書籍名の入力がありません。入力してください。</p>';
        echo '<p><button onclick="location.href='."'main2.php'".'">登録画面に戻る</button></p>';
        echo '<p><a href="result2.php">記録帳の一覧を見る</a></p>';
} else{
$stmt = $pdo->prepare("INSERT INTO bookmark_table (id, bookname, point, url, comment, datetime) VALUES(NULL, :a1, :a2, :a3, :a4, sysdate())");
$stmt->bindValue(':a1', $bookname, PDO:: PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2', $point, PDO:: PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3', $url, PDO:: PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a4', $comment, PDO:: PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("ErrorMassage:".$error[2]);
}else{
  //５．index.phpへリダイレクト
header('Location: result2.php');

}
}
?>
</div>
</body>
</html>