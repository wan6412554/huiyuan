<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登陆注册功能</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<?php

function __autoload($_className){
	require $_className.'.class.php';
}

//执行主控制器
if(isset($_GET['m'])){
	new Main($_GET['m']);
}else{
	new Main();
}


?>
</body>
</html>
