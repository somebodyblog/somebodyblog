<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>JS 与 HTML 互相转换 - 导航狗 16 号服务器</title>
</head>
<?php

//JS 转 HTML
$str = $_POST["js_to_html"];
$str = htmlspecialchars($str);//将将与、单双引号、大于和小于号化成HTML格式
$js_base = "document.writeln(\"XXX\");";
$Array1 = explode("\n", $str);
$num = count($Array1);
//获取数组长度

for ($i=0; $i<$num; $i++){
	$html_single = str_replace("XXX", $Array1[$i], $js_base);
//将$js_base中的XXX替换成$Array2
    echo $html_single;
    echo "<br/>";
}

//HTML 转 JS
$str2 = $_POST["html_to_js"];
$str2 = htmlspecialchars($str2);//将将与、单双引号、大于和小于号化成HTML格式
$js_base2 = "document.writeln(\"XXX\");";
$Array2 = explode("\n", $str2);

$num2 = count($Array2);
//获取数组长度

for ($ii=0; $ii<$num2; $ii++){
	//$js_single = str_replace("document.writeln(\"", "", $js_base2);
//将$js_base中的XXX替换成$Array2
    echo $js_single;
    echo "<br/>";
}

?>