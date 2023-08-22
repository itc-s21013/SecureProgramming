<?php
define('UPLOADPATH', '/var/upload');
$mimes = array('pdf' => 'application/x-pdf');

$file = $_GET['file'];
$info = pathinfo($file);
$ext = strtolower($info['extension']);
$content_type = $mimes[$ext];
if (! $content_type) {
	die('拡張子はpdfを指定ください');
}
header('Content-Type: ' . $content_type);
readfile(UPLOADPATH . '/' . basename($file));
?>
