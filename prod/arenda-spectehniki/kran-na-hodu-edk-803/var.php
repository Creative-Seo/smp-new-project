<?php include('../../bd.php');
$name = 'kran-na-hodu-edk-803';
$array = $bd[$name];

$title = $array['name'];
$description = '';
$keywords = '';
$breadcrumb = $array['name'];
$table = json_decode('[{"name":"Технические характеристики ЕДК-80/3","tb":[["Грузоподъемность","20т"],["Тип хода","Железная дорога"]]}]',true);
$opisanie = '';
?>