<?php if($article):?>

<ul class="thumbnails">
  <li class="span4">
    <img src="<?php echo $this->picture_path.$article->image_name;?>" alt="<?php echo $article->title;?>" widht="256" height="256">
  </li>
  <li class="span7">
    <h1><?php echo $article->title;?></h1>
    <p><?php echo nl2br($article->description);?></p>
  </li>
</ul>

<div class="span4">
  <span class="btn pull-right"><?php echo number_format($article->price_amount,2,',', ' ');?>€</span>
  <a class="btn btn-success" href="<?php echo site_url('article/add/'.$article->article_id);?>"><i class="icon icon-shoppint-cart"></i>Ajouter</a>
</div>
<?php endif;?>
