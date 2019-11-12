<!-- login_after.php -->

<?php
session_start();

if(empty($_SESSION['auth'])){
    header('Location: login.php');
}

if(!empty($_POST['logout'])){
    session_destroy();
    header('Location: login.php');
}
?>

<meta charset="utf-8">
<form class="" action="" method="post">
    <label>ログインID:</label>
    <?= $_POST['id'] ?><br>
    <label>パスワード:</label>
    <?= $_POST['pass'] ?><br>
    <input type="submit" name="logout" value="ログアウト">
</form>