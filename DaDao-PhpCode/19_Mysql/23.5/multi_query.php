<?php
$db_host="localhost";//������
$db_user="root";//�û���
$db_psw="root";//����
$db_name="sunyang";//���ݿ���
$mysqli=new mysqli($db_host,$db_user,$db_psw,$db_name) ;
$query = "select emp_name from employee ;";
$query .= "select dep_name from depment ";
/* ִ�ж����ѯ */
if ($mysqli->multi_query($query)) {
    do {
        if ($result = $mysqli->store_result()) {
            while ($row = $result->fetch_row()) {
                echo $row[0];
                echo "<br>";
            }
            $result->close();
        }
        /* ������ѯ֮��ķָ��� */
        if ($mysqli->more_results()) {
            echo ("-----------------<br>");
        }
    } while ($mysqli->next_result());
}

$mysqli->close();//�ر�����
?>
