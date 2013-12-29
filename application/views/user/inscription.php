

<div id="body">

	<div class="wrapper"> 
	


	<?php echo form_open('user/signup',array('class'=>'form-horizontal'));?>

  <div class="control-group">
   <label class="checkbox inline" for="m">
  <input type="checkbox" id="m" value="option1" >M. 
</label>
<label class="checkbox inline" for="mme">
  <input type="checkbox" id="mme" value="option2"> Mme
</label>
<label class="checkbox inline" for="mlle">
  <input type="checkbox" id="mlle" value="option3">Mlle
</label>


  <div class="control-group">
    <label class="control-label">Nom</label>
    <div class="controls">
        <input type="text" name="lastname" placeholder="Nom" value="<?php echo set_value('lastname');?>">
    </div>
  </div>

  <div class="control-group">
    <label class="control-label">Prénom</label>
    <div class="controls">
        <input type="text" name="firstname" placeholder="Prénom" value="<?php echo set_value('firstname');?>">
    </div>
  </div>

   <label class="control-label">Email</label>
    <div class="controls">
        <input type="text" name="email" placeholder="Email" value="<?php echo set_value('email');?>">
    </div>
  </div>


  <div class="control-group">
    <label class="control-label">Adresse</label>
    <div class="controls">
        <input type="text" name="address" placeholder="Adresse" value="<?php echo set_value('address');?>">
    </div>
  </div>

  <div class="control-group">
    <label class="control-label">Code postal</label>
    <div class="controls">
        <input type="text" name="cp" placeholder="Code postal" value="<?php echo set_value('cp');?>">
    </div>
  </div>

  <div class="control-group">
    <label class="control-label">Ville</label>
    <div class="controls">
        <input type="text" name="city" placeholder="Ville" value="<?php echo set_value('city');?>">
    </div>
  </div>

  <div class="control-group">
    <label class="control-label">Pays</label>
    <div class="controls">
        <select name="country">
          <option value="0">Votre pays</option>
          <?php foreach($countries as $c):?>
            <option value="<?php echo $c->country_id;?>"<?php echo set_select('country',$c->country_id);?> > <?php echo $c->country_name;?></option>
         <?php endforeach;?>
        </select>
    </div>
  </div>

  <div class="control-group">
    <label class="control-label">Téléphone</label>
    <div class="controls">
        <input type="text" name="phone" placeholder="Téléphone" value="<?php echo set_value('phone');?>">
    </div>
  </div>

  <button type="submit" class="btn">Inscription</button>

  <p><a href="<?php echo site_url('user/login');?>">J'ai déjà un compte</a></p>

<?php echo form_close();?>

</div>
</div>
