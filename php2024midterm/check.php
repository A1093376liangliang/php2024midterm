<?php
session_start();

$chairId = "chair";
$chairPwd = "123";

$reviewerId = "reviewer";
$reviewerPwd = "234";

$authorId = "author";
$authorPwd = "345";

$uId = $_POST["uId"];
$uPwd = $_POST["uPwd"];
$role = $_POST["role"];

if ($role === "Chair" && $uId === $chairId && $uPwd === $chairPwd) {
    $_SESSION["role"] = "Chair";
    header("Location: chair.php");
} elseif ($role === "Reviewer" && $uId === $reviewerId && $uPwd === $reviewerPwd) {
    $_SESSION["role"] = "Reviewer";
    header("Location: reviewer.php");
} elseif ($role === "Author" && $uId === $authorId && $uPwd === $authorPwd) {
    $_SESSION["role"] = "Author";
    header("Location: author.php");
} else {
    header("Location: fail.php");
}
?>

