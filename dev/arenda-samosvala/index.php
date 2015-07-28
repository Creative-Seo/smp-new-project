<?php $title = 'Аренда самосвала';
$description = 'Самосвалы применяются для перевозки навалочных, или сыпучих, или иных грузов, пригодных для такой выгрузки, которая производится посредством их опрокидывания из кузова.';
$keywords = '';
$breadcrumb = 'Аренда самосвала';
$text='<p>'.$description.'</p>';
$array=json_decode('[
{"name":"Кран манипулятор автомобильный на базе КАМАЗ-65117","url":"kran-manipulyator-na-kamaz-65117"},
{"name":"КАМАЗ 55111с (самосвал)","url":"kamaz-55111s-samosval"},
{"name":"КАМАЗ 65115 (самосвал)","url":"kamaz-65115-samosval"},
{"name":"КАМАЗ 6520-63 (самосвал)","url":"kamaz-6520-63-samosval"},
{"name":"MA3-6422A8-330 (седельный тягач)","url":"ma3-6422a8-330-sedelnyy-tyagach"}
]',true);
include("../project.php"); ?>

