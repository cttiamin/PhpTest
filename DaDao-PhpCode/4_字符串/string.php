<?php
	$string='hello world <br>';
	$string2='给我一个\\<br>';
	$string3='It\'s a computer <br> ';
	$var=10;
	echo '$var';
	echo $string,$string2,$string3;
	
?>
<br>
<?php
	$var=10;
	echo "zhe shi phpxuexi<br>";
	echo "这是一个\t制表符<br>";
	echo "$var<br>";
	echo "\"这是一个&nbsp;双引号\"<br>";
	echo "\$var";
?>
<br>
<?php
		echo <<<end
			这是使用定界符来定义字符串在这里我们可以输出任何内容，比如，"中国"，'北京'，'房子'
end
			
?>