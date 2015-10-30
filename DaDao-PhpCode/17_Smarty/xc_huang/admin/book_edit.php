<?php require_once('../include/mysqlclass.php'); ?>

<?php
$mycon=new mysql();
if(isset($_GET['page'])){
	$page=$_GET['page'];
}
if(isset($_GET['id'])){
$book_id=$_GET['id'];

$query=$mycon->selectedit("book","where book_id=$book_id");
$rs=mysql_fetch_array($query);
}else{
	echo "<script language='javascript'>";
	echo "location='book.php';";
	echo "</script>";
}
if(isset($_POST['Submit'])){
 $page=$_POST['page'];
 $book_id=$_POST['id'];
 $IP=$_POST['IP'];
 $UserName=$_POST['UserName'];
 $QQ=$_POST['QQ'];
 $Comments=$_POST['Comments'];
 $Replay=$_POST['Replay'];
 $is_state=$_POST['is_state'];
 $sqlstr="IP='$IP',UserName='$UserName',QQ='$QQ',Comments='$Comments',Replay='$Replay',is_state='$is_state'";
 $mycon->update("book",$sqlstr," where book_id=$book_id");
	echo "<script language='javascript'>";
	echo "location='book.php?page=$page';";
	echo "</script>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
-->
</style></head>

<body>
  <table width="90%" border="1" align="center" cellpadding="5" cellspacing="2" bordercolor="#CCCCCC">
<form id="form1" name="form1" method="post" action="">
    <tr>
      <td align="right">留言人IP:</td>
      <td><input name="IP" type="text" id="IP" value="<?php echo $rs['IP'];?>" size="50" />
      <input name="id" type="hidden" id="id" value="<?php echo $book_id;?>" />
      <input name="page" type="hidden" id="page" value="<?php echo $page;?>" /></td>
    </tr>
    <tr>
      <td width="32%" align="right">留言人姓名:</td>
      <td width="68%"><input name="UserName" type="text" id="UserName" value="<?php echo $rs['UserName'];?>" size="50" /></td>
    </tr>
    <tr>
      <td align="right">留言人QQ:</td>
      <td><input name="QQ" type="text" id="QQ" value="<?php echo $rs['QQ'];?>" size="50" /></td>
    </tr>
    <tr>
      <td align="right">留言时间:</td>
      <td><?php echo $rs['createtime'];?></td>
    </tr>
    <tr>
      <td align="right">留言内容:</td>
      <td><label>
        <textarea name="Comments" cols="50" rows="7" id="Comments"><?php echo $rs['Comments'];?></textarea>
      </label></td>
    </tr>
    <tr>
      <td align="right">回复内容:</td>
      <td><textarea name="Replay" cols="50" rows="7" id="Replay"><?php echo $rs['Replay'];?></textarea></td>
    </tr>
    <tr>
      <td align="right">是否显示:</td>
      <td><input name="is_state" type="radio" value="1" 
	  <?php if($rs['Replay']==1){
	  echo "checked='checked'";
	  };?> />
        显示 
        <input type="radio" name="is_state" value="0" <?php if($rs['Replay']==0){
	  echo "checked='checked'";
	  };?> />
        隐藏</td>
    </tr>
    <tr>
      <td align="right">&nbsp;</td>
      <td><label>
        <input type="submit" name="Submit" value=" 确 认 " />
      </label></td>
    </tr>
</form>
  </table>
</body>
</html>
