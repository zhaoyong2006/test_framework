<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class SZframe{
    protected $controller;
    public function __construct($config){
		spl_autoload_register(array($this,'loader'));
    }
    
    public function start(){
        $module = isset($_GET['m'])?$_GET['m']:'';
		$controller = isset($_GET['c'])?$_GET['c']:'';
		if(empty($controller)){
			die('params empty');
		}	
		$class_name = new $controller();
		echo $class_name->run();
		return true;
	}

	public function loader($className){
		include 'controller/'.$className.'.php';
	}
}
