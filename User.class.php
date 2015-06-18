<?php
//规范用户抽象类
abstract class User{
	protected $_userName;
	protected $_password;
	protected $_notPassword;
	protected $_email;
	//执行
	abstract function _query();
	
	//验正
	abstract function _check();
	
}
?>