<?php 
include($root."blocks/meta.php");
include($root."blocks/header.php");?>

<article class="container">
<?php include($root."blocks/breadcrumbs.php"); ?>
	<h1 class="h1"><?php echo $breadcrumb;?></h1>
	<div class="row">
		<div class="col-md-6"><img class="img-responsive" src="glav.jpg" alt="<?php echo $breadcrumb;?>"></div>
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
		<div class="row">
			<div class="col-md-7"><span style="font-size:1.3em">Цена за час работы: <nobr>
<?php if($array['cost']=='договорная') { ?><strong style="font-size:1.3em"> договорная</strong>
<?php } else { ?><strong style="color:red; font-size:1.5em"> <?php echo $array['cost'];?></strong><?php } ?>
			</nobr></span></div>
			<div class="col-md-5"><button class="btn btn-danger open-modal">Заказать аренду</button></div>
		</div>
		</div>	
	</div>
	<p style="margin-top:30px;"><?php echo $opisanie;?></p>
<?php 
$photo_alt=$array['name'];
include($root."blocks/img_col.php"); ?>
</article>

<?php include($root."blocks/footer.php"); ?>
