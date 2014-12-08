<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class SZframe{
    protected $controller;
    public function __construct($config){
    	echo $config;
    }
    
    public function start(){
        //$module = $_GET['m'];
		//$controller = $_GET['c'];
		return true;
	}
}
