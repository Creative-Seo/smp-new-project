<?php $title = 'Аренда гидромолота';
$description = 'Применяется в качестве вспомогательного навесного оборудования при демонтажных работах, при работах с мерзлыми грунтами.';
$keywords = '';
$breadcrumb = 'Аренда гидромолота';
$text='<p>'.$description.'</p>';
$array=json_decode('[
{"name":"Гидромолот на базе экскаватора ДЭМ-114","url":"ekskavator-dem-114"},
{"name":"Гидробур на базе экскаватора ДЭМ-114","url":"ekskavator-dem-114"},
{"name":"Гидромолот на базе экскаватора HYUNDAI R170W-7","url":"ekskavator-hyundai-r170w-7"}
]',true);
include("../project.php"); ?>

