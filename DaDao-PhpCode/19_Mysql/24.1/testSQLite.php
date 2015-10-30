<?php
$db_name='sqlite.db';//数据库名
$conn=new SQLiteDatabase($db_name, 0644, $error);//获取数据库连接对象
$conn ->Query("CREATE TABLE test ( id INTEGER NOT NULL PRIMARY KEY , 
title VARCHAR ( 25 ) NOT NULL , content VARCHAR ( 50 ) NOT NULL )");
$conn ->Query("INSERT INTO test (id, title, content) VALUES (1,'news','today.....')");
$result_info=$conn->arrayQuery("select * from test");//获取结果集
foreach($result_info as $val){//输出结果
print_r($val);
}
?>
