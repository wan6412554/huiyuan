<?php
//工具类
final class Tool{
	//弹窗并跳转
	static public function _alertLocation($_info,$_url){
		echo "<script type=\"text/javascript\">alert('$_info');location.href='$_url';</script>";
		exit;
	}
	
	//弹窗返回
	static public function _alertBack($_info){
		echo "<script type=\"text/javascript\">alert('$_info');history.back();</script>";
		exit;
	}
	
	
}

?>