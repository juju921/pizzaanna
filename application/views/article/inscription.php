

<div id="body">

	<div class="wrapper"> 

    <h1>Facturation</h1>


<?php if(validation_errors()):?>
  <div class="alert alert-error"><?php echo validation_errors('<p>','</p>');?></div>
<?php endif;?>


    <?php echo form_open('article/inscription',array('class'=>'form-horizontal'));?>

    <div class="control-group">
        <label class="control-label">Civilité : </label>
     <label class="checkbox inline" for="m">
      <input type="checkbox" id="m" value="option1" >M. 
    </label>
    <label class="checkbox inline" for="mme">
      <input type="checkbox" id="mme" value="option2"> Mme
    </label>
    <label class="checkbox inline" for="mlle">
      <input type="checkbox" id="mlle" value="option3">Mlle
    </label>
  </div>

  <div class="control-group">
    <label class="control-label">Nom : </label>
    <div class="controls">
      <input type="text" name="lastname" placeholder="Nom" value="<?php echo set_value('lastname');?>">
    </div>
  </div>

  <div class="control-group">
    <label class="control-label">Prénom : </label>
    <div class="controls">
      <input type="text" name="firstname" placeholder="Prénom" value="<?php echo set_value('firstname');?>">
    </div>
  </div>


  <div class="control-group">
    <label class="control-label">Email : </label>
    <div class="controls">
      <input type="text" name="email" placeholder="Email" value="<?php echo set_value('email');?>">
    </div>
  </div>



  <div class="control-group">
    <label class="control-label">
      Jour de passage* : 
    </label>
      <div class="controls">
        <select name="jours">


          <option value="Lundi" selected="selected" >Lundi</option>
          <option value="Mardi">Mardi</option>
          <option value="Mercredi">Mercredi</option>
          <option value="Jeudi">Jeudi</option>
          <option value="Vendredi">Vendredi</option>
          <option value="Samedi">Samedi</option>
          <option value="Dimanche">Dimanche</option>
       
        </select>  
      </div>
    </div>








    <div class="control-group">
      <label class="control-label">Ville</label>
      <div class="controls">
        <select name="ville">
          <option value="0">Ville</option>

          <option value="Antony" selected="selected" >Antony</option>
          <option value="Arcueil-Bagneux-Montrouge">Arcueil-Bagneux-Montrouge</option>
          <option value="Fontenay aux Roses - Carrefour des Mouilleboeufs">Fontenay aux Roses - Carrefour des Mouilleboeufs</option>
          <option value="Le Plessis Robinson - Place du marché">Le Plessis Robinson - Place du marché</option>
          <option value="Le Plessis Robinson - rue Paul Rivet">Le Plessis Robinson - rue Paul Rivet</option>
          <option value="Le Plessis Robinson - avenue de la Résistance">Le Plessis Robinson - avenue de la Résistance</option>
          <option value="Nanterre">Nanterre</option>
          <option value="Paris">Paris</option>
          <option value="Rosny-sous-bois">Rosny-sous-bois</option>
        </select>  
      </div>
    </div>


    <div class="control-group">
      <label class="control-label">Téléphone : </label>
      <div class="controls">
        <input type="text" name="phone" placeholder="Téléphone" value="<?php echo set_value('phone');?>">
      </div>
    </div>

    <div class="control-group">
      <label class="control-label">Heure de passage : </label>
      <div class="controls">
        <input type="text" name="heure" placeholder="heure de passage" value="<?php echo set_value('phone');?>">
      </div>
    </div>

    <button type="submit" class="btn">Poursuivre ma commande</button>

    

    <?php echo form_close();?>

  </div>
</div>
