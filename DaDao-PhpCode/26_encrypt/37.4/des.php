<?php
function encrypt($encrypt,$key){
	//��ʼ������
	$iv=mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_DES,MCRYPT_MODE_ECB),MCRYPT_RAND);
	//����Ϣ���м���
	$passcrypt=mcrypt_encrypt(MCRYPT_DES,$key,$encrypt,MCRYPT_MODE_ECB,$iv);
	//�Լ�����Ϣ���б���
	$encode=base64_encode($passcrypt);
	return $encode;
}
function decrypt($decrypt,$key){
	//�Լ�����Ϣ���н���
	$decoded=base64_decode($decrypt);
	//��ʼ������
	$iv=mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_DES,MCRYPT_MODE_ECB),MCRYPT_RAND);
	//����Ϣ���н���
	$decrypted=mcrypt_decrypt(MCRYPT_DES,$key,$decoded,MCRYPT_MODE_ECB,$iv);
	return $decrypted;
}
$key="11111";
$content="sunyang";
//ʹ��encrypt�������ļ����ݽ��м���
$encrypted=encrypt($content,$key);
//ʹ��decrypt�������Ѿ����ܵ��ļ����н���
$decrypted=decrypt($encrypted,$key);
//�����ܺͽ��ܺ����Ϣ���
echo "���ܺ����Ϣ��'$encrypted'<BR/> ���ܺ����Ϣ��'$decrypted'";
?>