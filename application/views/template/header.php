
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='http://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>
  <link href="<?php echo base_url();?>css/style.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' >
  <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>css/bootstrap-responsive.min.css" rel="stylesheet">

  <meta name="description" content="">
  <meta name="author" content="">


  <!-- Le styles -->
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script language='javascript'>
  $(document).ready(function(){

     $("#mercredis").hide();
  
   $("#displayBloc").click(function () {
    $("#monBloc").slideToggle("slow");
    $(this).hide(); 
    return false;
  });
  
   $(" #mardi").click(function () {
    $("#mardis").slideToggle("slow");
    $(this).hide(); 
    return false;
  });
  
   $(" #mercredi").click(function () {
    $("#mercredis").slideToggle("slow");
    return false;
  });
   
   $(" #Jeudi").click(function () {
    $("#Jeudis").slideToggle("slow");
    $(this).hide(); 
    return false;
  });
  
   $(" #Vendredi").click(function () {
    $("#Vendredis").slideToggle("slow");
    $(this).hide(); 
    return false;
  });
   
   $(" #Samedi").click(function () {
    $("#Samedis").slideToggle("slow");
    $(this).hide(); 
    return false;
  });
   
   $(" #Dimanche").click(function () {
    $("#Dimanches").slideToggle("slow");
    $(this).hide(); 
    return false;
  });

 });

</script>
 <script type="text/javascript"
            src="http://maps.google.com/maps/api/js?v=3.2&sensor=false">
        </script>
    


</head>

<body>

  <div id="container">
   <header>
    <div class="header">

 <img src="<?php echo base_url();?>img/pizza-anna-header.png" title="Pizza Anna" width="439" height="147" id="logopizzanna">



      <div class="panier">
       <div class="input-append">
         <input type="text" class="input-small">
         <a class="btn btn-inverse" href="http://www.pizza-anna.fr/test/index.php/site/delete/1"><i class="icon-white  icon-search"></i></a>
       </div>
       <p>Ma commande    <img src="<?php echo base_url();?>img/pizzapart.png">
        (<?php if($this->cart->contents()):?>
        <a href="<?php echo site_url('panier');?>">
          <span class="nb_article">
            <?php echo $this->cart->total_items();?></span>

          </a>

        <?php endif;?>) 
      </p>

    </div>



  </div>
  <div class="navig">
   <div id="nav">
    <div class="logo">
      <a href="<?php echo base_url();?>/index.php" title="Pizza Anna">
        <img src="<?php echo base_url();?>img/maitrepaton.png">
      </a></div>
      <div class="navbar">
        <div class="navbar-inner">
          <div class="container">
            <button class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse" type="button">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <nav class="nav-collapse" role="navigation">
              <ul class="nav">
                <li><a href="<?php echo base_url();?>/index.php">accueil</a></li>



                <li><a href="<?php echo site_url('quisommesnous')?>">qui sommes nous ?</a></li>

                <li><a href="<?php echo site_url('ounoustrouver')?>">Où Nous Trouver</a></li>
                <li><a href="<?php echo site_url('lacarte')?>">la carte</a></li>
                <li class="dropdown" id="rouge">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">commander <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo site_url('commander')?>">en ligne</a></li>
                    <li><a href="<?php echo site_url('ounoustrouver')?>">par téléphone</a></li>

                  </ul>
                </li>
                <li><a href="#">receptions</a></li>
                <li><a href="#">nos conseils</a></li>
                <li><a href="#">contact</a></li>
              </ul>
            </nav>
          </div><!-- end of .container -->
        </div><!-- end of .navbar-inner -->
      </div><!-- end of .navbar .navbar -->

    </div>


  </div>

</header>




