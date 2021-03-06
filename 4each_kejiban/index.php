<!DOCTYPE tml>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>4eachblog 掲示板</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
        mb_internal_encoding("utf8");
        $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
        $stmt = $pdo->query("select * from 4each_kejiban");
        ?>
        <header>
            <div class="logo">
                <img src="4eachblog_logo.jpg">
            </div>
            <ul class="menu">
                <li>トップ</li>
                <li>プロフィール</li>
                <li>4eachについて</li>
                <li>管理フォーム</li>
                <li>お問い合わせ</li>
                <li>その他</li>
            </ul>
        </header>
        <main>
            <div class="main_contents">
                <div class="main_left">
                    <h1>プログラミングに役立つ掲示板</h1>
                    <form method="post" action="insert.php">
                        <div>
                        <h4>入力フォーム</h4>
                        </div>
                        <div>
                            <lavel>ハンドルネイム</lavel>
                            <br>
                            <input type="text" class="text" size="35" name="handlename">
                        </div>
                        <div>
                            <lavel>タイトル</lavel>
                            <br>
                            <input type="text" class="text" size="35" name="title">
                        </div>
                        <div>
                            <level>コメント</level>
                            <br>
                            <textarea cols="35" rows="7" name="comments"></textarea>
                        </div>
                        <div>
                            <input type="submit" class="submit" value="投稿する">
                        </div>
                    </form>
                    <?php
                     while ($row = $stmt->fetch()) {
                            echo "<div class='kiji'>";
                            echo "<h3>".$row['title']."</h3>";
                            echo "<div class='contents'>";
                            echo $row['comments'];
                            echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                            echo "</div>";
                            echo "</div>";
                            echo "<div class='kiji'>";
                            echo "<h3>".$row['title']."</h3>";
                            echo "<div class='contents'>";
                            echo $row['comments'];
                            echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                            echo "</div>";
                            echo "</div>";
                     }
                     ?>
                </div>
                        <div class="main_right">
                            <h3>人気の記事</h3>
                            <p>PHPのおすすめ</p>
                            <p>PHP MyAdminの使い方</p>
                            <p>今人気のエディター TOP5</p>
                            <p>HTMLの基礎</p>
                            <h3>オススメリンク</h3>
                            <p>インターノウス株式会社</p>
                            <p>XAMPPのダウンロード</p>
                            <p>Edipseのダウンロード</p>
                            <p>Bracketsのダウンロード</p>
                            <h3>カテゴリー</h3>
                            <p>HTML</p>
                            <p>PHP</p>
                            <p>MySQL</p>
                            <p>Java Script</p>
                        </div>
                </div>
                 </main>
                 <footer>
                copyright  intemous |　4each blog the which A to B about programming
            </footer>
    </body>
</html>