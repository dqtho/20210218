<?php
    $user = $_POST["id"];
    $pass = $_POST["password"];
    
    if($user == "user01" && $pass == "pass01"){
        $text = "ログインが成功しました。";
    }else{
        $text = "ログインに失敗しました。";
    }
?>



<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8" />
	<title>ログイン結果</title>
</head>
<body>
	<h1><?= $text ?></h1>

</body>
</html>