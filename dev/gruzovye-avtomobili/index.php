<?php $title = 'Грузовые автомобили'; ?>
<?php $description = ''; ?>
<?php $keywords = ''; ?>
<?php 
$root = $_SERVER['DOCUMENT_ROOT'];
include($root."/blocks/meta.php");
include($root."/blocks/header.php");
include($root."/arenda-spectehniki/array.php"); ?>

<?php foreach($array as $row) { if ($row['h2']==$title) { ?>
<article><div class="container">
	<div class="row">
		<h1 class="h1"><?php echo $row['h2'];?></h1>
    <article id="tables" class="col-md-10 col-md-offset-1">
		<table class="table">
		<thead><tr>
				<td width="30%">Наименование механизма, автомашины, марка</td>
				<td>Характеристика механизма (грузоподъёмность, ёмкость ковша и др.)</td>
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
				<td><?php echo $table['info'];?></td>
				<td><?php echo $table['cost'];?></td>
			</tr>
	<?php } ?>
		</tbody>
		</table>
	</article> 
   </div>
</div></article>
<?php }} ?>

<?php include($root."/blocks/footer.php"); ?>
