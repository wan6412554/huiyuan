<?php
//登陆类
class Login extends User{
	//构造方法
	function __construct($_userName,$_password){
		$this->_userName = $_userName;
		$this->_password = $_password;
	}
	//执行
	public function _query(){
		$_sxe = simplexml_load_file('xml.xml');
		//判断
		if($this->_userName == $_sxe->username && $this->_password == $_sxe->password){
			setcookie('user',$this->_userName);
			Tool::_alertLocation('登陆成功!','?m=member');
		}else{
			Tool::_alertBack('登陆失败!');
		}
	}
	//验正
	public function _check(){
		if($this->_userName || $this->_password){
			return true;
		}
		return false;
	}
}
?>