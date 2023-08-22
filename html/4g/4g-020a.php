<?php
  session_start();
  if (empty($_SESSION['mail'])) {
          $_SESSION['mail'] = 'secret@example.jp';
  }
  if (empty($_SESSION['token'])) {
	  $token = bin2hex(openssl_random_pseudo_bytes(24));
	  $_SESSION['token'] = $token;
  }
  header('Content-Type: application/json; charset=utf-8');
  $json = json_encode(array(
	  'mail' => $_SESSION['mail'],
	  'token' => $_SESSION['token']));
  echo $json;
