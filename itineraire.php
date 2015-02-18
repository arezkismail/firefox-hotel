<!DOCTYPE html>
<html>
    <head>
        <title>Bienvenu sur l'application de Geolocalisation des hôtels sur paris</title>
        <meta name="description" content="A privileged app stub">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!--
          viewport allows you to control how mobile browsers will render your content.
          width=device-width tells mobile browsers to render your content across the
          full width of the screen, without being zoomed out (by default it would render
          it at a desktop width, then shrink it to fit.)
          Read more about it here:
          https://developer.mozilla.org/Mozilla/Mobile/Viewport_meta_tag
        -->
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/app3.css">
        
       
        <link rel="stylesheet" href="css/bootstrap-theme.css.map">
        <link rel="stylesheet" href="css/bootstrap-theme.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.css.map">        
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!--
        Inline JavaScript code is not allowed for privileged and certified apps,
        due to Content Security Policy restrictions.
        You can read more about it here: https://developer.mozilla.org/Apps/CSP
        Plus keeping your JavaScript separated from your HTML is always a good practice!

        We're also using the 'defer' attribute. This allows us to tell the browser that
        it should not wait for this file to load before continuing to load the rest of
        resources in the page. Then, once everything has been loaded, it will parse and
        execute the deferred files.
        Read about defer: https://developer.mozilla.org/Web/HTML/Element/script#attr-defer
        -->
        <script type="text/javascript" src="js/app3.js" defer></script>

       <!--
        The following two lines are for loading the localisations library
        and the localisation data-so people can use the app in their
        own language (as long as you provide translations).
      
        <link rel="prefetch" type="application/l10n" href="data/locales.ini" />
        <script type="text/javascript" src="js/libs/l10n.js" defer></script>
        
         -->
       
	 <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script> 


    </head>
    <body>
	    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Hôtel Paris</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.html"><span class="glyphicon glyphicon-home"></span>  Home</a></li>
            <li><a href="itineraire.php"><span class="glyphicon glyphicon-road"></span> Itineraire</a></li>
            <li><a href="allHotels.html"><span class="glyphicon glyphicon-list"></span> tous les hôtels </a></li>
			<li> <a href=""> <span class="glyphicon glyphicon-book"></span> Autres </a> </li>
           <li> <a href="myPosition.html"> <span class="glyphicon glyphicon-book"></span> My Position </a> </li>
          </ul>
		 
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	<div id="entete">
		<h1 id="loc"><i><p>Bonjour  !</p></i></h1>
	</div>
        <div id="containeur"><!--//body-->
			<div id="champs"><!--//control-->
				<input type="text"  id="d" value="<?php

				if (isset($_GET['locActuel'])){
					
				echo $locActuel = $_GET['locActuel']; }
				else {
					echo 'position actuelle non définie';
					}
				?>" onchange="calcRoute();"></br>
				
				
				
				
				<input type="text"  id="a" value="<?php

				if (isset($_GET['locHotel'])){
					
				echo $locHotel = $_GET['locHotel']; }
				else {
					echo 'Pas encore d\'hôtel ciblé ';
					}
				?>" onchange="calcRoute();"></br>
        
			<center>
         <button onClick="calcRoute();" type="button" class="btn btn-default btn-sm"  id="road">
          <span class="glyphicon glyphicon-road"></span> Démmarer! 
        </button></center>
      
           
			</div>
			
			<div id="googleMap"></div><!--//map_canvas-->
			<div id="directions-panel"></div><!--//Pour afficher les r�sultats-->
		</div>
    </body>
</html>
