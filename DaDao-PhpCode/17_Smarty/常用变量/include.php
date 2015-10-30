
<?php
//require("smarty/Smarty.class.php"); 
require_once('smartyconfig.php');
//$smarty=new Smarty();
function insert_getdate(){
	return date("Y-m-d H:m:s");
}
$smarty->display("include.tpl");

?>