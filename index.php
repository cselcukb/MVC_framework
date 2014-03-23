<?php
session_start();
include("router.php");
include("config/config.php");

$url= $_SERVER['REQUEST_URI'];
$query_string= $_SERVER['QUERY_STRING'];

if($query_string != ""){
	$url= str_replace("?".$query_string, "", $url);
}

$url= str_replace($_SUB_ROOT, "", $url);

//$url= substr($url, 1);

$modules= array();

$modules= explode("/", $url);

$router= new Router();

$router->initRouting($modules);

?>
