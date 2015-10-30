<?php
$db_host="localhost";
$db_user="root";
$db_psw="root";
$db_name="sunyang";
$mysqli=new mysqli($db_host,$db_user,$db_psw,$db_name)  ;
$query="select * from employee";
$result=$mysqli->prepare($query);// 进行预准备语句查询
$result->execute();//执行预准备语句
$result->bind_result($id,$number,$name,$age);//绑定结果
while ($result->fetch()) {
	 echo $id;
echo $number;
	 echo $name;
	 echo $age;
}
$result->close();//关闭预准备语句
$mysqli->close();//关闭连接
?>
