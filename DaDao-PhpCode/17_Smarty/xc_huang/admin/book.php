<?php require_once('adminqx.php'); ?>
<?php require_once('../include/mysqlclass.php'); ?>
<?php
$mycon=new mysql();
 if(isset($_POST['Submit'])){
     $id=$_POST['book_id'];
	$page=$_GET['page'];
	 foreach($id as $a_id){
	$mycon->delete("book","where book_id=$a_id");
	}
}
  if(isset($_GET['page'])){
  	$page=$_GET['page'];
  }else{
  	$page=1;
  }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
<style type="text/css">
<!--
.STYLE1 {color: #FFFFFF}
body,td,th {
	font-size: 12px;
}
-->
</style>
</head>

<body>
<script language=javascript>
	function checkall()
	{
	   var a = document.getElementsByTagName("input");//getElementsByTagName����ָ�����Ƶ�Ԫ�ؼ���,��һ�ַ���
	   //alert(document.getElementsByName("checkALL").checked);
	   if(form1.check1.checked)
	   {
		   for (var i=0; i<a.length; i++)
		   if (a[i].type == "checkbox") a[i].checked = true;
	   }
	   else
	   {
		  for (var i=0; i<a.length; i++)
		   if (a[i].type == "checkbox") a[i].checked = false;
	   }
	}
	</script>

<table width="90%" border="1" align="center" cellpadding="5" cellspacing="0" bordercolor="#BDDFDB">
    <form name="form1" method="post" action="book.php?page=<?php echo $page;?>">

  <tr>
    <td width="9%" height="32" align="center" bgcolor="#009999"><span class="STYLE1">
      <input type="checkbox" name="check1" value="checkbox" onclick="return checkall();"/>ȫѡ</span></td>
    <td width="11%" align="center" bgcolor="#009999"><span class="STYLE1">����������</span></td>
    <td width="49%" align="center" bgcolor="#009999"><span class="STYLE1">��������</span></td>
    <td width="9%" align="center" bgcolor="#009999" class="STYLE1">����ʱ��</td>
    <td width="10%" align="center" bgcolor="#009999"><span class="STYLE1">״̬</span></td>
    <td width="12%" align="center" bgcolor="#009999"><span class="STYLE1">�ظ�</span></td>
  </tr>
  <?php
 $query=$mycon->selectpg("book"," book_id desc ",15,$page);
 while($rs=mysql_fetch_array($query)){
  ?>
  <tr >
    <td align="center"><input name="book_id[]" type="checkbox" id="book_id[]" value="<?PHP echo $rs['book_id'];?>" /></td>
    <td align="center"><?PHP echo $rs['UserName'];?></td>
    <td align="left"><a href="book_edit.php?id=<?php echo $rs['book_id'];?>&page=<?php echo $page;?>"><?PHP echo $rs['Comments'];?> &nbsp;</a></td>
    <td align="center"><?PHP echo substr($rs['createtime'],0,10);?></td>
    <td align="center"><?PHP 
	if($rs['is_state']==0){
	  echo "<font color=red>����</font>";
	}else{
	  echo "��ʾ";
	}
	?></td>
    <td align="center"><?PHP 
	if($rs['Replay']<>""){
		echo "�ѻظ�";
	}else{
		echo "<font color='#ff0000'>δ�ظ�</font>";
	}
	?></td>
  </tr>
  <?php
  }
  ?>
  <tr>
    <td align="center"><input type="submit" name="Submit" value="ɾ����ѡ" /></td>
    <td colspan="5" align="center">&nbsp;</td>
    </tr>
  </form>
</table>
<table width="90%" border="0" align="center" cellpadding="8" cellspacing="0">
  <tr>
    <td align="center">
<?php
	$pagestr=$mycon->pagenext("book.php");
	echo $pagestr;
	?> 
	</td>
  </tr>
</table>
</body>
</html>
<?php
$mycon->close();
?>
