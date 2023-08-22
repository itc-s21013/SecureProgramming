<?php
  $mail = filter_input(INPUT_POST, 'mail');
  system("/usr/sbin/sendmail -i <template.txt $mail");
?>
<body>
お問い合わせを受け付けました
</body>
