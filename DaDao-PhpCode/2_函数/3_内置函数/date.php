<?php
	echo date("Y年 n月 j日 H:i a ");
	//string date();
	echo "<br>";
	
	echo "调用date()函数的结果为：".date("Y年n月j日 H：i：s a ");
	echo"<br>";
	echo "调用gmdate()函数的结果为：".gmdate("Y年n月j日 H：i：s a ",mktime (0,0,0,12,32,2008));
		
?>