<?php $title = 'Аренда спецтехники'; ?>
<?php $description = ''; ?>
<?php $keywords = ''; ?>
<?php 
$root = $_SERVER['DOCUMENT_ROOT'];
include($root."/blocks/meta.php");
include($root."/blocks/header.php");
include("array.php");
?>
<article>
<div class="container">
<div class="row">
<h1 class="h1">Аренда спецтехники</h1>

	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-block">
		<p>Строительство и ремонт крупных объектов подразумевают использование специальной техники. Перевозка крупногабаритных и тяжелых грузов, высотные, дорожные и землеройные работы невозможно осуществить без специальных машин и оборудования. Покупка специальной строительной техники обходится недешево, поэтому оптимальным решением проблемы является ее аренда.</p>
		<p>Компания ЗАО «СМП-245-ТРАНССТРОЙ» предлагает услуги по аренде строительной спецтехники. У нас есть широкий ассортимент нужного для Вас строительного транспорта:</p>
		<ul>
			<li>&mdash;&nbsp;&nbsp;самосвалов и автопоездов;</li>
			<li>&mdash;&nbsp;&nbsp;экскаваторов и иной землеройной техники;</li>
			<li>&mdash;&nbsp;&nbsp;спец.техники (гидромолоты, буровые машины);</li>
			<li>&mdash;&nbsp;&nbsp;автокранов;</li>
			<li>&mdash;&nbsp;&nbsp;бульдозеров и т.д.</li>
		</ul>
		<p>Кроме этого, ЗАО «СМП-245-ТРАНССТРОЙ» предоставляет в аренду базу с подъездным и повышенным железнодорожным путём, производственные помещения и охраняемую площадку для хранения материалов.</p>
		<ul id="links" class="list-unstyled">
<?php foreach($array as $key => $row) { ?>
			<li><a href="javascript: void(0);" data-table="<?php echo $key;?>"><?php echo $row['h2'];?></a></li>
<?php } ?>
		</ul>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-block">
		<img src="<?php echo HTTP_SERVER;?>img/26.jpg" alt="" class="img-responsive center-block">
		<p class="center-block" style="max-width:275px;margin-top:10px;">База ЗАО «СМП-245-Трансстрой» 
	тел.: -49-34-27- (адрес: г. Владмир, ул. Большая Нижегородская д.124 а)</p>
	</div>
</div>

    <article id="tables" class="col-md-10 col-md-offset-1">
<?php foreach($array as $row) { ?>
		<h2><?php echo $row['h2'];?></h2>
		<table class="table">
		<thead><tr>
				<td width="30%">Наименование механизма, автомашины, марка</td>
				<td class="hidden-xs">Характеристика механизма (грузоподъёмность, ёмкость ковша и др.)</td>
				<td width="15%">Цена за 1 м/час (с НДС 18%), руб.</td>
		</tr></thead>
		<tbody>
	<?php foreach($row['table'] as $table) { ?>
			<tr>
				<td>
		<?php if (isset($table['href'])) {echo '<a href="'.HTTP_SERVER.$row['href'].'/'.$table['href'].'">';}
		echo $table['name'];
		if (isset($table['href'])) {echo '</a>';} ?>
				</td>
				<td class="hidden-xs"><?php echo $table['info'];?></td>
				<td><?php echo $table['cost'];?></td>
			</tr>
	<?php } ?>
		</tbody>
		</table>
<?php } ?>
	</article> 


   <!-- row -->
</div><!-- container -->
</article>
<?php include($root."/blocks/footer.php"); ?>
<script>
$('#links a').click(function(e){
	var top = $('#tables h2').eq($(this).attr('data-table')).offset().top;
	$('html, body').animate({scrollTop:top}, 'slow');
});
</script>