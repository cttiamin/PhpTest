<?php
$password="zjmphp";

if(!eregi("[a-zA-Z0-9_]{6,10}",$password)){	//������6 --10 λ֮ǰ
		echo "����ȷ";
	}else{
		echo "��ȷ";
	}
?>