<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<title>メモ入力</title>
	<link href="css/style.css" rel=stylesheet>
</head>

<body>
	<div>
		<form method="post" action="write_memofile.php">

			<ul>
				<li><span>memo:</span><textarea name="memo" cols="25" rows="4" maxlength="100" placeholder="メモに追加する内容を入力ください。"></textarea></li>
				<li>
					<input type="submit" value="送信する">
				</li>
			</ul>
		</form>
	</div>
</body>

</html>
