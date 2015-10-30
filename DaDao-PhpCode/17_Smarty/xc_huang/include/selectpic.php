<?php
if(isset($_GET['id'])){
$id=$_GET['id'];

?>
<script language="javascript">
   function abc(aa){
   window.opener.document.form1.<?php echo $id;?>.value=aa;
   window.close();
   }
</script>
<?php
}
echo "<html><head><title>图片</title></head><body bgcolor=000000><center><font size=2 color=red>";//输出html相关代码
if(isset($_GET['page'])){
$page=$_GET['page'];//获取当前页数
}else{
$page=0;
}
$max=16;//设置每页显示图片最大张数
$path="up";
$fotpath="../".$path;
$handle = opendir($fotpath); //当前目录
$i=0;
    while (false !== ($file = readdir($handle))) { //遍历该php文件所在目录
      list($filesname,$kzm)=split("\.",$file);//获取扩展名
        if($kzm=="gif" or $kzm=="jpg" or $kzm=="JPG") { //文件过滤
          if (!is_dir('./'.$file)) { //文件夹过滤
            $array[]=$file;//把符合条件的文件名存入数组
            $i++;//记录图片总张数
           }
          }
    }
	echo "<form id='form1' name='form1' method='post' action='pic_del.php?id=$id'>";
	echo "<table width=\"100%\" border=\"1\">";
for ($j=$max*$page;$j<($max*$page+$max)&&$j<$i;++$j){//循环条件控制显示图片张数
	if($j%4==0){
	echo"<tr>";
	}
	$wzpath=$path."/".$array[$j];
	?>
   <td valign=middle><table align=center><tr><td valign=middle onclick="return abc('/<?php echo $wzpath;?>')"><img src="/<?php echo $wzpath;?>" width=150 ></td></tr><tr><td><font color="#ffffff"> <input name="del[]" type="checkbox" id="del[]" value="../<?php echo $wzpath;?>" /><?php echo $array[$j];?></font></td></tr></table></td>
	<?php
	if($j%4==3){
	echo"</tr>";
	}
}
echo "</table>";
?>
  <input type="submit" name="Submit" value="删除所选" />
<?php

$Previous_page=$page-1;
$next_page=$page+1;
if ($Previous_page<0){
    echo "上页";
    echo "<a href=?id=$id&page=$next_page>下页</a>";
}
    else if ($page<=$i/$max){
      echo "<a href=?id=$id&page=$Previous_page>上页</a>";
      echo "<a href=?id=$id&page=$next_page>下页</a>";}
        else{
          echo " <a href=?id=$id&page=$Previous_page>上页</a>";
          echo "下页";
        }
echo "</form>";
echo "</center></body></html>";
?>
