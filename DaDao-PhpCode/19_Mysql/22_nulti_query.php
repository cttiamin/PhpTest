<?php
//�����ѯ

$mysqli=new mysqli('localhost','root','123456','sanyang');
$query="select mp_name from employee ;";
$query.="select dep_name from depment";

//ִ�ж����ѯ
if($mysqli->multi_query($query)){	//����multi_query�������
	do{
		if($result = $mysqli->store_result()){	//store_result:���ڻ��һ������Ľ����,���������ѭ��
			while($row = $result->fetch_row()){		//�õ�һ������
				echo $row[0];
				echo "<br>";
			}
			$result->close();		//�رս��������
		}
		//������ѯ֮��ķָ���
		if($mysqli->more_results()){	//more_results();��һ����ѯ�м���Ƿ��и���Ĳ�ѯ���,������и��������Ļ�
			echo ("--------------<br>");
		}
	}while($mysqli->next_result());		//ѭ���������� next_result()�������,�÷������ڶ��ѯ��׼����һ����ѯ���
}
$mysqli->close(); //�ر�����



?>
