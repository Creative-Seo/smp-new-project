<?php include('../../bd.php');
$name = 'gidromolot-na-dem-114';
$array = $bd[$name];

$title = $array['name'];
$description = '';
$keywords = '';
$breadcrumb = $array['name'];
$table = json_decode('[]',true);
$opisanie = '';
?>