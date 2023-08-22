<?php
session_start();
$array = array('name' => $_GET['name']);
?><body>
<div id="name"></div>
<script>
function display_length(obj) {
  var div = document.getElementById('name');
  var txt = obj.name;
  div.textContent = txt + 'の文字数は' + txt.length + '文字です';
}
display_length({"name":"\u5927\u8c37san"});
</script>
</body>
