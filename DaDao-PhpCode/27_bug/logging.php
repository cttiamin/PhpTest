<?php
$file_name="access.log";	//定义日志文件
$fp=fopen($file_name,"r");							//打开日志文件
$count=0;									//定义访问量变量
$totle_size=0;									//定义访问数据流量变量
echo "<table border='1'><tr><td>日期</td><td>访问ip</td><td>数据传输量</td></tr>";
											//显示表头
while ($row=fgets($fp)) {							//按行遍历日志文件
	$array=explode(",","$row");						//通过逗号分隔日志文件每一行
	$date=substr($array[1],1,11);						//对日期进行截串操作
	$ip=$array[0];								//得到访问IP
	$data_size=(int)$array[2];							//得到访问数据大小
	echo "<tr><td>$date</td><td>$ip</td><td>$data_size</td></tr>";//将日期，IP和数据流量输出
	$count++;									//访问量自加
	$totle_size+=$data_size;							//访问数据流量累加
}
echo "</table><table border='1'><tr><td>总访问量</td><td>总数据流量</td></tr>
		<tr><td>$count</td><td>$totle_size</td></tr></table>";	//输出总访问量和总数据流量
?>
