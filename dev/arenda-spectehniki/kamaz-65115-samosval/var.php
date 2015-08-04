<?php include('../../bd.php');
$name = 'kamaz-65115-samosval';
$array = $bd[$name];

$title = $array['name'];
$description = '';
$keywords = '';
$breadcrumb = $array['name'];
$table = json_decode('[{"name":"Технические характеристики КАМАЗ 65115","tb":[["Мощность двигателя","260 л.с."],["Грузоподъемность, кг","14 000"],["Двигатель","КамАЗ-740.51-260 (Евро-2)"]]}]',true);
$opisanie = 'КамАЗ-65111 — самосвал, выпускаемый Камским автомобильным заводом (КамАЗ).';
?>