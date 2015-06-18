<?php
//注册类
class Reg extends User{
	
	
	//构造方法
	function __construct($_userName,$_password,$_notPassword,$_email){
		$this->_userName = $_userName;
		$this->_password = $_password;
		$this->_notPassword = $_notPassword;
		$this->_email = $_email;
	}
	
	
	public function _query(){
		$_xml = <<<_xml
<?xml version="1.0" encoding="utf-8"?>
<root>
<username>$this->_userName</username>
<password>$this->_password</password>
<email>$this->_email</email>
</root>
_xml;
		
        //创建simplexml类
        $_sxe = new SimpleXMLElement($_xml);
        //生成xml
        $_sxe->asXML('xml.xml');
        
        Tool::_alertLocation('注册成功！','?m=login');
		
	}
	//验正
	public function _check(){
    

        
    	if($this->_userName || $this->_password || $this->_notPassword || $this->_email){
        	
            if($this->_password == $this->_notPassword){
        		return true;
       		}
       	}
        
        
        return false;
	}
}
?>