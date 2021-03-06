<?php
require_once("alipay_service.php");
require_once("alipay_config.php");
$parameter = array(
"service" => "trade_create_by_buyer", //交易类型，必填实物交易＝trade_create_by_buyer（需要填写物流） 虚拟物品交易＝create_digital_goods_trade_p 
"partner" =>$partner,                                               //合作商户号
"return_url" =>$return_url,  //同步返回
"notify_url" =>$notify_url,  //异步返回
"_input_charset" => $_input_charset,                                //字符集，默认为GBK
"subject" => "多项测试",                                                //商品名称，必填
"body" => "test哈哈 only",                                           //商品描述，必填
"out_trade_no" => date(Ymdhms),                      //商品外部交易号，必填,每次测试都须修改
"logistics_fee"=>'0.00',                       //物流配送费用
"logistics_payment"=>'BUYER_PAY',               // 物流配送费用付款方式：SELLER_PAY(卖家支付)、BUYER_PAY(买家支付)、BUYER_PAY_AFTER_RECEIVE(货到付款)
"logistics_type"=>'EXPRESS',                    // 物流配送方式：POST(平邮)、EMS(EMS)、EXPRESS(其他快递)

"price" => "0.01",                                 //商品单价，必填
"payment_type"=>"1",                               // 默认为1,不需要修改
"quantity" => "1",                                 //商品数量，必填
"show_url" => $show_url,            //商品相关网站
"seller_email" => $seller_email                //卖家邮箱，必填
);
$alipay = new alipay_service($parameter,$security_code,$sign_type);
$link=$alipay->create_url();
print <<<EOT

<a href= $link >支付宝在线支付</a>
EOT;
?>

