<?php
require_once 'furicode_dbinfo.php';

// GETからパラメータのid取得
$id = htmlspecialchars($_GET["id"]);

// データベースに接続
try{
    $pdo = new PDO(
        'mysql:dbname='.$dbinfo['dbname'].';host='.$dbinfo['host'].';charset=utf8mb4',
        $dbinfo['user'],
        $dbinfo['pass'],
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );
} catch (PDOException $e) {
    exit();
    // header('Content-Type: text/plain; charset=UTF-8', true, 500);
    // exit($e->getMessage());

}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ふりがなプログラミングメーカー</title>
        <link rel="stylesheet" href="css/index.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
        <meta property="og:title" content="ふりがなプログラミングメーカー" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="http:www.libroworks.co.jp/furicode" />
        <meta property="og:image" content="ogpimage.png" />
        <meta property="og:site_name" content="リブロワークスホームページ" />
        <meta property="og:description" content="ふりがなプログラミングメーカー" />

        <!-- スクリプト読み込み -->
        <script src="node_modules/jquery/dist/jquery.min.js"></script>
        <script src="node_modules/ace-builds/src-min-noconflict/ace.js"></script>
        <!--<script src="node_modules/highlight/lib/highlight.js"></script>-->
        <script src="node_modules/marked/lib/marked.js"></script>
        <script src="sample/_postReplaceList.js"></script>
        <script src="sample/mdsrctext.js"></script>
    </head>

    <body>
        <header>
            <h1>ふりがなプログラミングメーカー</h1>
            <?php
                // 過去記事を表示
                if(isset($id)){
                    $stmt = $pdo->prepare('SELECT * FROM furicode WHERE id = ?');
                    $stmt->bindValue(1, (int)$id, PDO::PARAM_INT);
                    $stmt->execute();
                    $result = $stmt->fetchAll();
                    if(count($result)<1){
                        unset($id);
                    } else {
                        // var_dump($result[0]["content"]);
                        $content = $result[0]["content"];
                        echo "<h2>作品No.".$id."</h2>";
                        echo "<script>";
                        echo "mdsrctext =`" . str_replace("`", "\`" ,$content) . "`;" ;
                        echo "var contentid = " . $id . ";";
                        echo "</script>";
                    }
                }
            ?>
            <script src="js/index.js"></script>

        </header>
        <!--MDプレビュータブ-->
        <div id="mdp-tab">
            <div id="markdown-editor"># マークダウン</div>

            <div id="hide-bar"></div>

            <!--ページプレビュー部-->
            <iframe id="expage-preview" class="row-html" src="sample/iframe.html" height="100%" width="100%"></iframe>
        </div>
        <footer>
            <p id="buttons">
                <?php
                if(isset($id)){
                    echo '<button id="btn_update">作品No.' . $id . 'を更新</button>';
                }
                ?>
                <button id="btn_insert">新規作品として投稿</button>
            </p>

            <h2>作品リスト</h2>
            <table id="sakuhin_list">
                <?php
                //投稿一覧を取得
                $stmt = $pdo->query('SELECT * FROM furicode ORDER BY id DESC');
                $siteurl = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];
                while ($row = $stmt->fetch()) {
                    echo('<tr>');
                    echo('<th><a href="'.$siteurl.'?id='.$row['id'].'">'.$row['id'].'</a></th>');
                    echo('<td>'.$row['title'].'</td>');
                    echo('</tr>');
                }
                ?>
            </table>

            <a href="http://www.libroworks.co.jp" target="_blank">2018 リブロワークス</a>
            <p><small>試験的なツールなので予告なしに終了する場合があります。
                <a href="https://github.com/lwohtsu/FuriCodeMaker">repository</a>
            </small></p>
        </footer>

    </body>
</html>
