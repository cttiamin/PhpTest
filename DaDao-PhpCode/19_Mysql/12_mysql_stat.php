<?php
//mysql_stat() ���ط�����״̬

$db_host="localhost";
$db_user="root";
$db_psw="123456";
$db_name="sanyang";
$connection=mysql_connect($db_host,$db_user,$db_psw) or die ("����������ʧ��");
$status = explode('  ',mysql_stat($connection)); //ת��������
print_r($status);
/*Array (
[0] => Uptime: 36842		//��������ʱ��
[1] => Threads: 1			//�߳�
[2] => Questions: 1343		//ִ�еĲ�ѯ
[3] => Slow queries: 0		//�����Ĳ�ѯ
[4] => Opens: 0				//�Դ򿪵����ݱ�
[5] => Flush tables: 1		//ˢ�µı�
[6] => Open tables: 0		//��ǰ�򿪵ı�
[7] => Queries per second avg: 0.036 )		//ÿ���ƽ����ѯ��

*/

?>
