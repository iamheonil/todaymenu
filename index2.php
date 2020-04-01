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

    <!-- 이미지 슬라이드 -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- 슬라이드 몇페이지인지 띄워주는 점박이들 -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
        </ol>
        <!-- 점박이들 끝 -->

        <div class="carousel-inner">
            <!-- 첫번째 슬라이드 -->
            <div class="item active">
                <img src="http://pds27.egloos.com/pds/201505/11/81/c0008181_5550154377e0e.jpg" style="width:100%" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>오늘 뭐 먹지? 방문을 환영합니다!</h1>
                        <p>야심한 밤 야식 뭐 먹지!?</p>
                    </div>
                </div>
            </div>
            <!-- 첫번째 슬라이드 끝 -->

            <!-- 두번째 슬라이드 -->
            <div class="item">
                <img src="http://pds26.egloos.com/pds/201411/09/81/c0008181_545f5bea49ec3.jpg" style="width:100%" data-src="" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>"이거 아주 고급지쥬?"</h1>
                        <p>서양식 고급 샌드위치?</p>
                    </div>
                </div>
            </div>
            <!-- 두 끝 -->

            <!-- 세 슬 시 -->
            <div class="item">
                <img src="http://nightwalk.jp/img/top-2.jpg" style="width:100%" data-src="" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>아~! 일본 가고 십다</h1>
                        <p>후각, 미각, 청각! 모든걸 다 잡은 일본의 일식?</p>
                    </div>
                </div>
            </div>
            <!-- 세 슬 끝 -->

            <!-- 네 슬 시 -->
            <div class="item">
                <img src="http://pds26.egloos.com/pds/201411/09/81/c0008181_545f5be4554c9.jpg" style="width:100%" data-src="" alt="Four slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>스테이크 맛있게 쓸어먹어야죠!</h1>
                        <p>분위기 있는 불금의 밤! 쓸어먹는 스테이크?</p>
                    </div>
                </div>
            </div>
            <!-- 네 슬 끝 -->

            <!-- 다 슬 시 -->
            <div class="item">
                <img src="http://nightwalk.jp/img/top-3.jpg" style="width:100%" data-src="" alt="Five slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>화려한 네온싸인 그 앞에 즐비한 길거리 포장마차</h1>
                        <p>서서 먹는 재미가 일품! 환상적인 길거리 음식?</p>
                    </div>
                </div>
            </div>
            <!-- 다 슬 끝 -->

            <!-- 육 슬 시 -->
            <div class="item">
                <img src="http://ishikawa-kaga-hakusan.jp/wp/wp-content/uploads/2017/02/123-1-1-1200x500.jpg" style="width:100%" data-src="" alt="Six slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>대게가 대게 맛있다던데</h1>
                        <p>세상 모든것을 맛 보고 싶으신가요? 잘 오셨습니다! 오늘 뭐 먹지?</p>
                    </div>
                </div>
            </div>
            <!-- 육 슬 끝 -->
        </div>
        <!-- 좌, 우에 배치 된 슬라이드 화살표들 (앞으로 뒤로) -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
    <!-- 이미지 슬라이드 끝 -->

    <br>
    <!-- 본문 시작 -->
    <div class="container">
        <div class=Insertcode>
            <img src="http://img.etnews.com/photonews/1705/952545_20170514171704_342_0001.jpg" width="500" height="500">
            <div class=pull-right>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <h3>
                    한식 양식 일식 중식? 어떤 요리든 상관 없습니다!<br> 장소 시간 상관없이 효과적으로 메뉴를 선정합니다.
                </h3>
            </div>
        </div>
        <div class=Insertcode>
            <div class=pull-Left>
                <br>
                <br>
                <br>
                <br>
                <br>
                <h3>
                    장소 시간 상관없이 효과적으로 메뉴를 선정합니다.
                    <img src="http://img.etnews.com/photonews/1705/952545_20170514171704_342_0001.jpg" width="450" height="450">
                </h3>
            </div>
        </div>
        <div class=Insertcode>
            <img src="http://img.etnews.com/photonews/1705/952545_20170514171704_342_0001.jpg" width="450" height="450">
            <div class=pull-right>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <h3>
                    한식 양식 일식 중식? 어떤 요리든 상관 없습니다!<br> 장소 시간 상관없이 효과적으로 메뉴를 선정합니다.
                </h3>
            </div>
        </div>
        <div class=Insertcode>
            <div class=pull-Left>
                <br>
                <br>
                <br>
                <br>
                <br>
                <h3>
                    장소 시간 상관없이 효과적으로 메뉴를 선정합니다.
                    <img src="http://img.etnews.com/photonews/1705/952545_20170514171704_342_0001.jpg" width="450" height="450">
                </h3>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div style="text-align:center">
            <strong><h1>오늘 뭐 먹지 항상 고민하셨나요 ?</h1></strong>
            <h3>
                <p>
                    놉! 놉! 더 이상 고민하실 필요가 없습니다..<br> 왜냐하면 오늘 뭐 먹지가 있기 때문이죠!<br> 아래의 버튼을 일단 눌러보세요! 메뉴 선택의 신 세계가 열립니다!
                </p>
            </h3><br>
            <!-- 오늘의 메뉴는 버튼 -->
            <center>
                <input type="button" id="button1" class="btn btn-info btn-lg" onclick="ranData1();" span class="glyphicon glyphicon-search;" value="오늘의 메뉴는?" style=width:200px;height:80px; />
                <script>
                    // 메뉴 정하기 소스
                    var generateRandom = function(min, max) {
                        var ranNum = Math.floor(Math.random() * (max - min + 1)) + min;
                        return ranNum;
                    }

                    function ranData1() {
                        var jum = new Array();
                        jum[0] = "치즈밥";
                        jum[1] = "라면과함께라면";
                        jum[2] = "순댓국";
                        jum[3] = "치밥(치킨에밥)";
                        jum[4] = "치밥(치즈밥)";
                        jum[5] = "돈가쓰";
                        jum[6] = "칸규동";
                        jum[7] = "맘스터치";
                        jum[8] = "나무미";
                        jum[9] = "칼국수";
                        jum[10] = "찌개명가";
                        jum[11] = "편의점";
                        jum[12] = "빵";
                        jum[13] = "롯데리아(딜리버리)";
                        jum[14] = "모두랑(분식)";
                        jum[15] = "쿡카페(밥집)";
                        jum[16] = "멸치국수";
                        jum[17] = "삼겹쌈밥";
                        jum[18] = "또보기";
                        jum[19] = "체르니각";
                        jum[20] = "이삭토스트";
                        jum[21] = "밥풀";
                        jum[22] = "지지고";
                        jum[23] = "한솥";
                        jum[24] = "토마토";
                        jum[25] = "쉐프밥버거";
                        jum[26] = "봉구스밥버거";
                        jum[27] = "학식";
                        jum[28] = "PC방라면ㅅㅅ";
                        jum[29] = "엄마손"
                        jum[30] = "코렁탕";
                        jum[31] = "라면파티(치즈밥 옆)"
                        jum[32] = "다시 돌려!";

                        var whichquote = Math.floor(Math.random() * (jum.length));
                        alert((jum[whichquote])); // 이거 하나만 내비둬야 결과 하나나옴 -> alert 로 하나씩 팝업으로 출력
                        // alert("..:" + ranData1());  << 이거 주석 없애면 존~나 많이나옴
                    }

                </script>
            </center>
            <!-- 오늘의 메뉴는 버튼 끝 -->
        </div>
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
