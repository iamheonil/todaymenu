// �����ͺ��̽� ���� �� ����
function openDB(){
    db = window.openDatabase('cafeDB', '1.0', 'ī��DB', 1024*1024);
    /* console.log ������ ũ�ҿ��� f12 ������ console â���� Ȯ�� ��� */
    console.log('1_db ����...');
}  
 
// ���̺� ���� Ʈ����� ����
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
            console.log('2_1_���̺����_sql ���� ����...');        
        }, function(){
            console.log('2_1_���̺����_sql ���� ����...');            
        });
    }, function(){
        console.log('2_2_���̺� ���� Ʈ����� ����...�ѹ��� �ڵ�');
    }, function(){
        console.log('2_2_���̺� ���� Ʈ����� ����...');
    });
}

function insertCafe(){ 
    db.transaction(function(tr){
        var name = $('#cafeName1').val(); //���� �̸�
        var type = $('#cafeType1').val(); //����
        var score = $('#cafeScore1').val(); //��
        var region = $('#cafeRegion1').val(); //����
        var phone = $('#cafePhone1').val(); //��ȭ
        var address = $('#cafeAddress1').val(); //�ּ�
        var memo = $('#cafeMemo1').val(); //�޸�
        var pic = $('#cafePic1').val(); //����
 
        var insertSQL = 'insert into cafe(name, type, score, region, phone, ';
        insertSQL += 'address, memo, pic) values(?,?,?,?,?,?,?,?)';      
 
        tr.executeSql(insertSQL
            , [name, type, score, region, phone, address, memo, pic]
            , function(tr, rs){    
                console.log('3_ ���� ���...no: ' + rs.insertId);
                alert('������ ' + $('#cafeName1').val() + ' ��(��) �ԷµǾ����ϴ�');
                
                //��� ������ �ʱ�ȭ��Ű��
                $('#cafeType1').val('����').attr('selected', 'selected'); 
                $('#cafeType1').selectmenu('refresh'); 
                $('#cafeRegion1').val('����').attr('selected', 'selected'); 
                $('#cafeRegion1').selectmenu('refresh');
                $('#cafeScore12').val('0').slider('refresh'); 
                form1.reset();   
        }, function(){
            alert('������ ' + $('#cafeName1').val() + ' ��(��) �Է� �����Ͽ����ϴ�');           
        });
    });      
 }