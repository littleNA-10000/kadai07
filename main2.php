<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Bookmark</title>
    <link href="https://fonts.googleapis.com/css2?family=Sawarabi+Mincho&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body id="top">
    <div id="top_box">
        <h1>本の記録帳</h1>
        <form method="POST" action="insert2.php">
            <p>書籍名を記入してください。※必須
                <input type="text" name="bookname">
            </p>
            <p>評価を選んでください（5点満点）
                <input type="radio" name="point" value="5">5点
                <input type="radio" name="point" value="4">4点
                <input type="radio" name="point" value="3">3点
                <input type="radio" name="point" value="2">2点
                <input type="radio" name="point" value="1">1点
            <p>書籍URLを入力してください。
                <input type="text" name="url">
            </p>
            <p>コメントがあれば入力してください。
                <textarea name="comment"></textarea>
            </p>
            <p>
                <input type="submit" value="登録する">
            </p>
            <a href="result2.php">記録帳の一覧を見る</a>
        </form>
    </div>

</body>
</html>
