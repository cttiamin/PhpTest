<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>break语句的应用</title>
</head>

<body>
<?php 
	//第一个双重循环语句
		for($a=1;$a<=5;$a++){ 	// 外层循环开始
			for($b=1;$b<=5;$b++){	//内层循环开始
				echo $a.$b."<br>";	
				break;				//只终止内层循环
			}
		}
		echo "<br>";
	//第二个双重循环语句
		for($a=1;$a<=5;$a++){		//外层循环开始
			for($b=1;$b<=5;$b++){	//内层循环开始	
				echo $a.$b."<br>";	
				break 2;			//终止双重循环
			}
		}

?>
</body>
</html>
