<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//echo PATH_SEPARATOR."<br/>";
//echo get_include_path().PATH_SEPARATOR.'/model/';exit;
include 'framework/start.php';
define('CONFIG', 'config/main.php' );

$frameWork = new SZframe(CONFIG);

$frameWork->start();




