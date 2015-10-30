<?php
require_once('smartyconfig.php');

$abc[]=array("a"=>1,"b"=>11);
$abc[]=array("a"=>2,"b"=>22);
$abc[]=array("a"=>3,"b"=>33);
$abc[]=array("a"=>4,"b"=>44);
$abc[]=array("a"=>5,"b"=>55);
$abc[]=array("a"=>6,"b"=>66);
$smarty->assign("a_num",$abc);

$abc2[]=array("a"=>1,"b"=>11);
$abc2[]=array("a"=>2,"b"=>22);
$abc2[]=array("a"=>3,"b"=>33);
$abc2[]=array("a"=>4,"b"=>44);
$abc2[]=array("a"=>5,"b"=>55);
$abc2[]=array("a"=>6,"b"=>66);

$smarty->assign("a_num2",$abc2);

$smarty->display("aaa.html");

?>