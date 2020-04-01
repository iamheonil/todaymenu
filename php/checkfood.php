<?php
$conn = mysqli_connect('localhost','root','gjsdlf114');
mysqli_select_db($conn,'term');
 
$sql = "SELECT * FROM food WHERE foodname ='".$_GET['foodname']."'";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);
 
if($count == 0){
    echo "등록가능한 음식점 이름입니다.";
}
else{
    echo "이미 등록 되어있습니다. 등록을 해도 반송 됩니다.";
    exit();
}
?>