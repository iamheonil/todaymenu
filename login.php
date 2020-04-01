<!DOCTYPE HTML>
<!-- primary - 파란색 success - 초록색 warning - 금색 info - 네이비 danger - 빨간색 -->

<html lang="ko">

<head>
    <meta charset="utf-8">
    <title>오늘 뭐 먹지?</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script defer src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src=js/bootstrap.js></script>
</head>


<body>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- 상단바 시작 -->
        <!-- Fixed navbar -->
        <nav id="header" class="navbar navbar-fixed-top">
            <div id="loginarea" style="float:right;">
                <ul class="loginarea" class="collapse navbar-collapse">
                <a href="login.php">
                    <strong><a href="./login.php">로그인</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="./join.html">회원가입</a></strong>
                </a>
                </ul>
            </div>
            <div id="header-container" class="container navbar-container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a id="brand" class="navbar-brand" href="index.html">오늘 뭐 먹지?</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="intro"><a href="intro.php"><strong>오늘 뭐 먹지? 소개</strong></a></li>
                        <li><a href="search.php"><strong>음식점 검색하기</strong></a></li>
                        <li><a href="near.php"><strong>내 주변 음식점 찾기</strong></a></li>
                        <li><a href="register.php"><strong>음식점 등록</strong></a></li>
                        <li><a href="ohchelin.php"><strong>오슐랭가이드</strong></a></li>
                        <li><a href="appraisal.php"><strong>맛집 평가하기</strong></a></li>
                    </ul>
                </div>
            </div>
        </nav>


        <!-- 상단바 끝 -->
        <div class="container">
            <p>
                <center>
                    <br>
                    <br>
                    <br>
                    <br>
                    <img src="http://nightwalk.jp/img/top-3.jpg" style="width:70%">
                </center>
            </p>
            <div class="page-header">
                <h1>오늘 뭐 먹지? <small>Login</small></h1>
            </div>
            <div class="header">
                <h2>Login</h2>
            </div>

            <?php
$conn = mysqli_connect("localhost", "root", "gjsdlf114");
session_start();
mysqli_select_db($conn, "term");
            
if($_SERVER["REQUEST_METHOD"] == "POST")
{
//    $sql = "SELECT * FROM new WHERE nick ='".$_GET['nick']."' '".$_GET['password']."'";

    $nick = mysqli_real_escape_string($conn, $_POST['nick']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
        
    $sql = "SELECT * FROM new WHERE nick = '$nick' && password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    
    
if($count == 1)
{
    echo "<script>window.alert('어서오세요옷! 고갱님 기다리고 있었습니다.');</script>";
    echo "<script>location.href='index2.php';</script>";
    $_SESSION['is_login'] = true;
    $_SESSION['nick'] = $nick;
    header('Location: ./index2.php');
    exit;
}
else
{
    echo "<script>window.alert('로그인에 실패하였습니다. 아이디/비밀번호를 확인해주세요.');</script>";
}
}
  
?>
                <form method="post" action="login.php">
                    <div class="input-group">
                        <label>아이디</label>
                        <input type="text" name="nick" id="nick">
                    </div>
                    <div class="input-group">
                        <label>비밀번호</label>
                        <input type="password" name="password" id="password">
                    </div>
                    <div class="input-group">
                        <button type="submit" class="btn btn-info" name="login">로그인</button>
                    </div>
                </form>
        </div>
    </div>
</body>
<br>
<br>
<br>
<br>
<footer>
    <div class="container">
        <font color="white">
            <div class="row">
                <h2><strong>TODAY What should I Eat?</strong></h2>
                <p style="float: right; font-size: 24px;">
                    <strong>문의</strong><br> iamheonil@gmail.com
                </p>
                <p>
                    주소 : 경기도 남양주시 골방<br> 대표전화 : 010-4175-7452 대표 : 김헌일 | 사업자 등록번호 : <br> 오늘 뭐먹지? 에서 사용하는 글꼴들은<br> 부트스트랩에서 기본으로 제공하는 글꼴을 받아 사용중입니다.
                </p>
            </div>
        </font>
</footer>


</html>
