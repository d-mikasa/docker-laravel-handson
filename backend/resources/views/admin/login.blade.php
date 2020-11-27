<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin_style.css') }}">
    <title>MIKASA</title>
</head>
<body>
    <h1>MIKA.GG</h1>
    <li><a href="{{ action('IndexController@link') }}">aaaa</a></li>
    <main class="loginForm">
        <form action="" method="post">
            @csrf
            <div class="error">
            </div>
            <p class="loginIdForm">ログインID<input type="text" name="id" size="30" value="<?=(!empty($_POST['id']) ? h($_POST['id']) : '');?>"></p>
            <p class="loginPassForm">パスワード<input type="password" name="pass" size="30"></p>
            <p class="loginSubmitButton"><input type="submit" value="認証" name="attestation"></p>
        </form>
    </main>

</body>
</html>
