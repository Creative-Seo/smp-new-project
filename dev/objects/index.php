<?php include("var.php");
$root = '../';
include($root."blocks/meta.php");
include($root."blocks/header.php");?>

<article>
<div class="container">
   <div class="row">
      <h1 class="h1">Перечень объектов</h1>
    <div id="images">
<?php foreach($bd as $row) { ?>
				<div id="a" class="col-md-3 col-sm-6 col-xs-12">
				    <img height="292px" src="/img/objects/<?php echo $row['img'];?>" alt="Объекты строительства"/>
					<a class="fancybox-thumb" rel="gallery1" href="/img/objects/<?php echo $row['img'];?>" title="<?php echo $row['alt'];?>"><span><?php echo $row['text1'].'</br>'.$row['text2'].'</br>'.$row['text3'];?></span></a>
				</div>
<?php } ?>			
			</div>
  <!-- <a class="all-projects" href="#">Все проекты</a> -->
  </div>
</div>
</article>

<?php include($root."blocks/footer.php"); ?>