



<div id="body">

	<div class="wrapper"> 
		

		<?php if($pizza):?>

		<h1>Commandez votre pizza en ligne !</h1>
		<div class="row-fluid">

			<div class="span6">
				<?php foreach($pizza as $a):?>

				<div class="pizzas">

					<h2><?php echo $a->noms ;?></h2>
					<span class="prix"><?php echo number_format($a->prix,2, ',', ' '); ?>€</span>


					<p><?php echo $a->ingredients ; ?></p>


					<form class="navbar-form pull-right" action="<?php echo site_url('site/add/'.$a->id)?>" method="post" >
						<input type="hidden" name="idpiz" value="<?php echo $a->id; ?>">

						 <!-- <label class="control-label">Quantité</label>
				
<select name="quantite">
        <option value="1" selected="selected" >1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>-->




  <!--  <input type="submit" value="Ajouter" class="btn btn-primary" name="valider">-->
</form>
<a class="btn btn-commande" href="<?php echo site_url('site/add/'.$a->id)?>"><i class="icon icon-shoppint-cart"></i>Commander</a>
<div class="clearfix"></div>
</div >











<?php endforeach;?>
</div>
<div class="span6" >


	<div id="commande">



		<div class="rubandcommande"><h2>Votre Commande</h2> </div>




	</div>




</div>


</div>
<?php endif;?>

<div class="clearfix"></div>
</div>
</div>