<!DOCTYPE HTML>
<!-- primary - 파란색 success - 초록색 warning - 금색 info - 네이비 danger - 빨간색 -->

<html lang="ko">

<head>
    <meta charset="utf-8">
    <title>오늘 뭐 먹지?</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            //맛집 정보 조회 페이지 시작
            //목록 검색 버튼 클릭
            $('#listsearch').click(function() {
                selectList();
            });
            //맛집 정보 조회 페이지 끝       
        });

    </script>

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
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="container">
            <p>
                <center>
                    <img src="http://nightwalk.jp/img/top-3.jpg" style="width:70%">
                </center>
            </p>
            <div class="page-header">
                <h1>오늘 뭐 먹지? <small>검증 된 맛집을 보여드립니다.</small></h1>
            </div>
            <div class="wrapper">
                <ul>
                    <li class="sq-item sq-item-large">
                        <a class="sq-item-anchor" href="/korea.php">
                        <img class="sq-item-anchor-cover" src="image/korea.jpg">
                        <span class="sq-item-anchor-title">한식</span>
                    </a>
                    </li>
                    <li class="sq-item">
                        <a class="sq-item-anchor" href="/america.php">
                        <img class="sq-item-anchor-cover" src="image/america.jpg">
                        <span class="sq-item-anchor-title">양식</span>
                    </a>
                    </li>
                    <li class="sq-item">
                        <a class="sq-item-anchor" href="/china.php">
                        <img class="sq-item-anchor-cover" src="image/china.jpg">
                        <span class="sq-item-anchor-title">중식</span>
                    </a>
                    </li>
                    <li class="sq-item">
                        <a class="sq-item-anchor" href="/japan.php">
                        <img class="sq-item-anchor-cover" src="image/japan.jpg">
                        <span class="sq-item-anchor-title">일식</span>
                    </a>
                    </li>
                    <li class="sq-item sq-item-long sq-item-float-right">
                        <a class="sq-item-anchor" href="chi.php">
                        <img class="sq-item-anchor-cover" src="image/chi.jpg">
                        <span class="sq-item-anchor-title">치킨</span>
                    </a>
                    </li>
                    <li class="sq-item">
                        <a class="sq-item-anchor" href="/bossam.php">
                        <img class="sq-item-anchor-cover" src="image/bossam.jpg">
                        <span class="sq-item-anchor-title">보쌈</span>
                    </a>
                    </li>
                    <li class="sq-item">
                        <a class="sq-item-anchor" href="/anju.php">
                        <img class="sq-item-anchor-cover" src="image/anju.jpg">
                        <span class="sq-item-anchor-title">안주</span>
                    </a>
                    </li>
                    <li class="sq-item">
                        <a class="sq-item-anchor" href="/fastfood.php">
                        <img class="sq-item-anchor-cover" src="image/fastfood.jpg">
                        <span class="sq-item-anchor-title">패스트푸드</span>
                    </a>
                    </li>
                    <li class="sq-item sq-item-wide">
                        <a class="sq-item-anchor" href="bunsik.php">
                        <img class="sq-item-anchor-cover" src="image/bunsik.jpg">
                        <span class="sq-item-anchor-title">분식</span>
                    </a>
                    </li>
                    <li class="sq-item">
                        <a class="sq-item-anchor" href="dessert.php">
                        <img class="sq-item-anchor-cover" src="image/dessert.jpg">
                        <span class="sq-item-anchor-title">디저트</span>
                    </a>
                    </li>
                </ul>
            </div>

            <div class="clearfix visible-lg">
            </div>
            <br>
            <br>
            <br>

            <a name="result">
            </a>
            <center>

                <?php
$conn = mysqli_connect('localhost','root','gjsdlf114');
mysqli_select_db($conn,'term');
$query = "SELECT * FROM `food` WHERE foodkind like '치킨'";

$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$row2 = mysqli_fetch_assoc($result);
$row3 = mysqli_fetch_assoc($result);
$row4 = mysqli_fetch_assoc($result);
$row5 = mysqli_fetch_assoc($result);
$row6 = mysqli_fetch_assoc($result);            
$row7 = mysqli_fetch_assoc($result);
$row8 = mysqli_fetch_assoc($result);
$row9 = mysqli_fetch_assoc($result);
$row10 = mysqli_fetch_assoc($result);
$row11 = mysqli_fetch_assoc($result);
                
echo "<TABLE BORDER=0 width=1350 height=30 align=left><TR>",
    "<TD>",$row['foodkind'],"</TD>",
    "<TD>",$row['foodname'],"</TD>",
    "<TD>",$row['foodlocal'],"</TD>",
    "<TD>",$row['foodjuso'],"</TD>",
    "<TD>",$row['foodcall'],"</TD>",
    "<TD>",$row['foodinfo'],"</TD>",
    "<TD>",$row['fooddeal'],"</TD>",
    "</TR></TABLE>";
