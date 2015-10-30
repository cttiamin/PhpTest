<?php
header("Content-Type:text/html;charset=gb2312");//输出编码,避免中文乱码
?>
<html>
<head>
<title>ajax分页</title>
<script language="javascript">
//创建XMLHttpRequest的函数
function createXMLHttp(){

	//得到当前浏览器
	var browser=navigator.appName;
	//如果是IE浏览器
	if(browser=="Microsoft Internet Explorer"){
		http_request=new ActiveXObject("Microsoft.XMLHttp");
	}
	//非IE浏览器
	else{
		http_request=new XMLHttpRequest();
	}
}

function changePage(url){
	http_request.onreadystatechange=newPage;
	//确定发送请求方式，URL，及是否同步执行下段代码
	http_request.open("GET",url,true);
	http_request.send(null);
}

//处理返回信息的函数
function newPage(){
	if(http_request.readyState==4){
		if(http_request.status==200){
			document.getElementById("newpage").innerHTML=http_request.responseText;
		}
	}
}
function dopage(url){
	//定义http_request变量
	var http_request=false;
	//使用createXMLHttp函数对http_request变量进行赋值
	createXMLHttp();

	document.getElementById("newpage").innerHTML="正在读取数据...";
	changePage(url);
}
</script>
</head>
<body>
<div id="newpage">
<?php
//创建数据库连接
$db=mysql_connect("localhost","root","123456");
//选择要操作的数据库
mysql_select_db("sanyang");
//对数据表进行全查操作，同时得到总记录数
$result=mysql_query("select * from userinfo4");
$total=mysql_num_rows($result);

//得到当前显示页数
$page=isset($_GET['page'])?intval($_GET['page']):1;
//每页显示5条数据
$num=5;

//计算页码
//总页数
$pagenum=ceil($total/$num);
//当前显示页数
$page=min($pagenum,$page);	//min();最小值
//上一页
$prepage=$page-1;
//下一页
$nextpage=($page==$pagenum?0:$page+1);
/*
* 得到当前页面之前的几页一共显示了多少条记录，
* 如果是当前页为第5页，这个变量的值就是第1页到第4页总共显示的记录数
* 按照每页显示5条数据计算也就是(5-1)*5=20条记录
*/
$allData=($page-1)*$num;

//定义翻页链接
//当前页面地址
$url='ajax_page.php';
//总记录数
$pageController="总记录数 $total 条 ";
//在翻页链接中加入跳转到首页的链接
$pageController.=" <a href=javascript:dopage('$url?page=1');>首页</a> ";
//在翻页链接中加入跳转到上一页的链接
if($prepage){
	$pageController.=" <a href=javascript:dopage('$url?page=$prepage');>上页</a> ";
}
else{
	$pageController.=" 上页 ";
}
//在翻页链接中加入跳转到下一页的链接
if($nextpage){
	$pageController.=" <a href=javascript:dopage('$url?page=$nextpage');>下页</a> ";
}
else{
	$pageController.=" 下页 ";
}
//在翻页链接中加入跳转到末页的链接
$pageController.=" <a href=javascript:dopage('$url?page=$pagenum');>末页</a> ";
//在翻页链接中加入页数信息
$pageController.="第 ".$page."/".$pagenum." 页";

//显示页数错误信息
If($page>$pagenum||$page<=0){
	echo "页数 ".$page."不存在";
	exit;
}

//使用MySQL的分页查询
$info=mysql_query("select * from userinfo4 limit $allData,$num");

//将分页查询返回记录显示在页面中
echo "<table><tr><td>用户名</td><td>密码</td></tr>";
while($it=mysql_fetch_array($info)){
	echo "<tr><td>".$it['name']."</td><td>".$it['password']."</td></tr>";
}
echo"</table>";
//显示翻页链接
echo $pageController;
?>
</div>
</body>
</html>