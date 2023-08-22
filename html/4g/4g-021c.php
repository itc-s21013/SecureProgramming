<?php
  session_start();
  if (empty($_SESSION['mail'])) {
    header('HTTP/1.1 403 Forbidden');
    die('ログインが必要です');
  }
  if (empty($_SERVER['HTTP_X_REQUESTED_WITH'])
	  || $_SERVER['HTTP_X_REQUESTED_WITH'] !== 'XMLHttpRequest') {
	  header('HTTP/1.1 403 Forbidden');
	  error_log('** CSRF detected **');
	  die('正規の経路から使用ください');
  }
  $json = file_get_contents('php://input');
  $array = json_decode($json, true);
  // 更新処理・・・セッション変数を更新するだけ
  $_SESSION['mail'] = $array['mail'];
  $result = array('result' => 'ok');
  header('Content-Type: application/json; charset=utf-8');
  echo json_encode($result);

