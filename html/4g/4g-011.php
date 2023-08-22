<?php
  $zip = $_GET['zip'];
  echo json_encode(array("message" => "郵便番号が見つかりません:" . $zip));
