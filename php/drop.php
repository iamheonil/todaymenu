<?php
session_start();

$conn = mysqli_connect('localhost','root','gjsdlf114');
mysqli_select_db($conn,'term');

$sql = "DELETE FROM new WHERE NICK='".$_SESSION["nick"]."'";
// $sql = "SELECT * FROM new WHERE nick ='".$_GET['nick']."'";

if (mysqli_query($conn, $sql)) {
    header('Location: http://localhost/index2.php');
} else {
    echo "삉.. 에러가 나버렸습니다: " . mysqli_error($conn);
}

mysqli_close($conn);
session_destroy();
?>