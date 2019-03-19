<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>HTTP 状态码查询 - 导航狗 16 号服务器</title>
</head>
<?php
$str=$_POST["HttpStatusCodeSearch"];
//连接数据库。
$con = mysql_connect("[MySQL Server]","[MySQL User]","[MySQL Password]");

//改进计划
//把状态码添加到一个数组中，在进行数据库查询之前先判断用户的输入是否正确
//对用户的输入进行过滤，防止 SQL 注入攻击
//允许用户一次输入多个状态码同时查询，状态码之间可以使用任何非数字的字符隔离开

if($con){
    echo "导航狗 16 号服务器成功连接！<br/>";
    echo "<br/>";
    mysql_select_db([DB Name], $con);
    echo "查询即将开始...<br/>";
    echo "<br/>";
	mysql_query('SET NAMES UTF8');
	$result = mysql_query("SELECT * FROM HttpStatusCode WHERE Code = $str");
	echo "查询完成...<br/>";
    echo "<br/>";
    while($row = mysql_fetch_array($result))
    {
    echo "您输入的状态码是：<code>$str</code><br/>";
    echo "<br/>";
    echo "查询结果如下：<br/>";
    echo "<br/>";
    echo $row['Info'];}
}else{
	echo "导航狗 16 号服务器连接失败，请您稍后重试。<br/>";
    echo "如果您持续看到此信息，请向管理员反馈，E-mail:suhacker@yeah.net";
}

mysql_close($con);

?>
