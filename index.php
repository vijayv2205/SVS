<?php
include('includes/lib.php');
include(INCLUDES.SEPARATOR.'load.php');
include(INCLUDES.SEPARATOR.'config.php');
include(INCLUDES.SEPARATOR.'database.php');

$class_name  = $_GET['class'];
$method_name = $_GET['method'];


if(isset($_GET['class'])){
	load_object($class_name,$method_name);
}
else if(isset($config['DEFAULT_CLASS']) && $config['DEFAULT_CLASS'] != ""){
	$class_name = $config['DEFAULT_CLASS'];
	$method_name = $config['DEFAULT_METHOD'];
	
    load_object($class_name,$method_name);
}



?>