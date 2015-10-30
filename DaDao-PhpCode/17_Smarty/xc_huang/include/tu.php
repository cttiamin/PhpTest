<?php
$query=$mycon->select("n_article","a_id desc","where class_id=301 and flag=1 ",0,6);
while($rs_pic[]=mysql_fetch_array($query)){
}
$smarty->assign("tu",$rs_pic);
?>