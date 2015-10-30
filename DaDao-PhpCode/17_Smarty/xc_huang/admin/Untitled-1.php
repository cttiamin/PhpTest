<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<script language="javascript">
  function lookpic(){
  aa.innerHTML="<img src='"+document.form1.url_pic.value+"' width=500  />";
  }
</script>
<form id="form1" name="form1" method="post" action="">
  <p><div id="aa"><img name="" src="" width="116" height="90" alt="" /></div>
    <br />
    <br />
    <input name="url_pic" type="text" id="url_pic" />
    <input type="button" onclick="window.open('../include/upfile.php?id=url_pic','mywin','toolbar=no,location=no,scrollbars=yes,width=750,height=600,left=120,top=70')" name="Submit" value="点此上传图片" />
    <input type="button"  onclick="return lookpic();"name="Submit3" value="预览图片" />
    </p>
  <p>
    <label>
    <input type="submit" name="Submit2" value="提交" />
    </label>
    <br />
  </p>
</form>
</body>
</html>
