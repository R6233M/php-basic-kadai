<?php
// セッションを開始
session_start();

// セッションに保存された「社員名」を取得
$name = isset($_SESSION['employee_name']) ? $_SESSION['employee_name'] : '名無し';
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>kadai_web_app</title>
</head>

<body>
    <h2><?php echo $name; ?>さん、社員情報登録が完了しました。</h2>
    <p>社員情報がデータベースに保存されました。</p>
    <button id="back-btn" onclick="location.href='form.php';">戻る</button>

    <?php
    // セッション変数を初期化
    $_SESSION = array();

    // セッションを終了
    session_destroy();
    ?>
</body>
</html>