<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>4eachblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<?php
mb_internal_encoding("utf8");
$pdo=new PDO("mysql:dbname=lesson01;host=localhost;","root","mysql");
$stmt = $pdo->query("select * from 4each_keijiban");
?>
        <div class="logo"><img src="./4eachblog_logo.jpg"></div>
        <header>
            <ul class="menu">
                <li>トップ</li>
                <li>プロフィール</li>
                <li>4eachについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
        </header>

        <main>
            <div class="main-container">
                <div class="left">
                    <h1>プログラミングに役立つ掲示板</h1>

                    <div class="box">
                    <h2>入力フォーム</h2>
                    <form method="post" action="insert.php">
                        <div>
                            <label>ハンドルネーム</label>
                            <br>
                            <input type="text" name="handlename" size="60">
                            <br>
                        </div>
                        <div>
                            <label>タイトル</label>
                            <br>
                            <input type="text" name="title" size="60">
                            <br>
                        </div>
                        <div>
                            <label>コメント</label>
                            <br>
                            <textarea name="comments" rows="10" cols="60"></textarea>
                            <br>
                        </div>
                        <div>
                            <input type="submit" class="submit" value="投稿する">     
                        </div>
                    </form>
                    </div>

                    <div class="box">
                        <?php
                        
                        while($row = $stmt->fetch()){
                        echo"<div class='kiji'>";
                        echo"<h3>".$row['title']."</h3>";
                        echo"<div class='contents'>";
                        echo $row['comments'];
                        echo"<div class='handlename'>posted by ".$row['handlename']."</div>";
                        echo"</div>";
                        echo"</div>";
                        }

                        ?>
                    </div>
                </div>
        
                <div class="right">
                    <div class="tensen"><h2>人気の記事</h2></div>
                    <ul class="kiji">
                        <li>PHPオススメ本</li>
                        <li>PHP MyAdminの使い方</li>
                        <li>今人気のエディタ Top5</li>
                        <li>HTMLの基礎</li>
                    </ul>

                    <div class="tensen"><h2>オススメリンク</h2></div>
                    <ul class="kiji">
                        <li>インターノウス株式会社</li>
                        <li>XAMPPのダウンロード</li>
                        <li>Eclipseのダウンロード</li>
                        <li>Braketsのダウンロード</li>
                    </ul>

                    <div class="tensen"><h2>カテゴリ</h2></div>
                    <ul class="kiji">
                        <li>HTML</li>
                        <li>PHP</li>
                        <li>MySQL</li>
                        <li>JavaScript</li>
                    </ul>
                </div>
            </div>
        </main>

        <footer>
            copyright©internous|4each blog the which provides A to Z about programming.
        </footer>    
    </body>
</html>
                            
