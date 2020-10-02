<?php
//Start Session
session_start();

//Config File
require_once 'config.php';

//Include Helper
require_once 'helpers/system_helper.php';

//AutoLoader
function __autoload($class_name){
    require_once 'lib/'.$class_name.'.php';
}