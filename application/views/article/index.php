
<div id="body">

	<div class="wrapper"> 
		<img src="<?php echo base_url();?>img/camion.png" alt="Camion Pizza Anna" id="camion" width="960" height="337">
		
		<div id="news">
			<div class="bandeau">

				<h1>News</h1>


				<?php if($news):?>
<?php foreach($news as $n):?>


<span>
	

<?php echo date("d/m/Y", strtotime($n->date));?>

</span>
<p>

<?php echo $n->news;?>
</p>
	


	<?php endforeach;?>
<?php endif;?>



			</div>

		</div>


		<div class="presentation">
			<h1>Bienvenue Chez Pizza Anna !</h1>

			Depuis 1991, Sophie et Jean-Claude vous accueille au coin du feu pour partager un moment de détente et enchanter votre palais. Nous parcourons les chemins pour venir à votre rencontre afin de vous faire découvrir notre passion : <strong>LA PIZZA</strong>.<br />
			Nous avons conservé les valeurs de nos ancêtres, le travail et la qualité, pour vous proposer le meilleur de la pizza. 
			<br /><br />
			Notre pâte, issue d'une recette de nos anciens, est préparée par nos soins tous les jours. <strong>PIZZA ANNA</strong> ne fait que du frais et rien que du frais.
			Nous avons gardé la tradition des vraies pizzas cuites au feu de bois.
			Toutes nos pizzas ont une taille unique, à savoir 33cm.
			Toutes nos pizzas sont avec une pâte fine.
			<br /><br />
			Laissez-vous tenter par ce goût authentique !
			Venez découvrir le choix important de notre carte qui satisfera toute la famille et les gourmands !
			<br /><br />
			Et comme nous disons toujours : <cite>"La seule façon de faire cesser la tentation, c'est d'y succomber"</cite>



		</div>

		<div class="clearfix"></div>


	</div>
</div>