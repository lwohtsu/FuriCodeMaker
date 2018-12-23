<?php
require_once 'furicode_dbinfo.php';

// データベースに接続
try{
    $pdo = new PDO(
        'mysql:dbname=azureturtle3_furicode;host=mysql704.db.sakura.ne.jp;charset=utf8mb4',
        $dbinfo['user'],
        $dbinfo['pass'],
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );

    $stmt = $pdo->prepare('SELECT * FROM furicode WHERE id = ?');
    $stmt->bindValue(1, (int)$id, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetchAll();

    var_dump($result);
} catch (PDOException $e) {
    header('Content-Type: text/plain; charset=UTF-8', true, 500);
    exit($e->getMessage());

}

 ?>
