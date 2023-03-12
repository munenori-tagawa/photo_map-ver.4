<?php
session_start();
require_once('./funcs.php');
loginCheck();

$id = $_GET['id'];
$pdo = db_conn();

//２．データ登録SQL作成
$stmt = $pdo->prepare('SELECT * FROM comment_table WHERE id=:id');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
if ($status == false) {
    sql_error($stmt);
} else {
    $row = $stmt->fetch();
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>コメント入力</title>
    
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-danger">
            <div class="container-fluid">
                <ul class="navbar-nav me-auto mb-3 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../index.php">ブログ画面へ</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="post.php">投稿する</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">投稿一覧</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="logout.php">ログアウト</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <?php if (isset($_GET['error'])): ?>
        <p class="text-success">記入内容を確認してください</p>
    <?php endif;?>
    <form method="POST" action="./index.php" class="mb-3">
        <div class="mb-5">
            <label for="title" class="form-label">タイトル</label>
            <input type="text" class="form-control" name="title" id="title" aria-describedby="title" value="<?= $row["comment_id"] ?>">
        </div>
        <div class="mb-1">
            <label for="content" class="form-label">コメント</label>
            <textArea type="text" class="form-control" name="content" id="content" aria-describedby="content" rows="4" cols="40"><?= $row["comment"] ?></textArea>
        </div>
        
  <!-- <button class="btn btn-primary" type="button">修正</button>
  <button class="btn btn-danger" type="button">削除</button> -->

        <div class="d-grid gap-2 col-6 mx-auto">
        <input type="hidden" name="id" id="id" aria-describedby="id" value="<?= $row["comment_id"] ?>">
        <button type="submit" class="btn btn-dark" type="button">コメントします</class>
    </form>
    <form method="POST" action="delete.php?id=<?= $row['comment_id'] ?>" class="mb-3 bg-dark">
        <button type="submit" class="btn btn-info" type="button">コメント消します</class>
        </div>
    </form>
</body>

</html>
