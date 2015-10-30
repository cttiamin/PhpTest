<?php require_once('adminqx.php'); ?>
<?php 
    $a_id=$_GET['del'];
	require_once('../include/mysqlclass.php'); 
	$articledel=new mysql();
	$articledel->delete("n_article","where a_id=$a_id");
		echo "<script language=Javascript>";	
		echo "window.opener.location.reload(true);";
		echo "window.close()";
		echo"</script>";
	
?>
