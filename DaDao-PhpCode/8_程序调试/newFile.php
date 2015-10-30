<?php
$conn = mysql_connect("localhost","root","123456");
mysql_select_db('sanyang');
$sql = "select * from employee"; 
$query = mysql_query($sql);
$result[] = mysql_fetch_array($query);
print_r($result);
foreach($row=$result){
	echo $row;
}
?>