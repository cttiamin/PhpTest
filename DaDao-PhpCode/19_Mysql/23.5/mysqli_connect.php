<?php
$db_host="localhost";//������
$db_user="root";//�û���
$db_psw="root";//����
$db_name="sunyang";//���ݿ�
$connection = mysqli_connect( $db_host,$db_user,$db_psw,$db_name);        
if ( $connection ) {
   echo "���ݿ����ӳɹ�";
}
else {
   echo "���ݿ�����ʧ��";
}
?>
