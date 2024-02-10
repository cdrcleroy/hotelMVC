<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>L'HÔTEL DU RELAIS - 79 THOUARS - CELINE ET THIERRY VOUS ACCUEILLE DANS UNE AMBIANCE CHALEUREUSE ET CONVIVIALE !</title>

		<meta content="width=device-width, initial-scale=1.0, user-scalable=yes" name="viewport">

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="description" content="L'hôtel du Relais Céline et Thierry vous accueillent à l'hôtel du relais. Dans une ambiance chaleureuse et conviviale, pour votre plus grand plaisir. Pour vos séjours détentes, touristiques ou vos déplacements professionnels, venez proiter du confort et du calme de nos chambres toutes personnalisées." >
		<meta name="keywords" content="hotel, hôtel, thouars, hotel du relais, hôtel du relais, 79100">
		<meta property="og:title" content="L'hôtel du Relais">
		<meta property="og:type" content="website">
		<meta property="og:url" content="https://www.hotel-du-relais-79.com/">
		<meta property="og:image" content="pics/Galerie/19.jpg">
		<meta property="og:site_name" content="L'hôtel du Relais">



		<script type="text/javascript" src="js/jquery.js"></script>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

		<script type="text/javascript" src="https://www.contact-hotel.com/javascript/widget_ch_reservation.js"></script>
		<link href="https://www.contact-hotel.com/css/widget_ch_reservation.css" type="text/css" rel="stylesheet"/>

		<link href="css/global.css" rel="stylesheet" type="text/css">
		<link href="js/zoombox/zoombox.css" rel="stylesheet" type="text/css">

		<script type="text/javascript" src="js/global.js"></script>
		<script type="text/javascript" src="js/zoombox/zoombox.js"></script>
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<script src='js/datetimepickerfr.js'></script>



		<script>
			$(function() {
				$('a.zoombox').zoombox();
			});

			$(document).ready(function () {

				$.datepicker.setDefaults( $.datepicker.regional[ "fr" ] );

				if(window.location.hash.substr(1) != "")
				{
					var Ancre = window.location.hash.substr(0);
				    $('html, body').animate({
				        scrollTop: ($(Ancre).offset().top)
				    }, 'slow');
				}
			});

		</script>

	</head>

	<body>
		<div id="conteneur">

			<div id="index-header">
				 <img id="index-bandeau-img" src="pics/bandeau_haut/visuel.png" alt="Intérieur de l'hôtel du Relais"> <div id="header">

	

		<div id="header-drapeaux" style="background-image: url('pics/english.jpg');" onClick="GoEnglish()">
		</div>

			

	<div id="header-menu-titre">

		<div id="header-menu-titre-principal" >
			<div id="header-menu-titre-principal-img" style="background-image: url(pics/bandeau_haut/fond_gris_titre.png)"><h1>Hôtel du Relais<span>THOUARS (79)</span></h1></div>
			
		</div>

		<div id="header-menu-titre-secondaire">
			<a href="reservation" class="header-reserver"><label>RÉSERVER AU MEILLEUR PRIX</label></a>		</div>

	</div>

	<div id="header-menu-tel">
		<div id="header-menu-tel-numero" style="background-image: url(pics/bandeau_haut/fond_gris_tel.png);">
			<div id="header-menu-tel-img"><img src="pics/bandeau_haut/tel.png"></div>
			05 49 66 29 45
		</div>
	</div>

</div>

<div id="header-menu">

	

		<a href="/" class="header-tablecell">HÔTEL</a>
		<a href="chambres" class="header-tablecell">CHAMBRES</a>
		<a href="galerie" class="header-tablecell">GALERIE</a>
		<a href="tarifs" class="header-tablecell">TARIFS</a>
		<a href="tourisme" class="header-tablecell">TOURISME</a>
		<a href="reservation" class="header-tablecell">RÉSERVATION</a>
		<a href="pratique" class="header-tablecell">PRATIQUE</a>

			
</div>

<div id="header-menu-resp" onclick="MenuResp()">
	
	<label id="header-menu-resp-titre">MENU</label>
	<ul id="menuresp-ul">

		

			<li><a href="/" class="header-tablecell">HÔTEL</a></li>
			<li><a href="chambres" class="header-tablecell">CHAMBRES</a></li>
			<li><a href="galerie" class="header-tablecell">GALERIE</a></li>
			<li><a href="tarifs" class="header-tablecell">TARIFS</a></li>
			<li><a href="tourisme" class="header-tablecell">TOURISME</a></li>
			<li><a href="reservation" class="header-tablecell">RÉSERVATION</a></li>
			<li><a href="pratique" class="header-tablecell">PRATIQUE</a></li>

				</ul>
</div>				<div id="header-menu-degrade-2"></div>

				<div id="header-menu-degrade"></div>
			</div>


<?php echo $contenu; ?>


            <div id="footer">
	<br>
	<div id="footer-table">

		<div class="footer-cell">
			<label>Création graphique : </label>
			<a href="http://www.studio-universelles.fr/" target="_blank">©Univers'elles</a>
			<label> // </label>
			<label>Développement : </label>
			<a href="http://www.nexti-informatique.fr/" target="_blank">Nexti</a>
			<label> - </label>
			<a href="mentions">Mentions légales</a>
		</div>

	</div>
	<br>
</div>
		</div>
	</body>
</html>

<script>

	$('.header-tablecell').click(function(){
		var href = $(this).attr("href");
		Ancre = href.substring(href.indexOf("#"));
		$('html, body').animate({
			scrollTop:$(Ancre).offset().top
		}, 'slow');
	});

</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-44468505-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-44468505-1');
</script>
