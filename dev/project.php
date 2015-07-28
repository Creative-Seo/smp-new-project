<?php $root = '..';
include($root."/blocks/meta.php");
include($root."/blocks/header.php"); ?>

<article class="container">
<?php include($root."/blocks/breadcrumbs.php"); ?>
	<h1 class="h1"><?php echo $breadcrumb;?></h1>
<?php echo $text; ?>
	<div class="row">
<?php foreach($array as $key => $row) { ?>
		<div class="col-sm-6 col-md-4 col-lg-3">
			<a href="<?php echo HTTP_SERVER.'arenda-spectehniki/'.$row['url'];?>">
				<img class="img-responsive center-block" src="<?php echo HTTP_SERVER.'arenda-spectehniki/'.$row['url'].'/glav.jpg';?>" alt="<?php echo $row['name'];?>">
				<p class="text-center"><?php echo $row['name'];?></p>
			</a>
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

<?php include($root."/blocks/footer.php"); ?>
