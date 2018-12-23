<?php
require_once 'furicode_dbinfo.php';
// header('Content-type: text/plain; charset= UTF-8');

if(isset($_POST['id']) && isset($_POST['mdtext']) && isset($_POST['title']) ){
    $id = $_POST['id'];
    $mdtext = $_POST['mdtext'];
    $title = $_POST['title'];

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
        $stmt = $pdo->prepare('UPDATE furicode SET content = ?, title = ? where id = ?');
        $stmt->bindValue(1, $mdtext, PDO::PARAM_STR);
        $stmt->bindValue(2, $title, PDO::PARAM_STR );
        $stmt->bindValue(3, (int)$id, PDO::PARAM_INT );
        $stmt->execute();

        http_response_code( 200 ) ;
    } catch (PDOException $e) {
        echo $e->getMessage();
        http_response_code( 500 ) ;
    }
} else {
    // エラー
    http_response_code( 400 ) ;
}

?>
