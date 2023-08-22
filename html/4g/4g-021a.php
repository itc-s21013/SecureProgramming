<?php
  session_start();
  if (empty($_SESSION['mail'])) {
    header('HTTP/1.1 403 Forbidden');
    die('ログインが必要です');
  }
  $token = $_SERVER['HTTP_X_CSRF_TOKEN'];
  if (empty($token) || $token !== $_SESSION['token']) {
	  header('HTTP/1.1 403 Forbidden');
	  error_log('** CSRF detected **', 4);
	  die('正規の経路から使用してください');
  }
  $json = file_get_contents('php://input');
  $array = json_decode($json, true);
  // 更新処理・・・セッション変数を更新するだけ
  $_SESSION['mail'] = $array['mail'];
  $result = array('result' => 'ok');
  header('Content-Type: application/json; charset=utf-8');
  echo json_encode($result);

