<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<title>メモを読み込む</title>
	<link href="css/style.css" rel=stylesheet>
</head>

<body>
	<div>
		<?php
		$filename= "memo.txt";
		try{
			$fileObj = new splFileObject($filename,"rb");
		}catch(Exception $e){
			echo "<span class='error'>エラーがありました。</span>";
	echo $e -> getMessage();
	exit(); 
		}
		
		$fileObj -> flock(LOCK_SH);
		$readdata = $fileObj -> fread($fileObj -> getSize());
		$fileObj -> flock(LOCK_UN);
		
		if(!($readdata === FALSE)){
//			$readdata = es($readdata);
			$readdata_br = nl2br($readdata,false);
			echo "サーバー上にファイル{$filename}が保存されました。<br>「{$filename}」の内容は下記となっています。<br>";
				echo $readdata_br ,"<hr>";
			echo "<a href='input_memo.php'>メモ入力ページへ</a>";
		}else{
			echo "ファイルが読み込めませんでした。";
		}
		
		?>
	</div>
	</body>
</html>
