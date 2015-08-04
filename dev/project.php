<?php $root = '../';
include($root."bd.php");
include($root."blocks/meta.php");
include($root."blocks/header.php"); ?>

<article class="container">
<?php include($root."blocks/breadcrumbs.php"); ?>
	<h1 class="h1"><?php echo $breadcrumb;?></h1>
<?php echo $text; ?>
	<div class="row">
<?php foreach($array as $key => $row) {
$url = $row;
if (in_array($row,['gidrobur-na-dem-114','gidromolot-na-dem-114'])) {$url = 'ekskavator-dem-114';}
if (in_array($row,['gidromolot-na-hyundai-r170w-7','vibroplita-na-hyundai-r170w-7'])) {$url = 'ekskavator-hyundai-r170w-7';}?>
		<div class="col-sm-6 col-md-4 col-lg-3">
			<a href="<?php echo '/arenda-spectehniki/'.$url.'/';?>">
				<img class="img-responsive center-block" src="<?php echo '/arenda-spectehniki/'.$url.'/glav.jpg';?>" alt="<?php echo $bd[$row]['name'];?>">
				<p class="text-center"><?php echo $bd[$row]['name'];?></p>
			</a>
			<p class="text-center">Цена <?php echo $bd[$row]['cost'];?> руб. за час работы</p>
		</div>
<?php $clearfix ='';
	if (($key+1) % 2 == 0) {$clearfix=' visible-sm';}
	if (($key+1) % 3 == 0) {$clearfix=$clearfix.' visible-md';}
	if (($key+1) % 4 == 0) {$clearfix=$clearfix.' visible-lg';}
	if (strlen($clearfix)>0) {
?>
		<div class="clearfix<?php echo $clearfix; ?>"></div>
<?php }} ?>
	</div>
</article>

<?php include($root."blocks/footer.php"); ?>
