<?php
require('libs/Smarty/Smarty.class.php');//����Smarty����ļ�
require("configs/conn.php");//�������ݿ�������
$sql="select id,title,posttime,user from topic order by id desc";
$result=$conn->Execute($sql);//ִ��SQL���
@$articleAll=$result->GetAll();//������ݱ������е�����
$smarty = new Smarty();//����һ��Smarty����
$pageSize=3; //��ÿҳ��ʾ�ļ�¼������Ϊ3
//�ж������ҳ���Ƿ�Ϸ����Դ˶��岻ͬ��SQL���
if (isset($_GET['page'])){
		if ($_GET['page']>0){
			$sql=$sql." limit ".$pageSize*($_GET['page']-1).", ".$pageSize;
		}else{
			$sql="select * from topic where id is null";
		}	
    }else{
	$sql=$sql." limit 0, ".$pageSize;	
    }
$result=$conn->Execute($sql);//ִ��SQL���
@$articleByPage=$result->GetAll();//����ҳ��������ݱ��е�����
$total=count($articleAll); //��ȡ�ܼ�¼��
$totalPage = ceil($total/$pageSize); //����ÿҳ��ʾ�ļ�¼�����ܼ�¼�������ҳ��
$currentPage=1;//��ǰҳ
if (isset($_GET['page'])&&$_GET['page']>0&&$_GET['page']<=$totalPage){//���������ĳҳ
	$currentPage=$_GET['page'];//��ǰҳΪ�����ҳ��
}else{
	$currentPage=0;
}
   $first="";//��ҳ
   $back="";//��һҳ
   $next="";//��һҳ
   $last="";//βҳ   
if ($currentPage > 1){//�����ǰҳ����1
	$first ="<a href=?page=1>��ҳ</a>";//��ʾ��ҳ
	$back="<a href=?page=".($currentPage-1).">��һҳ</a>";//��ʾ��һҳ
}
if ($currentPage < $totalPage){
	$next="<a href=?page=".($currentPage+1).">��һҳ</a>";//��ʾ��һҳ
    $last ="<a href=?page=$totalPage>βҳ</a>";//��ʾβҳ
} 
  //ͨ��forѭ������ʾ����ҳ������� 
   for ($i = 1; $i <=ceil($total/$pageSize); $i++) {
	if ($i == $currentPage){//���Ϊ��ǰҳ
		 $links .='['.$i.']';//ȡ������
	}else {
		$links .="<a href='?page=".$i."'>".$i."</a> ";//��ʾ����������
	}	
} 
   //��ģ�������ֵ
    $smarty->assign("total",$total); // ���е��ܼ�¼��
    $smarty->assign("currentPage",$currentPage); // ��ǰҳ��
    $smarty->assign("totalPage",$totalPage); // ��ҳ��
    $smarty->assign("back",$back); // ��һҳ
    $smarty->assign("next",$next); // ��һҳ
    $smarty->assign("first",$first); // ��ҳ
    $smarty->assign("last",$last); // βҳ   
    $smarty->assign("links",$links); // ����ҳ�������
    $smarty->assign("article",$articleByPage);//���ݱ��е�����
    $smarty->display("index.tpl",$page);//��ʾģ��
?>

