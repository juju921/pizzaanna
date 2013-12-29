



	<div id="body">

		<div class="wrapper"> 
			
			
			<?php if($pizza): ?>


			<h1>La carte de nos pizzas</h1>
			<div class="row-fluid">
			<?php foreach($pizza as $a):?>
<div class="span6">
			<div class="pizzas">

				<h2><?php echo $a->noms ;?></h2>
<span class="prix"><?php echo number_format($a->prix,2, ',', ' '); ?>€</span>


<p><?php echo $a->ingredients ; ?></p>
			
<div class="clearfix"></div>
</div >
			</div>





	

	
	<?php endforeach;?>
</div>
	<?php endif;?>

<div class="clearfix"></div>
</div>
</div>