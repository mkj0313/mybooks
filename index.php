<?php

// 関数ファイルを読み込む
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/functions.php';

// データベースに接続
$dbh = connect_db();
// echo '接続に成功しました！' . '<br>';

// $sql = 'SELECT * FROM members';
// $stmt = $dbh->prepare($sql);
// $stmt->execute();
// $members = $stmt->fetchAll(PDO::FETCH_ASSOC);
// 
?>

//
<!DOCTYPE html>
// <html lang="ja">

//

<head>
    //
    <meta charset="UTF-8">
    //
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    //
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    // <title>PDO-SELECT</title>
    //
</head>

//

<body>
    // <h2>データの抽出成功</h2>
    // <ul>
        // <?php foreach ($members as $member) : ?>
            // <li><?= h($member['name']) . 'さん' ?></li>
            // <?php endforeach; ?>
        // </ul>
    // </body>

//

</html>