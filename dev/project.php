<?php $root = '../';
include($root."bd.php");
include($root."blocks/meta.php");
include($root."blocks/header.php"); ?>

<article class="container">
<?php include($root."blocks/breadcrumbs.php"); ?>
	<h1 class="h1"><?php echo $breadcrumb;?></h1>
<?php echo $text; ?>
<?php 
$block_tehnika=$array;
include($root."blocks/block-tehnika.php"); ?>
</article>

<?php include($root."blocks/footer.php"); ?>
