<?php
session_start();
$items=array("�����","�ֻ�","�ʼǱ�����","���޷�","ƤЬ");//����һ���洢��Ʒ������
$itemCount=$_SESSION["itemCount"];//�ӻỰ�л����Ʒ����
if ($itemCount==null){
	$itemCount=0;
}
$itemsSelected=$_POST['item'];// ȡ�ñ���ѡ�е���Ʒ
if (isset($itemsSelected)){// �ж��Ƿ�ѡ����Ʒ
	for ($i=0;$i<count($itemsSelected);$i++){
		$itemCount=$itemCount+1;
		$_SESSION["itemCount"]=$itemCount;// ����Ʒ��������Ự��
		$_SESSION["itemList"][$itemCount]=$itemsSelected[$i];//��ѡ�е���Ʒ����Ự��
	}
}
?>
<html>
<head>
<title>���ﳵ</title>
<LINK href="css/css.css" type=text/css rel=stylesheet>
</head>
<body>
<div class="mainbox threadlist">
 <div class="headactions">
</div>
<h1>���ﳵ</h1>
 <table class="portalbox"  cellpadding="0" cellspacing="1" >
 <thead class="separation">

<tr>
<td>��Ʒ����</td>
</tr>
</thead>
	</div>
<?php
for ($i=0;$i<$itemCount;$i++){
		$item=$_SESSION["itemList"][$i+1];
?>
<tr>
<td><?php echo $items[$item] ;// ������ﳵ�е���Ʒ ?></td>
</tr>
<?php		
	}
?>
<tr>
<td>�����ﳵ�й���<?php echo $itemCount;?>����Ʒ</td>
</tr>
</table>
<center><a href="showItemInfo.php">��������</a></center>
</body>
</html>
