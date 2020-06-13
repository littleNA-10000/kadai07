<?php
//1.  DB接続します
try {
  //Password:MAMP='root',XAMPP=''
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','root');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}


//２．データ取得SQL作成
$order = $_POST["order"];
$ascdesc = $_POST["ascdesc"];
if($order==""){
$stmt = $pdo->prepare("SELECT * FROM bookmark_table ORDER BY datetime DESC");
} else {
    $stmt = $pdo->prepare("SELECT * FROM bookmark_table ORDER BY $order $ascdesc");
} 
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){ 
    //   $json = json_encode($result);
    $view .= "<tr>";
    $view .= "<td>".$result["datetime"].'</td><td><a href="'.$result["url"].'">'.$result["bookname"]."</a></td><td>".$result["point"]."</td><td>".$result["comment"]."</td>";
    $view .= "</tr>";
  }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>ブックマーク一覧</title>
    <link href="https://fonts.googleapis.com/css2?family=Sawarabi+Mincho&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body id="top">
    <div>
        <h1 id="result_header">本の記録帳一覧</h1>
        <div>
            <form method="POST" action="result2.php">
                <select name="order">
                    <option value="datetime" <? if($order=="datetime"){echo selected;} ?>>登録日時</option>
                    <option value="bookname" <? if($order=="bookname"){echo selected;} ?>>書籍名</option>
                    <option value="point" <? if($order=="point"){echo selected;} ?>>評価点数</option> 
                </select>
                <select name="ascdesc">
                    <option value="ASC" <? if($ascdesc=="ASC"){echo selected;} ?>>昇順</option>
                    <option value="DESC" <? if($ascdesc=="DESC"){echo selected;} ?>>降順</option>
                </select>
                <input type="submit" value="で並べ替え">
            </form>
        </div>
        <table>
            <tr>
                <th>登録日時</th><th>書籍名</th><th>評価点数</th><th>コメント</th>
            </tr>
            <?= $view ?>
        </table>
        <button onclick="location.href='main2.php'">登録画面に戻る</button>
    </div>
</body>
</html>
