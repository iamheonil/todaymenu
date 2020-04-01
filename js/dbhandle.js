// 데이터베이스 생성 및 열기
function openDB(){
    db = window.openDatabase('cafeDB', '1.0', '카페DB', 1024*1024);
    /* console.log 구문은 크롬에서 f12 눌러서 console 창에서 확인 요망 */
    console.log('1_db 생성...');
}  
 
// 테이블 생성 트랜잭션 실행
function createTable(){
    db.transaction(function( tr ){
        var createSql = 'create table if not exists cafe(
            id integer primary key autoincrement, 
            name varchar(20) not null unique, 
            type varchar(20), score integer, 
            region varchar(20), phone varchar(20), 
            address varchar(30), memo varchar(200), 
            pic varchar(50))'; 
 
        tr.executeSql(createSql, [], function(){
            console.log('2_1_테이블생성_sql 실행 성공...');        
        }, function(){
            console.log('2_1_테이블생성_sql 실행 실패...');            
        });
    }, function(){
        console.log('2_2_테이블 생성 트랜잭션 실패...롤백은 자동');
    }, function(){
        console.log('2_2_테이블 생성 트랜잭션 성공...');
    });
}

function insertCafe(){ 
    db.transaction(function(tr){
        var name = $('#cafeName1').val(); //맛집 이름
        var type = $('#cafeType1').val(); //업종
        var score = $('#cafeScore1').val(); //평가
        var region = $('#cafeRegion1').val(); //지역
        var phone = $('#cafePhone1').val(); //전화
        var address = $('#cafeAddress1').val(); //주소
        var memo = $('#cafeMemo1').val(); //메모
        var pic = $('#cafePic1').val(); //사진
 
        var insertSQL = 'insert into cafe(name, type, score, region, phone, ';
        insertSQL += 'address, memo, pic) values(?,?,?,?,?,?,?,?)';      
 
        tr.executeSql(insertSQL
            , [name, type, score, region, phone, address, memo, pic]
            , function(tr, rs){    
                console.log('3_ 맛집 등록...no: ' + rs.insertId);
                alert('맛집명 ' + $('#cafeName1').val() + ' 이(가) 입력되었습니다');
                
                //모든 값들을 초기화시키기
                $('#cafeType1').val('미정').attr('selected', 'selected'); 
                $('#cafeType1').selectmenu('refresh'); 
                $('#cafeRegion1').val('미정').attr('selected', 'selected'); 
                $('#cafeRegion1').selectmenu('refresh');
                $('#cafeScore12').val('0').slider('refresh'); 
                form1.reset();   
        }, function(){
            alert('맛집명 ' + $('#cafeName1').val() + ' 이(가) 입력 실패하였습니다');           
        });
    });      
 }