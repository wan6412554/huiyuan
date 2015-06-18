<?php
//主控制器类
class Main{
	private $_m;
	private $_send;
	//构造方法
	function __construct($_m='start'){
		//构造赋值
		$this->_m = $_m;
		if(isset($_POST['send'])){
			$this->_send = $_POST['send'];
		}
		
		//执行主程序方法
		$this->_run();
	}
	//主程序方法 
	private function _run(){
		//执行数据提交
		$this->_query();
		//执行模板加载
		$this->_load();
	}
	
	//数据提交
	private function _query(){
		switch($this->_send){
			case '登录':
				$this->_duixiang(new Login($_POST['username'],$_POST['password']));
				break;
			case '注册':
				
				$this->_duixiang(new Reg($_POST['username'],$_POST['password'],$_POST['notpassword'],$_POST['email']));
				break;
		}
		
	}
	//传到执行
	private function _duixiang($_obj){
		if($_obj->_check()){
			$_obj->_query();
		}else{
			Tool::_alertBack('填写错误！');
		}
		
	}
	//模板加载
	private function _load(){
		require $this->_m.'.inc.php';
	}
}
?>