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
    <script defer src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src=js/bootstrap.js></script>
    <script>
        function check() {
            if (!food.foodname.value) {
                alert("음식점명을 입력하세요");
                return false;
            }

            function check_space() {
                if (!food.foodname.value) {
                    foodname == '';
                    alert("빈칸은 허용하지 않습니다.");
                    exit;
                    return false;
                }
            }
            return true;
        }

        function check_food() {
            window.open('checkfood.php?foodname=' + document.food.foodname.value, 'foodcheck', 'left=230, top=230, width=480, height=350, scrollbars=no, resizable=yes');

        }

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

        <!-- 이번페이지의 메인부분 시작 -->
        <p>
            <center>
                <img src="https://www.kuromon-sanpei.co.jp/wp-content/uploads/2013/08/top01.jpg" style="width:65%" alt="등록에 감사드립니다.">
            </center>
        </p>
        <div class="container">
            <form action="/php/register.php" method="POST" onsubmit="return check()" name="food">
                <div class="page-header">
                    <h1>오늘 뭐 먹지? <small>음식점 등록</small></h1>
                </div>
                <p>
                    음식점 이름 : <input type="text" name="foodname" id="foodname" placeholder="음식점 이름">

                    <input type="button" name="btn_checkfood" value="음식점이름 중복체크" onclick="check_food()">
                </p>
                <p>음식 종류 선택 :
                    <select name="foodkind" data-native-menu="false" data-mini="true" data-inline="true" name="foodkind">
                    <option value="미정">미정</option>
                    <option value="한식">한식</option>
                    <option value="양식">양식</option>
                    <option value="중식">중식</option>
                    <option value="일식">일식</option>
                    <option value="치킨">치킨</option>
                    <option value="보쌈">보쌈</option>
                    <option value="안주">안주</option>
                    <option value="패스트푸드">패스트푸드</option>
                    <option value="분식">분식</option>
                    <option value="디저트">디저트</option>
                </select>
                </p>
                <p>지역 선택 :
                    <select name="foodlocal" data-native-menu="false" data-mini="true" data-inline="true" name="foodlocal">
                    <option value="미정">미정</option>
                    <option value="서울">서울</option>
                    <option value="경기">경기</option>
                    <option value="인천">인천</option>
                    <option value="강원">강원</option>
                    <option value="부산">부산</option>
                    <option value="대구">대구</option>
                    <option value="광주">광주</option>
                    <option value="대전">대전</option>
                    <option value="울산">울산</option>
                    <option value="충청북도">충청북도</option>
                    <option value="충청남도">충청남도</option>
                    <option value="경상북도">경상북도</option>
                    <option value="경상남도">경상남도</option>
                    <option value="전라북도">전라북도</option>
                    <option value="전라남도">전라남도</option>
                    <option value="제주도">제주특별시</option>
                </select>
                </p>
                <p>
                    음식점의 자세한 위치 :
                    <p><textarea name="foodjuso" rows="1" cols="159" placeholder="음식점의 자세한 위치 기재"></textarea></p>
                </p>
                <p>
                    음식첨 전화번호 : <input type="text" name="foodcall" placeholder="예) 010-000-0000">
                </p>
                <p>
                    음식점 소개 :
                    <p><textarea name="foodinfo" rows="4" cols="159" placeholder="음식점을 소개해주세요!"></textarea></p>
                </p>
                <p>
                    음식점 대표음식의 가격 :
                    <p><textarea name="fooddeal" rows="1" cols="159" placeholder="가장 대표적인 음식의 가격 ex) 19,000원!"></textarea></p>
                </p>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-info">작성완료<i class="fa fa-check spaceLeft"></i></button>
                    <button type="submit" class="btn btn-warning">작성취소<i class="fa fa-times spaceLeft"></i></button>
                </div>
        </div>
        </form>
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
