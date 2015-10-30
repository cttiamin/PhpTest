<?php require_once('adminqx.php'); ?>
<?php 
    $book_id=$_GET['book_id'];
	require_once('../include/mysqlclass.php'); 
	$mycon=new mysql();
	$mycon->delete("n_article","where book_id=$book_id");
		echo "<script language=Javascript>";	
		echo "window.opener.location.reload(true);";
		echo "window.close()";
		echo"</script>";
	
?>
