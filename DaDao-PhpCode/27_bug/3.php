<?php
//display_errors = on ����ʾ������ʾ

//�ϴ�©��	,�ж��ļ�����

//�ύ��©��,

//sqlע��©��
//���������� ?id=1 and 1=1  ,Ҳͬ�������
//���������� ?id=1 and 1=2  ,Ҳͬ�������
//���������� ?id=1 and (select length(name) from admin)>0 ,adminΪ����Ա�������������ʾ������Ϣ
//���������� ?id=1 and (select ascii(substr(adminName,1,1)) from admin limit 0,1)=97 ,asiiΪת��Ϊ�������룬���Ϊ97˵����ͷΪa,
$db=mysql_connect("localhost","root","123456");
mysql_select_db("sanyang");
$id=$_GET["id"];
$id=int($_GET['id']); //������ַ������ǽ���ת��Ϊ���εģ�
$result=mysql_query("select * from others where id=$id");
if(mysql_num_rows($result)>0){
	echo "No 1 user";
}else echo "no this user";


?>