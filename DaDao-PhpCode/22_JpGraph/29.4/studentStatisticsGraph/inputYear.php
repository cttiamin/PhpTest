<?php
//创建数据库连接
$db=mysql_connect("localhost","root","root");
//选择要操作的数据库
mysql_select_db("STUDENT");
//对数据表进行查询，得到需要的记录
$query=mysql_query("select YEAR from studentnumber order by YEAR");
//将记录放入数组中
$i=0;
while($r=mysql_fetch_array($query)){
	$result[$i]=$r[0];
	$i++;
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK" />
<title>学生人数统计</title>
<script type="text/javascript">
//判断用户选择年份
function checkYear(){
	if(document.getElementById("start").value>=document.getElementById("end").value){
		document.getElementById("button").disabled=true;
		alert("起始年份必需小于终止年份");
		return false;
	}else{
		document.getElementById("button").disabled=false;
	}
}
</script>
</head>
<body>
	<form action="showGraph.php" method="POST">
		<div>起始年份：<select name="start" onchange="checkYear()">
		<?php
		foreach ($result as $i){
			echo "<option value=".$i;
			if ($i==min($result)) {
				echo " selected";
			}
			echo ">".$i."</option>";
		}
		?>
		</select></div>
		<div>终止年份：<select name="end" onchange="checkYear()">
			<?php
			foreach ($result as $i){
				echo "<option value=".$i;
				if ($i==max($result)) {
					echo " selected";
				}
				echo ">".$i."</option>";
			}
		?>
		</select></div>
		<div>统计图类型：<select name="graphType">
			<option value="1">X-Y坐标图</option>
			<option value="2">柱形图</option>
			<option value="3">饼图</option>
			<option value="4">3D饼图</option>
		</select></div>
		<div><input type="submit" value="查询结果" name="button"/></div>
	</form>
</body>
</html>