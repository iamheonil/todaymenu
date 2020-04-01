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
    <script>
        function check() {
            if (!register.nick.value) {
                alert("아이디를 입력하세요");
                !register.nick.focus();
                return false;
            }
            if (!register.password.value) {
                alert("패스워드를 입력하세요");
                return false;
            }
            if (!register.btn_checkid.value) {
                alert("ID 중복체크를 하세요");
                return false;
            }
            return true;
        }

        function check_id() {
            window.open('checkid.php?nick=' + document.register.nick.value, 'IDcheck', 'left=230, top=230, width=480, height=350, scrollbars=no, resizable=yes');

        }

        function refresh() {
            setTimeout("document.location.reload()", 4000);
        }

        function pw_Check() {
            var password = document.getElementById("password").value;
            var passwordCheck = document.getElementById("password_chk").value;

            if (passwordCheck == "") {
                document.getElementById("pwchecktext").innerHTML = "";
            } else if (password != passwordCheck) {
                document.getElementById("pwchecktext").innerHTML = "<b> 패스워드가 일치하지 않습니다. </b>";
            } else {
                document.getElementById("pwchecktext").innerHTML = "<b> 패스워드가 일치 합니다.</b>";
            }
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
                <h1>오늘 뭐 먹지? <small>회원탈퇴</small></h1>
            </div>

            <!-- 상단바 끝 -->
            <link rel="stylesheet" type="text/css" href="style.css">

            <div class="header">
                <h2>오늘 뭐 먹지? 회원탈퇴</h2>
            </div>

            <form action="php/drop.php" method="POST" name="register" onsubmit="return check()">
                <center>
                    <br>
                    <p>
                        <h4>회원 탈퇴 안내</h4><br>
                        <h2>[회원탈퇴 약관]</h2>
                        회원탈퇴를 신청하시면 현재 로그인 된 아이디는 자동 로그아웃되며 재가입 후 서비스를 사용할 수 있습니다.<br>
                    </p>
                    <br>
                    <br>
                    <h1>
                        <?php echo $_SESSION['nick'];?> 고객님 </h1>
                    <h1>정말 탈퇴하시겠습니까?</h1>
                    <br>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-info">회원탈퇴<i class="fa fa-check spaceLeft"></i></button>
                    <button type="reset" class="btn btn-warning">취소<i class="fa fa-times spaceLeft"></i></button>

            </form>

            <!--
                <form action="php/join.php" method="POST" name="register" onsubmit="return check()">
                    <p>
                        아이디: <input type="text" name="nick" id="nick"> <input type="button" name="btn_checkid" value="아이디 중복체크" onclick="check_id()"><br>
                    </p>
                    <p>
                        비밀번호: <input type="password" name="password" id="password"> <br>
                    </p>
                    <p>
                        비밀번호 확인: <input type="password" name="password_chk" id="password_chk" onkeyup="pw_Check()">
                    </p>
                    <p id="pwchecktext" width=1000, height=100></p>
                    <p>
                        자기소개 :
                        <p><textarea name="myself" rows="4" cols="159" placeholder="자기소개"></textarea></p>
                    </p>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-info">회원가입<i class="fa fa-check spaceLeft"></i></button>
                        <button type="submit" class="btn btn-warning">가입취소<i class="fa fa-times spaceLeft"></i></button>
                    </div>


                </form>
-->

</body>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

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
