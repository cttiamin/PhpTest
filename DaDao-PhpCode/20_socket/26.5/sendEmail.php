<html>
	<head>
		<title>�������ʼ�</title>
	</head>
	<body> 
		<form method="post" name="form1"  ENCTYPE="multipart/form-data" action="otherEmail.php"> 
			<table> 
				<tr>
					<td>�����ˣ�</td> 
					<td><input type="text" name="sender"></td> 
				</tr> 
				<tr>
					<td>�ռ��ˣ�</td> 
					<td><input type="text" name="to"></td> 
				</tr> 
				<tr>
					<td>�ʼ����⣺</td> 
					<td><input type="text" name="subject"></td> 
				</tr> 
				<tr>
					<td>�ʼ����ݣ�</td> 
					<td><textarea name="content"></textarea></td> 
				</tr> 
				<tr>
					<td>�ϴ�������</td> 
					<td><input type="file" name="uploadFile"></td> 
				</tr> 
				<tr> 
					<td span=2>
						<input type="submit" value="����"> 
						<input type="reset" value="����"> 
					</td> 
				</tr> 
			</table> 
		</form> 
	</body> 
</html>
