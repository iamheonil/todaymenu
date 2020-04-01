<?php
    $conn = mysqli_connect("localhost", "root", "gjsdlf114");
    mysqli_select_db($conn, "term");
    $sql = "INSERT INTO new (nick, password, myself, created) VALUES('".$_POST["nick"]."', '".$_POST["password"]."', '".$_POST["myself"]."', now())";
    $result = mysqli_query($conn, $sql);
    header('Location: http://localhost/index.html');
    exit();
?>