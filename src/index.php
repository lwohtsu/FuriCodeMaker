<?php
require_once 'furicode_dbinfo.php';

// GETからパラメータのid取得
$id = htmlspecialchars($_GET["id"]);
// echo htmlspecialchars($_GET["id"]);
if(!$id){
    // echo "no param";
    $template = "";
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ふりがなプログラミングメーカー</title>
        <meta name="robots" content="noindex" />
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- <link rel="stylesheet" href="node_modules/materialize-css/dist/css/materialize.min.css"> -->

        <link rel="stylesheet" href="css/index.css">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!-- スクリプト読み込み -->
        <script src="node_modules/jquery/dist/jquery.min.js"></script>
        <script src="node_modules/materialize-css/dist/js/materialize.min.js"></script>
        <script src="node_modules/ace-builds/src-min-noconflict/ace.js"></script>
        <!--<script src="node_modules/highlight/lib/highlight.js"></script>-->
        <script src="node_modules/marked/lib/marked.js"></script>
        <script src="sample/_postReplaceList.js"></script>
        <script src="sample/mdsrctext.js"></script>
        <script src="js/index.js" defer></script>
    </head>

    <body>
        <h1>ふりがなプログラミングメーカー</h1>
        <!--Navbar-->
        <!-- <nav class="nav-extended">
            <div class="nav-wrapper">
            <a href="#" class="brand-logo">ふりがなプログラミングメーカー</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="https://www.libroworks.co.jp" target="_blank">LibroWorks inc.</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="https://www.libroworks.co.jp" target="_blank">LibroWorks inc.</a></li>
            </ul>

            <ul class="tabs tabs-transparent">
                <li class="tab"><a class="active" href="#mdp-tab">プレビュー</a></li>
            </ul>
            </div>
        </nav> -->
        <!--MDプレビュータブ-->
        <div id="mdp-tab">
            <!--テキストエディタ-->
            <div id="editor-area">
                <h3 id="editor-bar"><i class="material-icons tiny">swap_vert</i>Markdown</h3>
                <div id="markdown-editor"># マークダウン</div>
            </div>

            <!--ページプレビュー部-->
            <iframe id="expage-preview" class="row-html" src="sample/iframe.html"></iframe>
        </div>

    </body>
</html>
