<?php require_once('adminqx.php'); ?>
<?php require_once('../include/mysqlclass.php'); ?>
<?php
$bigclass=new mysql();
$webtxt=$_SERVER['PHP_SELF']."?";
//echo $webtxt;
//exit();

if(isset($_POST['Submit'])){
    $class_title=$_POST['class_title'];
	$flag=$_POST['flag'];
	$sortnum=$_POST['sortnum'];
	$classid=$_POST['classid'];
	$content=$_POST['content'];
	$webpage=$_POST['webpage'];
		if(isset($_POST['gn01'])){
			$is_add=$_POST['gn01'];
		}else{
			$is_add=0;
		}
		if(isset($_POST['gn02'])){
			$is_jian=$_POST['gn02'];
		}else{
			$is_jian=0;
		}
		if(isset($_POST['gn03'])){
			$is_link=$_POST['gn03'];
		}else{
			$is_link=0;
		}
	
		if(isset($_POST['gn04'])){
			$is_pic=$_POST['gn04'];
		}else{
			$is_pic=0;
		}
	
		if(isset($_POST['gn05'])){
			$is_neirong=$_POST['gn05'];
		}else{
			$is_neirong=0;
		}

	$bigclass->insert("n_class","classid,sortnum,class_title,flag,content,webpage,is_add,is_jian,is_link,is_pic,is_neirong","$classid,$sortnum,'$class_title',$flag,'$content','$webpage',$is_add,$is_jian,$is_link,$is_pic,$is_neirong");
	$bigclass->jscript($webtxt);
}
if(isset($_GET['del'])){
		$del=$_GET['del'];
		$classdel1=$bigclass->selectedit("n_class"," where b_id=$del");
		$classdel2=$bigclass->selectedit("n_article"," where class_id=$del");
		$classnum1=mysql_num_rows($classdel1);
		$classnum2=mysql_num_rows($classdel2);
	if($classnum1!=0||$classnum2!=0){
		$bigclass->jscript($webtxt,"�����»���С�������,��ɾ���¼����ݺ�����");
	}else{
		$bigclass->delete("n_class"," where classid=$del");
		$bigclass->jscript($webtxt,"ɾ���ɹ�");
	}

}
if(isset($_POST['aaa'])){
	$classid=$_POST['classid'];
	$b_id=$_POST['b_id'];
	$sortnum=$_POST['sortnum'];
	$class_title=$_POST['class_title'];
	$flag=$_POST['flag'];
	$content=$_POST['content'];
	$webpage=$_POST['webpage'];
		if(isset($_POST['gn01'])){
			$is_add=$_POST['gn01'];
		}else{
			$is_add=0;
		}
		if(isset($_POST['gn02'])){
			$is_jian=$_POST['gn02'];
		}else{
			$is_jian=0;
		}
		if(isset($_POST['gn03'])){
			$is_link=$_POST['gn03'];
		}else{
			$is_link=0;
		}
	
		if(isset($_POST['gn04'])){
			$is_pic=$_POST['gn04'];
		}else{
			$is_pic=0;
		}
	
		if(isset($_POST['gn05'])){
			$is_neirong=$_POST['gn05'];
		}else{
			$is_neirong=0;
		}
	$bigclass-> update("n_class","class_title='$class_title',sortnum=$sortnum,flag=$flag,content='$content',webpage='$webpage',is_add=$is_add,is_jian=$is_jian,is_link=$is_link,is_pic=$is_pic,is_neirong=$is_neirong","where classid=$classid");
	$bigclass->jscript($webtxt,"�޸ĳɹ�");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
-->
</style></head>

<body>
<table width="100%" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <td>��ǰλ��:�������  <a href="<?php echo $webtxt; ?>&add=1">[������]</a></td>
  </tr>
  <tr>
    <td><hr></td>
  </tr>
</table>
<table width="90%" border="1" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <td align="center" bgcolor="#3399FF">�����</td>
    <td align="center" bgcolor="#3399FF">�������</td>
    <td align="center" bgcolor="#3399FF">�¼�����</td>
    <td align="center" bgcolor="#3399FF"> ����</td>
  </tr>
  <?php
  if(isset($_GET['page'])){
  	$page=$_GET['page'];
  }else{
  	$page=1;
  }
   $query=$bigclass->selectpg("n_class","sortnum asc,classid desc ",10,$page," where b_id=0 ");
     if (empty($query)){

  ?>
  <tr>
    <td colspan="4" align="center">û�м�¼</td>

  </tr>
	  <?php
	   }else{
		while($row=mysql_fetch_array($query)){
	  ?>
		  <tr>
			<td align="center"><?php echo $row['classid'];?></td>
			<td><?php echo $row['class_title'];?></td>
			<td align="center">
					<?php
					if ($row['flag']==0){
					echo "<a href=article.php?classid=".$row['classid'].">���¹���</a>";
					}else{
					echo "<a href='class_small.php?classid=".$row['classid']."'>�¼�����</a>";
					}
					?>			</td>
			<td align="center"><a href="?del=<?php echo $row['classid'];?>">ɾ��</a> | <a href="?edit=<?php echo $row['classid'];?>">�޸�</a> </td>
		  </tr>
	  <?php
		  }
	  }
	  ?>
</table>
<table width="500" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <td align="center">
	<?PHP
	 $pagestr=$bigclass->pagenext();
	 echo $pagestr;
	?>	</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<?php
if(isset($_GET['add'])){
$sqlstr="select max(sortnum) from n_class where b_id=0";
$query=@mysql_query($sqlstr);
$rs_max=@mysql_fetch_array($query);
if($rs_max[0]==0){
   $maxsort=1;
}else{
$maxsort=$rs_max[0]+1;
}
?>
<form id="form1" name="form1" method="post" action="">
  <table width="669" border="1" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td align="right">�����:</td>
      <td><input name="classid" type="text" id="classid" size="4">
      (���ܺ�����������ظ�)</td>
    </tr>
    <tr>
      <td align="right">�������:</td>
      <td><input name="sortnum" type="text" id="sortnum" value="<?php echo $maxsort;?>" size="4" /></td>
    </tr>
    <tr>
      <td width="101" align="right">�������:</td>
      <td width="542"><input name="class_title" type="text" id="class_title" size="62" /></td>
    </tr>
    <tr>
      <td align="right">�Ƿ���С��:</td>
      <td><input type="radio" name="flag" value="1" />
        ��
        <input name="flag" type="radio" value="0" checked="checked" />
        ��</td>
    </tr>
    <tr>
      <td align="right">����ҳ��:</td>
      <td><input name="webpage" type="text" id="webpage" size="62"></td>
    </tr>
    <tr>
      <td align="right">������:</td>
      <td><textarea name="content" cols="60" rows="8" id="content"></textarea></td>
    </tr>
	<tr>
		  <td align="right">��Ŀ���ܣ�</td>
		  <td><input name="gn01" type="checkbox" id="gn01" value="1">
			��ֹ��ɾ 
			<input name="gn02" type="checkbox" id="gn02" value="1" checked="checked">
			��ֹ���ݼ�� 
			<input name="gn03" type="checkbox" id="gn03" value="1">
			��ֹ�������� 
			<input name="gn04" type="checkbox" id="gn04" value="1">
			��ֹͼƬ
			<input name="gn05" type="checkbox" id="gn05" value="1">
			��ֹ��ϸ����	</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="Submit" value="�ύ" />
        &nbsp;&nbsp;&nbsp;
        <input type="reset" name="Submit2" value="����" />
      </label></td>
    </tr>
  </table>
</form>
<?php
}
if(isset($_GET['edit'])){
  $edit=$_GET['edit'];
 $queryedit=$bigclass->selectedit("n_class"," where classid=$edit");
 $rsedit=mysql_fetch_array($queryedit);
?>
<form id="form1" name="form1" method="post" action="">
  <table width="642" border="1" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td align="right">�����:</td>
      <td><?php echo $rsedit['classid'];?></td>
    </tr>
    <tr>
      <td align="right">��&nbsp;&nbsp;&nbsp;&nbsp;��:</td>
      <td><input name="sortnum" type="text" id="sortnum" value="<?php echo $rsedit['sortnum'];?>" /></td>
    </tr>
    <tr>
      <td width="91" align="right">�������:</td>
      <td width="525"><input name="class_title" type="text" id="class_title" value="<?php echo $rsedit['class_title'];?>" size="62" />
        <input name="b_id" type="hidden" id="b_id" value="<?php echo $b_id;?>" />
        <input name="classid" type="hidden" id="classid" value="<?php echo $rsedit['classid'];?>" /></td>
    </tr>

    <tr>
      <td align="right">�Ƿ���С��:</td>
      <td><input type="radio" name="flag" value="1" <?php if($rsedit['flag']==1){
		echo "checked=checked";} 
		?>/>
��
  <input name="flag" type="radio" value="0" <?php if($rsedit['flag']==0){
		echo "checked=checked";} 
		?> />
�� </td>
    </tr>
	<tr>
      <td align="right">����ҳ��:</td>
      <td><input name="webpage" type="text" id="webpage" value="<?php echo $rsedit['webpage'];?>" size="62"></td>
    </tr>    <tr>
      <td align="right">������:</td>
      <td><textarea name="content" cols="60" rows="8" id="content"><?php echo $rsedit['content'];?></textarea></td>
    </tr>
    <tr>
      <td align="right">&nbsp;</td>
      <td><input name="gn01" type="checkbox" id="gn01" value="1"<?php if($rsedit['is_add']==1){
	  echo "checked=\"checked\"";}
	  ?>
	  } >
        ��ֹ��ɾ 
        <input name="gn02" type="checkbox" id="gn02" value="1" <?php if($rsedit['is_jian']==1){
	  echo "checked=\"checked\"";}
	  ?>>
        ��ֹ���ݼ�� 
        <input name="gn03" type="checkbox" id="gn03" value="1" <?php if($rsedit['is_link']==1){
	  echo "checked=\"checked\"";}
	  ?>>
��ֹ�������� 
<input name="gn04" type="checkbox" id="gn04" value="1" <?php if($rsedit['is_pic']==1){
	  echo "checked=\"checked\"";}
	  ?>>
��ֹͼƬ
<input name="gn05" type="checkbox" id="gn05" value="1" <?php if($rsedit['is_neirong']==1){
	  echo "checked=\"checked\"";}
	  ?>>
��ֹ��ϸ����</td>
    </tr>
    <tr>
      <td align="right">&nbsp;</td>
      <td><label>
        <input type="submit" name="aaa" value="�ύ" />
        &nbsp;&nbsp;&nbsp;
        <input type="reset" name="Submit2" value="����" />
      </label></td>
    </tr>
  </table>
</form>
<?php
}
?>

</body>
</html>
