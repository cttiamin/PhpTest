<?php
$dsn = 'mysql:dbname=sunyang;host=localhost';
$user_name = 'root';
$user_psw = 'root';
$pdo = new PDO($dsn, $user_name, $user_psw);
$query="select * from employee";
foreach ( $pdo->query($query) as $row){//输出结果集中的数据
print $row['emp_id'];
print $row['emp_number'];
echo $row['emp_name'];
echo $row['emp_age'];
}
?>
