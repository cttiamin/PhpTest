<?php
if(isset($_GET['id'])){
	$id=$_GET['id'];
	for($i=1;$i<=10;$i++){
		echo $id;
	}
}
?>