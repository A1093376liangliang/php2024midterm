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
  <h1 style="font-size: 40px;">Reviewer您好，歡迎進入論文評論網頁</h1>
</center>

<center>
<form action="showreview.php" method="post" style="font-size: 25px;">


論文評審決定：
<input type="radio" name="review[]" style="font-size: 15px;" value="Accept" checked>Accept
<input type="radio" name="review[]" style="font-size: 15px;" value="Minor Revision">Minor Revision
<input type="radio" name="review[]" style="font-size: 15px;" value="Major Revision">Major Revision
<input type="radio" name="review[]" style="font-size: 15px;" value="Reject">Reject
<br/>



論文評論評語：
<textarea name="Comments" rows="15" cols="50" style="font-size: 15px;" placeholder="請輸入您的論文評論評語"></textarea><br/>


<br/>
<input type="submit" style="font-size: 25px;" value="提交">

<br/>


</center>

</form>

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