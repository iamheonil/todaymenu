<!DOCTYPE HTML>
<!-- primary - 파란색 success - 초록색 warning - 금색 info - 네이비 danger - 빨간색 -->

<html lang="ko">

<head>
    <meta charset="utf-8">
    <title>오늘 뭐 먹지?</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- 상단바 시작 -->
        <!-- Fixed navbar -->
        <nav id="header" class="navbar navbar-fixed-top">
            <div id="loginarea" style="float:right;">
                <ul class="loginarea" class="collapse navbar-collapse">
                    <?php
session_start();

if(!isset($_SESSION['is_login'])){
    header('Location: ./login.php');
}
?>
                        <a href="login.php">
                            <?php echo $_SESSION['nick'];?> 님 안녕하세요!</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="./modify.php">정보수정</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="./logout.php">로그아웃</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="./drop.php">회원탈퇴</a>
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


        <!-- ################################################################################################## -->
        <center>
            <h1>intro 페이지 여기다 내용 삽입</h1>
            <h1>intro 페이지 여기다 내용 삽입</h1>
            <h1>intro 페이지 여기다 내용 삽입</h1>
            <h1>intro 페이지 여기다 내용 삽입</h1>
            <h1>intro 페이지 여기다 내용 삽입</h1>
            <h1>intro 페이지 여기다 내용 삽입</h1>
            <h1>intro 페이지 여기다 내용 삽입</h1>
            <h1>intro 페이지 여기다 내용 삽입</h1>
            <h1>intro 페이지 여기다 내용 삽입</h1>
            <h1>intro 페이지 여기다 내용 삽입</h1>
            <h1>intro 페이지 여기다 내용 삽입</h1>
            <h1>intro 페이지 여기다 내용 삽입</h1>
            <h1>intro 페이지 여기다 내용 삽입</h1>
        </center>
        <!-- ################################################################################################## -->


        <div class="clearfix visible-lg"></div>
    </div>
    <!-- 본문 끝 -->
    <script defer src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src=js/bootstrap.js></script>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

</body>
<!-- 푸터 만들어야지! -->
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
