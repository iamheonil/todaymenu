<?php
$conn = mysqli_connect('localhost','root','gjsdlf114');
mysqli_select_db($conn,'term');
 
$sql = "SELECT * FROM new WHERE nick ='".$_GET['nick']."'";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);
 
if($count == 0){
    echo '<script>alert('사용 가능합니다');</script>'
}
else{
    echo '<script>alert('사용 불가능합니다');</script>'
    exit();
}

?>
