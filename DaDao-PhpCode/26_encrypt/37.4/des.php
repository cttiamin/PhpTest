<?php
function encrypt($encrypt,$key){
	//初始化向量
	$iv=mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_DES,MCRYPT_MODE_ECB),MCRYPT_RAND);
	//对信息进行加密
	$passcrypt=mcrypt_encrypt(MCRYPT_DES,$key,$encrypt,MCRYPT_MODE_ECB,$iv);
	//对加密信息进行编码
	$encode=base64_encode($passcrypt);
	return $encode;
}
function decrypt($decrypt,$key){
	//对加密信息进行解码
	$decoded=base64_decode($decrypt);
	//初始化向量
	$iv=mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_DES,MCRYPT_MODE_ECB),MCRYPT_RAND);
	//对信息进行解密
	$decrypted=mcrypt_decrypt(MCRYPT_DES,$key,$decoded,MCRYPT_MODE_ECB,$iv);
	return $decrypted;
}
$key="11111";
$content="sunyang";
//使用encrypt方法对文件内容进行加密
$encrypted=encrypt($content,$key);
//使用decrypt方法将已经加密的文件进行解密
$decrypted=decrypt($encrypted,$key);
//将加密和解密后的信息输出
echo "加密后的信息：'$encrypted'<BR/> 解密后的信息：'$decrypted'";
?>