echo "<TABLE BORDER=0 width=1350 height=30 align=left><TR>",
    "<TD>",$row2['foodkind'],"</TD>",
    "<TD>",$row2['foodname'],"</TD>",
    "<TD>",$row2['foodlocal'],"</TD>",
    "<TD>",$row2['foodjuso'],"</TD>",
    "<TD>",$row2['foodcall'],"</TD>",
    "<TD>",$row2['foodinfo'],"</TD>",
    "<TD>",$row2['fooddeal'],"</TD>",
    "</TR></TABLE>";
echo "<TABLE BORDER=0 width=1350 height=30 align=left><TR>",
    "<TD>",$row3['foodkind'],"</TD>",
    "<TD>",$row3['foodname'],"</TD>",
    "<TD>",$row3['foodlocal'],"</TD>",
    "<TD>",$row3['foodjuso'],"</TD>",
    "<TD>",$row3['foodcall'],"</TD>",
    "<TD>",$row3['foodinfo'],"</TD>",
    "<TD>",$row3['fooddeal'],"</TD>",
    "</TR></TABLE>";
echo "<TABLE BORDER=0 width=1350 height=30 align=left><TR>",
    "<TD>",$row4['foodkind'],"</TD>",
    "<TD>",$row4['foodname'],"</TD>",
    "<TD>",$row4['foodlocal'],"</TD>",
    "<TD>",$row4['foodjuso'],"</TD>",
    "<TD>",$row4['foodcall'],"</TD>",
    "<TD>",$row4['foodinfo'],"</TD>",
    "<TD>",$row4['fooddeal'],"</TD>",
    "</TR></TABLE>";
echo "<TABLE BORDER=0 width=1350 height=30 align=left><TR>",
    "<TD>",$row5['foodkind'],"</TD>",
    "<TD>",$row5['foodname'],"</TD>",
    "<TD>",$row5['foodlocal'],"</TD>",
    "<TD>",$row5['foodjuso'],"</TD>",
    "<TD>",$row5['foodcall'],"</TD>",
    "<TD>",$row5['foodinfo'],"</TD>",
    "<TD>",$row5['fooddeal'],"</TD>",
    "</TR></TABLE>";
echo "<TABLE BORDER=0 width=1350 height=30 align=left><TR>",
    "<TD>",$row6['foodkind'],"</TD>",
    "<TD>",$row6['foodname'],"</TD>",
    "<TD>",$row6['foodlocal'],"</TD>",
    "<TD>",$row6['foodjuso'],"</TD>",
    "<TD>",$row6['foodcall'],"</TD>",
    "<TD>",$row6['foodinfo'],"</TD>",
    "<TD>",$row6['fooddeal'],"</TD>",
    "</TR></TABLE>";
echo "<TABLE BORDER=0 width=1350 height=30 align=left><TR>",
    "<TD>",$row7['foodkind'],"</TD>",
    "<TD>",$row7['foodname'],"</TD>",
    "<TD>",$row7['foodlocal'],"</TD>",
    "<TD>",$row7['foodjuso'],"</TD>",
    "<TD>",$row7['foodcall'],"</TD>",
    "<TD>",$row7['foodinfo'],"</TD>",
    "<TD>",$row7['fooddeal'],"</TD>",
    "</TR></TABLE>";
echo "<TABLE BORDER=0 width=1350 height=30 align=left><TR>",
    "<TD>",$row8['foodkind'],"</TD>",
    "<TD>",$row8['foodname'],"</TD>",
    "<TD>",$row8['foodlocal'],"</TD>",
    "<TD>",$row8['foodjuso'],"</TD>",
    "<TD>",$row8['foodcall'],"</TD>",
    "<TD>",$row8['foodinfo'],"</TD>",
    "<TD>",$row8['fooddeal'],"</TD>",
    "</TR></TABLE>";
echo "<TABLE BORDER=0 width=1350 height=30 align=left><TR>",
    "<TD>",$row9['foodkind'],"</TD>",
    "<TD>",$row9['foodname'],"</TD>",
    "<TD>",$row9['foodlocal'],"</TD>",
    "<TD>",$row9['foodjuso'],"</TD>",
    "<TD>",$row9['foodcall'],"</TD>",
    "<TD>",$row9['foodinfo'],"</TD>",
    "<TD>",$row9['fooddeal'],"</TD>",
    "</TR></TABLE>";
echo "<TABLE BORDER=0 width=1350 height=30 align=left><TR>",
    "<TD>",$row10['foodkind'],"</TD>",
    "<TD>",$row10['foodname'],"</TD>",
    "<TD>",$row10['foodlocal'],"</TD>",
    "<TD>",$row10['foodjuso'],"</TD>",
    "<TD>",$row10['foodcall'],"</TD>",
    "<TD>",$row10['foodinfo'],"</TD>",
    "<TD>",$row10['fooddeal'],"</TD>",
    "</TR></TABLE>";
?>
            </center>
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
    </div>
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
