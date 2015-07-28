<?php $title = 'Аренда автокрана';
$description = 'В нашем автопарке представлен широкий выбор кранов, грузоподъемностью от 14 до 60 тонн, с длиной стрелы от 22 до 47 метров.';
$keywords = '';
$breadcrumb = 'Аренда автокрана';
$text='<p>'.$description.'</p>';
$array=json_decode('[
{"name":"Кран на а/ходу КС-3577-3","url":"kran-na-hodu-ks-3577-3"},
{"name":"Кран на а/ходу КС-3577-2","url":"kran-na-hodu-ks-3577-2"},
{"name":"Кран на а/ходу КС-45717-К","url":"kran-na-hodu-ks-45717-k"},
{"name":"Кран на а/ходу XZJ QZ25K","url":"kran-na-hodu-xzj-qz25k"},
{"name":"Кран манипулятор автомобильный на базе КАМАЗ-65117","url":"kran-manipulyator-na-kamaz-65117"},
{"name":"Кран на ж. д. ходу ЕДК-80/3","url":"kran-na-hodu-edk-803"},
{"name":"Кран на ж. д. ходу КДЭ-163 с грейфером","url":"kran-na-hodu-kde-163-s-greyferom"}
]',true);
include("../project.php"); ?>

