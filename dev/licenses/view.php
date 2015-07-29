<?php $title = 'Лицензии и свидетельства'; ?>
<?php $description = ''; ?>
<?php $keywords = ''; ?>
<?php 
$root = '../..';
include($root."/blocks/meta.php");
include($root."/blocks/header.php"); 
?>
<article>
<div class="container">
   <h1 class="h1">Лицензия и свидетельства <?php echo $h1; ?></h1>
   <p><?php echo $text; ?></p>
   <div class="row">
<?php
$images = scandir('./');
if (false !== $images) {
    $imgarray = preg_grep('/\\.(?:jpe?g)$/', $images);
	foreach($imgarray as $row) { 
?>  
		<div class="col-sm-4 col-md-3 col-lg-4">
			<a class="fancybox-thumb" rel="gallery1" href="<?php echo htmlspecialchars(urlencode($row));?>">
			<img src="<?php echo htmlspecialchars(urlencode($row));?>" width="150" class="img-responsive" alt=""/></a>
		</div>
<?php }} ?>

   </div><!-- row -->
</div><!-- container -->
</article>
<?php include($root."/blocks/footer.php"); ?>