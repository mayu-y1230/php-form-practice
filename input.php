<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録ー入力</title>
</head>
<body>
    <h1>ユーザー登録（1/3）入力</h1>
    <form action="confirm.php" method="post">
        <div>
            <label for="name">お名前：</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="email">メールアドレス：</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="age">年齢：</label>
            <input type="number" name="age" id="age" min="0" max="120" required>
        </div>
        <button type="submit">確認画面へ</button>
    </form>
</body>
</html>