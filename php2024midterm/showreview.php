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
  $reviews = isset($_POST["review"]) ? implode(", ", $_POST["review"]) : "";
  $Comments = isset($_POST["Comments"]) ? $_POST["Comments"] : "";

    echo "論文評審決定：$reviews<br/>";
    echo "您的論文評論評語：$Comments<br/>";
}
?>

</center>

<center>
<form action="logout.php" method="post">
    <button type="submit" style="font-size: 20px;">登出</button>
</form>
</center>

<?php include("include.inc"); ?>


