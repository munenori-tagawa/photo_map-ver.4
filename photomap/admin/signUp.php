<!doctype html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
    .form-signin {
    
        background-color: lightblue;
        width: 100%;
        max-width: 2000px;
        padding: 219px;
        margin: auto;
    }

    </style>
    <title>sign in</title>
</head>
<body class="text-center">
        <main class="form-signin">
            <form name="form1" action="signUp.php" method="post">
                <h1 class="text-dark h2 mb-3 fw-normal">ユーザー登録してください。</h1>
                <?php if (isset($_GET['form_empty'])): ?>
                <p class="text-danger">IDとパスワードを確認してください。</p>
                <?php if (isset($_GET['form_empty'])): ?>
                <p class="text-danger">IDとパスワードを確認してください。</p>
                <?php if (isset($_GET['form_empty'])): ?>
                <p class="text-danger">IDとパスワードを確認してください。</p>
                <?php elseif (isset($_GET['form_validation'])): ?>
                <p class="text-danger">IDかパスワーードに間違いがあります。</p>
                <?php elseif (isset($_GET['login_error'])): ?>
                <p class="text-danger">ログインエラーです</p>
                <?php endif;?>
            <?php endif;?> 
        <?php endif;?>
        
            <div class="form-floating m-3 mb-0">
                <input type="text" class="form-control" name="name" id="floatingInput" placeholder="name">
                <label for="floatingInput"> <h3 class="text-dark">name</label>
            </div>
            <div class="form-floating m-3 mb-0">
                <input type="text" class="form-control" name="lid" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput"> <h3 class="text-dark">adrress</label>
            </div>
            <div class="form-floating m-3 mb-0">
                <input type="password" class="form-control" name="lpw" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword"><h3 class="text-dark">Password</label>
            </div>


            <div class="form-floating m-3 mb-0">
                <input type="password" class="form-control" name="lpw" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword"><h3 class="text-dark">Password</label>
            </div>
            <br>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        </form>
    </main>
</body>
</html>
