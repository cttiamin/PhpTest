<?php require_once('adminqx.php'); ?>

<?php require_once('../include/mysqlclass.php'); ?>
<?php
$webtxt=$_SERVER['PHP_SELF']."?";
$bigclass=new mysql("localhost","root","root","news_db");
if(isset($_GET['classid'])){
	$b_id=$_GET['classid'];
	$webtxt.="classid=$b_id";
}else{
	$bigclass->jscript("index.php","������Ч");
}

if(isset($_POST['Submit'])){
	$classid=$_POST['classid'];
	$sortnum=$_POST['sortnum'];
    $class_title=$_POST['class_title'];
	$flag=$_POST['flag'];
	$webpage=$_POST['webpage'];
	$content=$_POST['content'];
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
	$bigclass->insert("n_class","classid,sortnum,class_title,flag,content,webpage,b_id,is_add,is_jian,is_link,is_pic,is_neirong","$classid,$sortnum,'$class_title',$flag,'$content','$webpage',$b_id,$is_add,$is_jian,$is_link,$is_pic,$is_neirong");
	$bigclass->jscript($webtxt);
}

if(isset($_GET['del'])){
		$del=$_GET['del'];
		$classdel1=$bigclass->selectedit("n_class"," where b_id=$del");
		$classdel2=$bigclass->selectedit("n_article"," where class_id=$del");
		$classnum1=mysql_num_rows($classdel1);
		$classnum2=mysql_num_rows($classdel2);
	if($classnum1!=0||$classnum2!=0){
		$bigclass->jscript($webtxt,"�����»���\����,��ɾ���¼����ݺ�����");
	}else{
		$bigclass->delete("n_class"," where classid=$del");
		$bigclass->jscript($webtxt,"ɾ���ɹ�");
	}
}

if(isset($_POST['classid'])){
	$classid=$_POST['classid'];
	$sortnum=$_POST['sortnum'];
	$b_id=$_POST['b_id'];
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
	$bigclass-> update("n_class","b_id=$b_id,sortnum=$sortnum,class_title='$class_title',flag=$flag,content='$content',webpage='$webpage',is_add=$is_add,is_jian=$is_jian,is_link=$is_link,is_pic=$is_pic,is_neirong=$is_neirong","where classid=$classid");
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
.STYLE1 {color: #FFFFFF}
-->
</style></head>

<body>
<table width="100%" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <td>��ǰλ��:С����� <a href="<?php echo $webtxt; ?>&add=1">[������]</a></td>
  </tr>
  <tr>
    <td><hr></td>
  </tr>
</table>
<table width="100%" border="1" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <td align="center" bgcolor="#3399FF"><span class="STYLE1">����</span></td>
    <td align="center" bgcolor="#3399FF"><span class="STYLE1">�����</span></td>
    <td align="center" bgcolor="#3399FF"><span class="STYLE1">�������</span></td>
    <td align="center" bgcolor="#3399FF"><span class="STYLE1">�¼�����</span></td>
    <td align="center" bgcolor="#3399FF"><span class="STYLE1">����</span></td>
  </tr>
  <?php
  if(isset($_GET['page'])){
  	$page=$_GET['page'];
  }else{
  	$page=1;
  }
   $query=$bigclass->selectpg("n_class","sortnum asc,classid desc ",10,$page,"where b_id=$b_id");
     $rscount=mysql_num_rows($query);
     if ($rscount==0){

  ?>
  <tr>
    <td colspan="5" align="center">û�м�¼</td>
  </tr>
	  <?php
	   }else{
		while($row=mysql_fetch_array($query)){
	  ?>
		  <tr>
			<td align="center"><?php echo $row['sortnum'];?></td>
			<td align="center"><?php echo $row['classid'];?></td>
			<td align="center"><?php echo $row['class_title'];?></td>
			<td align="center">
					<?php
					echo "<a href=article.php?classid=".$row['classid'].">���¹���</a>";
					?>			</td>
			<td align="center"><a href="<?php echo $webtxt."&del=".$row['classid'];?>">ɾ��</a> | <a href="<?php echo $webtxt."&edit=".$row['classid'];?>">�޸�</a> </td>
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
	 $pagestr=$bigclass->pagenext($webtxt);
	 echo $pagestr;
	?>	</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<?php
if(isset($_GET['add'])){
$sqlstr="select max(classid) from n_class where b_id=$b_id or classid=$b_id";
$query=@mysql_query($sqlstr);
$rs_max=@mysql_fetch_array($query);
$maxsort=$rs_max[0]+1;
?>
<form id="form1" name="form1" method="post" action="">
  <table width="605" border="1" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td align="right">�����:</td>
      <td><input name="sortnum" type="text" id="sortnum" value="<?php echo $maxsort;?>" size="4" /><?php echo $maxsort;?>
      <input name="classid" type="hidden" id="classid" value="<?php echo $maxsort;?>" size="4" /></td>
    </tr>
    <tr>
      <td align="right">�������:</td>
      <td width="390"><input name="class_title" type="text" id="class_title" size="62" />
        <input name="flag" type="hidden" value="0" />
        <input name="b_id" type="hidden" id="b_id" value="<?php echo $b_id;?>" /></td>
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
��ֹ��ϸ����</td>
    </tr>
    <tr>
      <td align="right">&nbsp;</td>
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
  <table width="677" border="1" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td>�������:</td>
      <td><input name="sortnum" type="text" id="sortnum" value="<?php echo $rsedit['sortnum'];?>" size="4" /></td>
    </tr>
    <tr>
      <td width="84">�������:</td>
      <td width="390"><input name="class_title" type="text" id="class_title" value="<?php echo $rsedit['class_title'];?>" size="62" />
        <input name="flag" type="hidden" value="<?php echo $rsedit['flag'];?>" />
        <input name="b_id" type="hidden" id="b_id" value="<?php echo $b_id;?>" />
        <input name="classid" type="hidden" id="classid" value="<?php echo $rsedit['classid'];?>" /></td>
    </tr>

    <tr>
      <td align="right">����ҳ��:</td>
      <td><input name="webpage" type="text" id="webpage" value="<?php echo $rsedit['webpage'];?>" size="62"></td>
    </tr>
    <tr>
      <td>������:</td>
      <td><textarea name="content" cols="60" rows="8" id="content"><?php echo $rsedit['content'];?></textarea></td>
    </tr>
    <tr>
      <td align="right">��Ŀ���ܣ�</td>
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
      <td>&nbsp;</td>
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
