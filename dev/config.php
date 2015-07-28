<?php 
$self = explode("/", $_SERVER['REQUEST_URI']);
define('HTTP_SERVER', 'http://'.$_SERVER['HTTP_HOST'].'/');
define('HTTP_ID', $self[count($self)-2].'/');
define('HTTP_URL', HTTP_SERVER.ltrim($_SERVER['REQUEST_URI'], '/'));
define('HTTP_URL_IMG', HTTP_URL.'img/');
?>