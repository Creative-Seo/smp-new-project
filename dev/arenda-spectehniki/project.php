<?php $breadcrumb2 = 'Аренда спецтехники';
$root = '../../';
include($root."blocks/meta.php");
include($root."blocks/header.php");?>

<article class="container" itemscope itemtype="http://schema.org/Product">
<?php include($root."blocks/breadcrumbs.php"); ?>
	<h1 class="h1" itemprop="name"><?php echo $breadcrumb;?></h1>
	<div class="row">
		<div class="col-md-6"><img itemprop="image" class="img-responsive" src="glav.jpg" alt="<?php echo $breadcrumb;?>"></div>
		<div class="col-md-6">
<?php foreach($table as $row) { ?>
			<h2><?php echo $row['name'];?></h2>
			<table class="table">
				<tbody>
	<?php foreach($row['tb'] as $tb) { ?>
					<tr><td><?php echo $tb[0];?></td><td><?php echo $tb[1];?></td></tr>
	<?php } ?>
				</tbody>
			</table>
<?php } ?>
		<div class="row" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
			<div class="col-md-7"><span style="font-size:1.3em">Цена за час работы:&nbsp;<nobr>
<?php if($array['cost']=='договорная') { ?>
				<strong style="font-size:1.3em" itemprop="price">договорная</strong><meta itemprop="priceCurrency" content="RUB">
<?php } else { ?>
				<strong style="color:red; font-size:1.5em" itemprop="price"><?php echo $array['cost'];?></strong>&nbsp;руб.<meta itemprop="priceCurrency" content="RUB">
<?php } ?>
			</nobr></span></div>
			<div class="col-md-5"><button class="btn btn-danger open-modal">Заказать аренду</button></div>
		</div>
		</div>	
	</div>
	<p style="margin-top:30px;" itemprop="description"><?php echo $opisanie;?></p>
<?php 
$photo_alt=$array['name'];
include($root."blocks/img_col.php"); ?>

<p class="h2">Похожая техника</p>
<?php $k = array();
foreach($bd as $key => $val) {array_push($k,$key);}
$key = array_search($name,$k);
switch ($key){
case 0: array_splice($k, 3, -2); array_splice($k, 0, 1);break;
case 1: array_splice($k, 4, -1); array_splice($k, 1, 1);break;
case (count($k)-1): array_splice($k, 2, -3); array_splice($k, 4, 1);break;
case (count($k)-2): array_splice($k, 1, -4); array_splice($k, 5, 1);break;
default: $k=array_slice($k, $key-2, 5); array_splice($k, 2, 1);
}
$block_tehnika=$k;
include($root."blocks/block-tehnika.php"); ?>

</article>

<?php include($root."blocks/footer.php"); ?>

