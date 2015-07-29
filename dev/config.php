<?php 
$self = explode("/", $_SERVER['REQUEST_URI']);
define('HTTP_ID', $self[count($self)-2].'/');
?>