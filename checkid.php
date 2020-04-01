<!--
<script>
    function newDoc(){
        window.location.assign("localhost/index.html")
    }
</script>
-->
<?php
$conn = mysqli_connect('localhost','root','gjsdlf114');
mysqli_select_db($conn,'term');
 
$sql = "SELECT * FROM new WHERE nick ='".$_GET['nick']."'";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);
 
if($count == 0){
    echo "사용가능한 아이디입니다.";
    /*
    echo("
    <html>
        <head>
        <script name=javascript>
            <input type="button" value="re">확인</button>
        </script>
        </head>
       </html>
    ");
    */
    //echo "<input type="button" value="새 문서 로드" onclick="newDoc()">";
}
else{
    echo "중복된 아이디입니다. 다른아이디를 입력해주세요.";
    echo "<script>location.reload();</script>";
}

?>