<?php
$tmpfile = $_FILES["imgfile"]["tmp_name"];
$tofile = $_FILES["imgfile"]["name"];

if (! is_uploaded_file($tmpfile)) {
	die('ファイルがアップロードされていません');
} else if (! move_uploaded_file($tmpfile, 'img/' . $tofile)) {
	die('ファイルをアップロードできません');
}
$imgurl = 'img/' . urlencode($tofile);
?>
<body>
<a href="<?php echo htmlspecialchars($imgurl); ?>"><?php
 echo htmlspecialchars($tofile, ENT_NOQUOTES, 'UTF-8')l ?></a>
をアップロードしました<br>
<img src="<?php echo htmlspecialchars($imgurl); ?>">
</body>
