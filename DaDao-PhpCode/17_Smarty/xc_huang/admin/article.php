<?php require_once('adminqx.php'); ?>
<?php require_once('../include/mysqlclass.php'); ?>
<?php
$article=new mysql();

//���´����ǻ�ȡ��ǰҳ���ַ�������ֲ���,�Թ���ҳ�򴫵�ʱ��
$webpage=$_SERVER['PHP_SELF']."?";

 if(isset($_GET['page'])){
 	$page=$_GET['page'];
 }else{
 	$page=1;
 }
 if(isset($_GET['classid'])){
 $classid=$_GET['classid'];
 $webpage.="&classid=$classid";
 	$classqx=$article->selectedit("n_class","where classid=".$classid);
	$rs_class=mysql_fetch_array($classqx);
	$is_add=$rs_class['is_add'];
	$is_pic=$rs_class['is_pic'];

 $whr="where class_id=$classid";
 }else{
 $whr=" where 1=1 ";
 }
 if(isset($_POST['Submit'])){
     $id=$_POST['a_id'];
	 foreach($id as $a_id){
	$article->delete("n_article","where a_id=$a_id");
	}

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
.STYLE2 {color: #FFFFFF}
-->
</style>
</head>

<body><script language=javascript>
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

  <table width="100%" border="0" cellspacing="0" cellpadding="5">
    <tr>
      <td> ��ǰ�������: <?php echo $rs_class['class_title'];?>
	  <?php
		if($rs_class['is_add']==0|$_SESSION['u_name']=="xc_huang"){

	   ?>
        |&nbsp;	  <a href="<?php echo "article_add.php?class_id=$classid";?>">���������£� </a>
	<?php
	  }
	 ?>
	
	&nbsp;</td>
    </tr>
  </table>
  <table width="95%" border="1" align="center" cellpadding="3" cellspacing="0">
   <form name="form1" method="post" action="<?php echo "article.php?classid=$classid";?>">
 <tr>

	<td width="45" align="center" bgcolor="#3399FF">
	  <span class="STYLE2">
	<?php
	if($rs_class['is_add']==0|$_SESSION['u_name']=="xc_huang"){
	?>
	<input type="checkbox" name="check1" value="checkbox" onclick="return checkall();"/>
	<input name="classid" type="hidden"  value="<?php echo $classid;?>" />
	<?php
	  }else{
	  ?>
	  ���
	  <?php
	   }
	 ?>    
	  </span></td>
      <td align="center" nowrap="nowrap" bgcolor="#3399FF"><span class="STYLE2">���±���</span></td>
      <td align="center" bgcolor="#3399FF"><span class="STYLE2">�Ƽ�</span></td>
      <td align="center" bgcolor="#3399FF"><span class="STYLE2">��ʾ</span></td>
      	<?php
	if($rs_class['is_pic']==0){
	?>

	  <td align="center" bgcolor="#3399FF"><span class="STYLE2">����ͼƬ</span></td>
	  	<?php
	   }
	 ?>
    </tr>
    <?php
 $query=$article->selectpg("n_article","a_id desc",15,$page,$whr);
 $num=mysql_num_rows($query);
 if($num==0){
 ?>
    <tr>
      <td colspan=5 align="center">û������</td>
    </tr>
    <?php
 }else{
	 while($row=mysql_fetch_array($query)){
	 ?>
    <tr>


	<td align="center">
       	<?php
		if($is_add==0|$_SESSION['u_name']=="xc_huang"){
		?> 
	<input name="a_id[]" type="checkbox" id="a_id[]" value="<?PHP echo $row['a_id'];?>" />
	  <?php
	  }else{
		 echo $row['a_id'];
		 }
		 ?></td>
	  
      <td height="20" nowrap="nowrap"><a href="article_edit.php?classid=<?php echo $classid;?>&id=<?PHP echo $row['a_id'];?>"><?PHP echo $row['a_title'];?> </a></td>
      <td align="center">
        <?php
		$a_flag=$row['flag'];
		if($a_flag==1){
		echo "<font color='#0000ff'>�Ƽ�</a>";
		}elseif($a_flag==2){
		echo "<font color='#00ffff'>�ص��Ƽ�</a>";
		}else{
		echo "<font color='#ff0000'>���Ƽ�</a>";
		}
		?>      </td>
      <td align="center"><?php
		$state=$row['a_state'];
		if($state==1){
		echo "<font color='#0000ff'>��ʾ</a>";
		}else{
		echo "<font color='#ff0000'>����ʾ</a>";
		}
		?>      </td>
      	<?php
		if($rs_class['is_pic']==0){
	   ?>
			<td align="center"><a href="article_pic.php?id=<?php echo $row['a_id'];?>" onclick=window.open('','new','width=500,scrollbars=yes') target=new>
					<?php 
					if($row['a_pic']==''){
					?>
						û��ͼƬ
			        <?php
						}else{
					?>
						<img  src="<?php echo $row['a_pic'];?>" width="46"border="0" />
					<?php
						}
					?>
				  </a> &nbsp;&nbsp;<a href="selectpictest.php?id=<?php echo $row['a_id'];?>" onclick=window.open('','new','width=500,scrollbars=yes') target=new></a> </td>
	        <?php
	}
   ?>
    </tr>
    <?php
	  }
	}
	  ?>
    <tr>
      	<?php
		if($rs_class['is_add']==0|$_SESSION['u_name']=="xc_huang"){
	   ?>
	      <td><input type="submit" name="Submit" value="ɾ��" /></td>
     <?php
	 }
	 ?>
      <td colspan="4"><table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="center"><?php
	$pagestr=$article->pagenext($webpage);
	echo $pagestr;
	?>          </td>
        </tr>
      </table></td>
    </tr></form>
</table>

</body>
</html>
<!--
������������������������������������
��                                                                  ��
�� ���뱣���˴���Ȩ��Ϣ����Щ���ݲ������������վ�������κ�Ӱ�죩   ��
��                                                                  ��
��               �žž���������                                     ��
��                                                                  ��
��  ��Ȩ����: www.idc999.com                                        ��
��                                                                  ��
��  ��������: idc999�����Ŷ�                                        ��
��            email:xc_huang5849@sina.com                           ��
��            QQ:59125994 ��ͬ�绰��                                ��
��                                                                  ��
��  �����ַ: http://www.idc999.com                                 ��
��                                                                  ��
������������������������������������
-->