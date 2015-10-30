<?php
//query

$dsn = 'mysql:dbname=sanyang;host=localhost';
$user_name = 'root';
$user_psw = '123456';
$pdo = new PDO($dsn, $user_name, $user_psw);
$query="select * from employee";
foreach ( $pdo->query($query) as $row){//输出结果集中的数据
print $row['emp_id']."<br>";
print $row['emp_number']."<br>";
echo $row['emp_name']."<br>";
echo $row['emp_age']."<br>";
}
?>