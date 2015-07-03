<!--Breadcrumbs-->
    <div class="breadcrumb-container">
      <div class="breadcrumb">
        <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/" itemprop="url"><span itemprop="title">Главная</span></a></span>
        <span class="divider"> &#8594; </span>
<?php 
if(isset($breadcrumbs2)) 
{
	if(!(isset($breadcrumb2_url))) {$breadcrumb2_url = HTTP_SERVER.$self[1];}
    echo '<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="', $breadcrumbs2_url,
	'" itemprop="url"><span itemprop="title">',$breadcrumbs2,'</span></a></span><span class="divider"> &#8594; </span>';
}
if(isset($breadcrumbs3)) 
{
	if(!(isset($breadcrumb3_url))) {$breadcrumb3_url = HTTP_SERVER.$self[1].'/'.$self[2];}
    echo '<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="', $breadcrumbs3_url,
	'" itemprop="url"><span itemprop="title">',$breadcrumbs3,'</span></a></span><span class="divider"> &#8594; </span>';
}
?>      
        <span class="active" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
			<a href="<?php echo HTTP_URL;?>" itemprop="url">
			<span itemprop="title"><?php echo $breadcrumbs;?></span></a>
		</span>
      </div>
    </div>
<!--Breadcrumbs-->