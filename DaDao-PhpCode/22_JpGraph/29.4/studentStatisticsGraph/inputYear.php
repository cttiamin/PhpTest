<?php
//�������ݿ�����
$db=mysql_connect("localhost","root","root");
//ѡ��Ҫ���������ݿ�
mysql_select_db("STUDENT");
//�����ݱ���в�ѯ���õ���Ҫ�ļ�¼
$query=mysql_query("select YEAR from studentnumber order by YEAR");
//����¼����������
$i=0;
while($r=mysql_fetch_array($query)){
	$result[$i]=$r[0];
	$i++;
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK" />
<title>ѧ������ͳ��</title>
<script type="text/javascript">
//�ж��û�ѡ�����
function checkYear(){
	if(document.getElementById("start").value>=document.getElementById("end").value){
		document.getElementById("button").disabled=true;
		alert("��ʼ��ݱ���С����ֹ���");
		return false;
	}else{
		document.getElementById("button").disabled=false;
	}
}
</script>
</head>
<body>
	<form action="showGraph.php" method="POST">
		<div>��ʼ��ݣ�<select name="start" onchange="checkYear()">
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
		<div>��ֹ��ݣ�<select name="end" onchange="checkYear()">
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
		<div>ͳ��ͼ���ͣ�<select name="graphType">
			<option value="1">X-Y����ͼ</option>
			<option value="2">����ͼ</option>
			<option value="3">��ͼ</option>
			<option value="4">3D��ͼ</option>
		</select></div>
		<div><input type="submit" value="��ѯ���" name="button"/></div>
	</form>
</body>
</html>