<?php
$db_name='sqlite.db';//���ݿ���
$conn=new SQLiteDatabase($db_name, 0644, $error);//��ȡ���ݿ����Ӷ���
$conn ->Query("CREATE TABLE test ( id INTEGER NOT NULL PRIMARY KEY , 
title VARCHAR ( 25 ) NOT NULL , content VARCHAR ( 50 ) NOT NULL )");
$conn ->Query("INSERT INTO test (id, title, content) VALUES (1,'news','today.....')");
$result_info=$conn->arrayQuery("select * from test");//��ȡ�����
foreach($result_info as $val){//������
print_r($val);
}
?>
