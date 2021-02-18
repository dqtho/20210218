<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8" />
	<title>課題</title>
</head>
<body>
	<h1>ログイン</h1>
	<p>ユーザIDとパスワードを入力して、［ログイン］ボタンをクリックしてください。</p>
	<table>
	<form action="page.php" method="post">
		<tr>
			<th>ユーザID</th>
			<td><input type="text" name="id" /></td>
		</tr>
		<tr>
			<th>パスワード</th>
			<td><input type="password" name="password" /></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" value="ログイン" /></td>
		</tr>
	</form>
	</table>
</body>
</html>