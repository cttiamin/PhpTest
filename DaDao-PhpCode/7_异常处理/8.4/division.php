<?php
$divisor=0;
$number=100;	
if($divisor!=0){
$result=$number/$divisor;
echo $result;
}else{
header("Location:errorPage.php"); //��ת��errorPage.phpҳ��
exit;
}
?>
