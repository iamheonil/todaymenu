<?php
session_start();

    $conn = mysqli_connect("localhost", "root", "gjsdlf114");
    mysqli_select_db($conn, "term");

    //$sql  = "UPDATE new SET password ='".$_POST["password"]."' WHERE NICK='".$_SESSION["nick"]."'";
    // $self = "UPDATE new SET myself   ='".$_POST["myself"]."'   WHERE NICK='".$_SESSION["nick"]."'";

    $sql = "UPDATE new SET password = '".$_POST["password"]."', myself  ='".$_POST["myself"]."' WHERE NICK='".$_SESSION["nick"]."'";

    if (mysqli_query($conn, $sql, $self)) {
        header('Location: http://localhost/index2.php');
    } else {
        echo "삉.. 에러가 나버렸습니다: " .mysqli_error($conn);
}
mysqli_close($conn);
?>







<!--

    mysqli_select_db($conn, "term");
    $sql = "UPDATE new SET nick = '".$_POST["nick"]."', '".$_POST["password"]."', '".$_POST["myself"]."'";
    $result = mysqli_query($conn, $sql);
    header('Location: http://localhost/index2.php');
    exit();

-->