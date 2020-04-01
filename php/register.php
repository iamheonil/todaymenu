<?php
    $conn = mysqli_connect("localhost", "root", "gjsdlf114");
    mysqli_select_db($conn, "term");
    $sql = "INSERT INTO food (foodname, foodlocal, foodkind, foodjuso, foodcall, foodinfo, fooddeal,created) VALUES('".$_POST["foodname"]."', '".$_POST["foodlocal"]."',   '".$_POST["foodkind"]."','".$_POST["foodjuso"]."', '".$_POST["foodcall"]."', '".$_POST["foodinfo"]."', '".$_POST["fooddeal"]."',now())";
    $result = mysqli_query($conn, $sql);
    header('Location: http://localhost/register.php');
    exit();
?>
