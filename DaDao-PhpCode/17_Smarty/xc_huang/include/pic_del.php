<?php
$del=$_POST['del'];
$id=$_GET['id'];
foreach($del as $aa){
 unlink($aa);
 echo "<script languaet=javascript>";
 echo "document.write('�ļ�".$aa."ɾ���ɹ�');";
 echo "</script>";

}
 echo "<script languaet=javascript>";
 echo "location='selectpic.php?id=$id';";
 echo "</script>";

?>