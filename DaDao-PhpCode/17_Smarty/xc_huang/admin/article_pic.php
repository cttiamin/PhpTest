<?php require_once('adminqx.php'); ?>
<?php require_once('../include/mysqlclass.php'); ?>
<?php
$article_edit=new mysql();
if(isset($_GET['id'])){
	$a_id=$_GET['id'];
	$query=$article_edit->selectedit("n_article","where a_id=$a_id");
	$row=mysql_fetch_array($query);
}else{
$article_edit->jscript("index.php","参数不对");
}
if(isset($_GET['del'])){
$article_edit->update("n_article","a_pic=''","where a_id=$a_id");
	echo "<SCRIPT language=javascript>";
	echo "window.opener.location.reload(true);";
	echo "window.close();";
	echo "</script>";
}
?>
<?php
$filepath="/up/";//设置文件上传路径
$a_id=$_GET['id'];
if(isset($_FILES['file']['name'])){
	$name=$_FILES['file']['name'];
	$type=$_FILES['file']['type'];
	$filesize=$_FILES['file']['size'];
	$tmp_name=$_FILES['file']['tmp_name'];
	$up_name=time()+(3600*24*365*3);       //定义上传后的文件名
if ($type=="image/pjpeg"){
	$ok=1;
	$up_name.=".jpg";
}elseif($type=="image/gif"){
	$ok=1;
	$up_name.=".gif";
}else{
	$ok=0;
}
if($ok==1){
	$upfile=$filepath.$up_name;

	move_uploaded_file($tmp_name,"..".$upfile);
$article_edit->update("n_article","a_pic='$upfile'","where a_id=$a_id");
	echo "<SCRIPT language=javascript>";
	echo "window.opener.location.reload(true);";
	echo "window.close();";
	echo "</script>";

}else{
echo"你选择的文件类型不是图片格式";
}
//print_r($_FILES['file']);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<style type="text/css">
<!--
body {
	background-color: #FFD18C;
}
body,td,th {
	font-size: 14px;
}
-->
</style></head>

<body>
<table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="58" colspan="3" align="center"><?PHP
	  if($row['a_pic']==""){
	  echo "暂无图片";
	  }else{
	  ?>
        <img src="<?php echo $row['a_pic']; ?>" width="500" />
        <?php
	    }
	  ?>
    </td>
  </tr>
  <tr>
    <td height="16" colspan="3"><hr /></td>
  </tr>
  <tr>
    <form action="?id=<?php echo $a_id;?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
      <td align="center" nowrap="nowrap"><label>
        <input name="file" type="file" size="20" />
        </label>
          <input type="submit" name="Submit" value="确定" />
        &nbsp;</td>
    </form>
    <td width="15" rowspan="2" align="left">&nbsp;</td>
    <td rowspan="2" align="left"><input type="button" onclick="location='article_pic.php?id=<?php echo $a_id;?>&del=1';" name="Submit2" value="删除图片" /></td>
  </tr>
</table>
</body>
</html>
