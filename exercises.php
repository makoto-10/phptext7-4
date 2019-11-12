<?php
if(!empty($_POST['send'])){
    if(!empty($_POST['id'])){
        setcookie('memory_id', $_POST['id'], time()+60);
    }
    if(!empty($_POST['pass'])){
        setcookie('memory_pass', $_POST['pass'], time()+60);
    }
}

if(!empty($_POST['cookie_destroy'])){
    setcookie('memory_id', '', time()-1);
    setcookie('memory_pass', '', time()-1);
}

?>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<form action="" method="post">
    <label>ログインID</label>
    <input type="text" name="id" value="<?= (!empty($_COOKIE['memory_id'])?$_COOKIE['memory_id']:'') ?>"><br>
    <label>パスワード</label>
    <input type="password" name="pass" value="<?= (!empty($_COOKIE['memory_pass'])?$_COOKIE['memory_pass']:'') ?>"><br>
    <input type="submit" name="send" value="送信">
    <input type="submit" name="cookie_destroy" value="クッキー削除">
</form>
<?php if(!empty($_COOKIE['memory_id'])): ?>
    あなたのログインIDは<?= $_COOKIE['memory_id'] ?>です<br>
<?php endif; ?>
<?php if(!empty($_COOKIE['memory_pass'])): ?>
    あなたのパスワードは<?= $_COOKIE['memory_pass'] ?>です<br>
<?php endif; ?>
</body>
</html>