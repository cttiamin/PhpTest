<?php
	echo date("Y�� n�� j�� H:i a ");
	//string date();
	echo "<br>";
	
	echo "����date()�����Ľ��Ϊ��".date("Y��n��j�� H��i��s a ");
	echo"<br>";
	echo "����gmdate()�����Ľ��Ϊ��".gmdate("Y��n��j�� H��i��s a ",mktime (0,0,0,12,32,2008));
		
?>