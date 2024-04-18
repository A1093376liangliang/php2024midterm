<html>
<head>
<meta charset="utf-8">

<style>
  body {
    background-color: #ADD8E6;
    font-family: "標楷體", "KaiTi", serif;
    font-size: 25px;
  }
</style>
</head>
<body>
<center>
  <h1 style="font-size: 40px;">高大資管論文投稿系統</h1>
</center>
<center>
<form action="check.php" method="post" style="font-size: 25px;">
請選擇您的角色：<select name="role" style="font-size: 15px;">
<option value="Chair">Chair</option>
<option value="Reviewer">Reviewer</option>
<option value="Author">Author</option>
</select>
<br/>
帳號：<input type="text" name="uId" style="font-size: 15px;" value="" placeholder="請輸入您的帳號" required><br/>
密碼：<input type="password" name="uPwd" style="font-size: 15px;" placeholder="請輸入您的密碼" required><br/>
<input type="submit" style="font-size: 20px;" value="提交">
</form>
</center>

<center>
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $userID = $_POST["uId"];
    $password = $_POST["uPwd"];
    
    if (($userID === "chair" && $password === "123") || 
        ($userID === "reviewer" && $password === "234") || 
        ($userID === "author" && $password === "345")) {

        $cookie_expiration = time() + (7 * 24 * 60 * 60); 
        setcookie("userID", $userID, $cookie_expiration); 
        $_SESSION["userID"] = $userID;
    } else {
        header("Location: fail.php");
        exit;
    }
}

if (isset($_COOKIE["userID"])) {
    echo $_COOKIE["userID"] . " 歡迎回來本系統！";
} else {
    echo "您好，歡迎蒞臨本系統！";
}
?>


<?php include("include.inc"); ?>

</center>
</body>
</html>

