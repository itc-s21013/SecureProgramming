<body>
<div id="name" data-name="&lt;/script&gt;&lt;script&gt;alert(document.cookie)//"></div>
<script>
  var div = document.getElementById('name');
  var txt = div.dataset.name;
  div.textContent = txt + '文字数は' + txt.length + '文字です';
</script>
</body>
