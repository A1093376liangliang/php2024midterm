<html>
<head>
<meta charset="utf8">

<style>
  body {
    background-color: #ADD8E6;
    font-family: "標楷體", "KaiTi", serif;
  }
</style>

<body>
</head>

<center>
  <h1 style="font-size: 40px;">Chair您好，歡迎進入此網頁</h1>
</center>

<center>
  <h1 style="font-size: 40px;">本網頁沒什麼東西，請按下登出鍵離開此頁面回到首頁～謝謝！</h1>
</center>



<center>
<form action="logout.php" method="post">
    <button type="submit" style="font-size: 25px;">登出</button>
</form>
</center>


<?php
session_start();
?>
<html>
<meta charset="utf-8">
<center>
<body>

<?php
if(isset($_SESSION["check"])){
    if($_SESSION["check"]=="Yes"){
        echo "<form action='logout.php' method='post'>";
        echo "<button type='submit' style='font-size: 20px;'>登出</button>";
        echo "</form>";
    }else{
        echo "非法進入網頁";
        echo "1秒鐘之後回登入畫面";
        header("Refresh:1;url=index.php");
    }
}
?>

</center>

<?php include("include.inc"); ?>

</body>
</html>