<head>
<meta charset="utf8">
</head>

<style>
  body {
    background-color: #ADD8E6;
    font-family: "標楷體", "KaiTi", serif;
    font-size: 25px;
  }
</style>

<center>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = isset($_POST["title"]) ? $_POST["title"] : "";
  $fullName = isset($_POST["fullName"]) ? $_POST["fullName"] : "";
  $email = isset($_POST["email"]) ? $_POST["email"] : "";
  $summary = isset($_POST["Summarys"]) ? $_POST["Summarys"] : "";

  echo "論文標題：$title<br/>";
  echo "作者姓名：$fullName<br/>";
  echo "作者Email：$email<br/>";
  echo "論文摘要：$summary<br/>";
}
?>

</center>

<center>
<form action="logout.php" method="post">
    <button type="submit" style="font-size: 20px;">登出</button>
</form>
</center>


<?php include("include.inc"); ?>