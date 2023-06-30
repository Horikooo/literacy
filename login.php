<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href='rpsys.css' />
    <title>ログイン</title>
    <h1>FMたなし</h1>
</head>
    
<body>
    <br><br>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // ログイン処理を行う
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        // 入力値のバリデーションやデータベースとの照合などの処理を行う
        // ...
        // ログイン成功時の処理
        /* ログインが成功した場合の条件 */
            echo "<p>ログインに成功しました！</p>";
            // ログイン後の画面にリダイレクトなどの処理を行う
        
            echo "<p style='color: red;'>メールアドレスまたはパスワードが正しくありません。</p>";
        
    }
    ?>
    <form method="POST" action="login.php">
        <label for="userid">会員ＩＤ　：</label><br>
        <input type="userid" id="userid" name="user_id" maxlength=10 required>
        <br><br>
        <label for="password">パスワード：</label><br>
        <input type="password" id="password" name="user_password" maxlength=8 required>
        <br><br><br>
        <input type="submit" value="ログイン" name="login" style="position: relative; left: 0.5%; top: 0%; background-color: #0066CC; color: #FFFFFF;">
    </form>
    <br>
    <p style="position :relative; left :350px;"><a href="signup.php">新規登録はこちらから</a></p>
</body>

</html>