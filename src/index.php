<?php
require_once 'furicode_dbinfo.php';

// GETからパラメータのid取得
$id = htmlspecialchars($_GET["id"]);
echo htmlspecialchars($_GET["id"]);
if(!$id){
    echo "no param";
}

?>
