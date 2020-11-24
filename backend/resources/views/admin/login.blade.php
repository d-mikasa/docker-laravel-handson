<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CICACUログインページ</title>
</head>

<body>
    <header>
        <h1>CICACU 管理画面ログイン</h1>
    </header>
    <main class = "loginForm">
        <form action="" method="post">
            <div class="error">
            </div>
            <p class="loginIdForm">ログインID<input type="text" name="id" size="30" value="<?=(!empty($_POST['id']) ? h($_POST['id']) : '');?>"></p>
            <p class="loginPassForm">パスワード<input type="password" name="pass" size="30"></p>
            <p class = "loginSubmitButton"><input type="submit" value="認証" name="attestation"></p>
        </form>
    </main>
</body>

</html>