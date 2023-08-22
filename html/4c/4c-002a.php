<?php
function get_upload_file_name($tofile) { /* 省略 */ }

$tmpfile = $_FILES["imgfile"]["tmp_name"];
$orgfile = $_FILES["imgfile"]["name"];
if (! is_upload_file($tmpfile)) {
	die('ファイルがアップロードされていません');
}
$tofile = get_upload_file_name($orgfile);
if (! move_uploaded_file($tmpfile, $tofile)) {
	die('ファイルをアップロードできません')
}
$imgurl = '4c-003.php?file=' . basename($tofile);
?>
<body>
<a href="<?php echo htmlspecialchars($imgurl); ?>"><?php
 echo htmlspecialchars($orgfile, ENT_NOQUOTES, 'UTF-8'); ?></a>
をアップロードしました<br>
<img src="<?php echo htmlspecialchars($imgurl); ?>">
</body>
