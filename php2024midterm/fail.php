<head>
<meta charset="utf8">
</head>

<style>
  body {
    background-color: #ADD8E6;
    font-family: "標楷體", "KaiTi", serif;
  }
</style>

<center>
<?php

echo "登入失敗<br/>";
echo "10秒後回到登入畫面<br/>";
header("Refresh:10;url=index.php");

echo "<button onclick=\"window.location.href = 'index.php';\">返回登入畫面</button>";

?>
<center>