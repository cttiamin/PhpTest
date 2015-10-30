<?php require_once('adminqx.php'); ?>
<?php require_once('../include/mysqlclass.php'); ?>
<?php
$article=new mysql();

//以下代码是获取当前页面地址包含部分参数,以供分页或传递时用
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
<title>无标题文档</title>
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
	   var a = document.getElementsByTagName("input");//getElementsByTagName传回指定名称的元素集合,是一种方法
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
      <td> 当前所在类别: <?php echo $rs_class['class_title'];?>
	  <?php
		if($rs_class['is_add']==0|$_SESSION['u_name']=="xc_huang"){

	   ?>
        |&nbsp;	  <a href="<?php echo "article_add.php?class_id=$classid";?>">［添加文章］ </a>
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
	  编号
	  <?php
	   }
	 ?>    
	  </span></td>
      <td align="center" nowrap="nowrap" bgcolor="#3399FF"><span class="STYLE2">文章标题</span></td>
      <td align="center" bgcolor="#3399FF"><span class="STYLE2">推荐</span></td>
      <td align="center" bgcolor="#3399FF"><span class="STYLE2">显示</span></td>
      	<?php
	if($rs_class['is_pic']==0){
	?>

	  <td align="center" bgcolor="#3399FF"><span class="STYLE2">文章图片</span></td>
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
      <td colspan=5 align="center">没有内容</td>
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
		echo "<font color='#0000ff'>推荐</a>";
		}elseif($a_flag==2){
		echo "<font color='#00ffff'>重点推荐</a>";
		}else{
		echo "<font color='#ff0000'>不推荐</a>";
		}
		?>      </td>
      <td align="center"><?php
		$state=$row['a_state'];
		if($state==1){
		echo "<font color='#0000ff'>显示</a>";
		}else{
		echo "<font color='#ff0000'>不显示</a>";
		}
		?>      </td>
      	<?php
		if($rs_class['is_pic']==0){
	   ?>
			<td align="center"><a href="article_pic.php?id=<?php echo $row['a_id'];?>" onclick=window.open('','new','width=500,scrollbars=yes') target=new>
					<?php 
					if($row['a_pic']==''){
					?>
						没有图片
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
	      <td><input type="submit" name="Submit" value="删除" /></td>
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
★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★
★                                                                  ★
☆ （请保留此处版权信息，这些内容并不会对您的网站运行有任何影响）   ☆
★                                                                  ★
☆               九九久联工作室                                     ☆
★                                                                  ★
☆  版权所有: www.idc999.com                                        ☆
★                                                                  ★
☆  程序制作: idc999开发团队                                        ☆
★            email:xc_huang5849@sina.com                           ★
☆            QQ:59125994 （同电话）                                ☆
★                                                                  ★
☆  相关网址: http://www.idc999.com                                 ☆
★                                                                  ★
☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆
-->