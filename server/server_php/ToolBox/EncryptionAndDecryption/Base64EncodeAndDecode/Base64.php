<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Base 64 编码与解码 - 导航狗 16 号服务器</title>
</head>
<?php
//Base 64 编码
$str=$_POST["base64_encode"];//获取需要编码的字符串
echo base64_encode($str); //输出编码后的内容

//Base 64 解码
$str=$_POST["base64_decode"];//获取需要解码的字符串
echo base64_decode($str); //输出解码后的内容
?>