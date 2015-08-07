<div class="row block-tehnika" itemtype="http://schema.org/ItemList" itemscope>
<?php 
if (!(isset($block_tehnika_cena))) {$block_tehnika_cena='Цена&nbsp;';}
if (!(isset($block_tehnika_url))) {$block_tehnika_url='/arenda-spectehniki/';}
foreach($block_tehnika as $key => $row) {
	$tehnika_url = $row;
	if (in_array($row,['gidrobur-na-dem-114','gidromolot-na-dem-114'])) {$tehnika_url = 'ekskavator-dem-114';}
	if (in_array($row,['gidromolot-na-hyundai-r170w-7','vibroplita-na-hyundai-r170w-7'])) {$tehnika_url = 'ekskavator-hyundai-r170w-7';}
	if (isset($block_tehnika_img)) {$tehnika_img = $block_tehnika_img.$tehnika_url.'.jpg';}
		else{$tehnika_img = '/arenda-spectehniki/'.$tehnika_url.'/glav.jpg';}
?>
	<div class="col-sm-6 col-md-3" itemtype="http://schema.org/Product" itemprop="itemListElement" itemscope>
		<a itemprop="url" href="<?php echo $block_tehnika_url.$tehnika_url.'/';?>">
			<img itemprop="image" class="img-responsive center-block" src="<?php echo $tehnika_img;?>" alt="<?php echo $bd[$row]['name'];?>">
			<p itemprop="name" class="text-center"><?php echo $bd[$row]['name'];?></p>
		</a>
	<?php if ($bd[$row]['cost']=='договорная') {?>
		<p class="text-center" itemtype="http://schema.org/Offer" itemprop="offers" itemscope><?php echo $block_tehnika_cena;?><span itemprop="price">договорная</span><meta itemprop="priceCurrency" content="RUB"></p>
	<?php }else{ ?>
		<p class="text-center" itemtype="http://schema.org/Offer" itemprop="offers" itemscope><?php echo $block_tehnika_cena;?><span itemprop="price"><?php echo $bd[$row]['cost'];?></span>&nbsp;руб. за час работы<meta itemprop="priceCurrency" content="RUB"></p>
	<?php } ?>
	</div>
<?php $clearfix ='';
	if (($key+1) % 2 == 0) {$clearfix=' visible-sm';}
	if (($key+1) % 4 == 0) {$clearfix=$clearfix.' visible-md';}
	if (($key+1) % 4 == 0) {$clearfix=$clearfix.' visible-lg';}
	if (strlen($clearfix)>0) {
?>
	<div class="clearfix<?php echo $clearfix; ?>"></div>
<?php }} ?>
</div>