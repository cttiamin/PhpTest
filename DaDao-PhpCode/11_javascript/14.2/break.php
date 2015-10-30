<html>
<head>
<title>testBreak</title>
<script type="text/javascript">

function testBreak() {
	test:for(i=1;i<=10;i++){
		for(j=1;j<=10;j++){
			document.write(i*j,"<BR>");
			break test;
		}
	}
}
</script>
</head>
<body onload="testBreak();">

</body>
</html>
