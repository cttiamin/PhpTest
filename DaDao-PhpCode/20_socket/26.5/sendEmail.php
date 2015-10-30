<html>
	<head>
		<title>发送新邮件</title>
	</head>
	<body> 
		<form method="post" name="form1"  ENCTYPE="multipart/form-data" action="otherEmail.php"> 
			<table> 
				<tr>
					<td>发送人：</td> 
					<td><input type="text" name="sender"></td> 
				</tr> 
				<tr>
					<td>收件人：</td> 
					<td><input type="text" name="to"></td> 
				</tr> 
				<tr>
					<td>邮件主题：</td> 
					<td><input type="text" name="subject"></td> 
				</tr> 
				<tr>
					<td>邮件内容：</td> 
					<td><textarea name="content"></textarea></td> 
				</tr> 
				<tr>
					<td>上传附件：</td> 
					<td><input type="file" name="uploadFile"></td> 
				</tr> 
				<tr> 
					<td span=2>
						<input type="submit" value="发送"> 
						<input type="reset" value="重置"> 
					</td> 
				</tr> 
			</table> 
		</form> 
	</body> 
</html>
