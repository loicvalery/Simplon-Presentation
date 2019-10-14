<?php
/*
Plugin Name: Simplon Presentation
Plugin URI: 
Description: Plugin allowing the addition of the presentation of the Digital Referent training as well as prepared certificates
Author: Loic Valery
Version: 0.1.0
Author URI: https://www.linkedin.com/in/loicvalery/
*/
function shortcode_simplon(){
$code_html="<section class='section_simplon'>
	<div class='panel_simplon'>
	<p>Destinée aux chercheurs d’emplois en situation de reconversion, la formation <strong>Référent.e Numérique Entreprise</strong> prépare en 8 mois aux métiers du numérique et est couronnée par l’obtention de <em>3 certifications</em>.
Le métier de référent numérique consiste à accompagner les structures dans la mise en place de solutions numériques adaptées à leurs besoins. 
La formation est menée conjointement par :
<ul class='card-simplon-liste'>
	<li><a href='https://www.insa-rouen.fr/'>l’INSA</a> ;</li>
	<li><a href='https://www.cesi.fr/'>le CESI</a> ;</li>
	<li><a href='https://simplonline.co/'>Simplon.co</a>.</p></li>
</ul>
</div>
</section>
<style>
.section_simplon{
	background-color: #000;
	width: 50%;
	display: flex;
	padding: 2em;
}

.card-simplon-logo{
	float:right;
}

.panel_simplon, .panel_simplon a{
	color:#fff;
	font-family: 'Open Sans', sans-serif;
	font-weight: 600;
	font-size: 16px;
	justify-content: center;
}

.panel_simplon em{
	color: #c30044;
}

.panel_simplon a:hover{
	color:#ee144f;
}

.card-simplon-liste{
	list-style: none;
}
</style>";
return $code_html; 
}
add_shortcode ("simplon","shortcode_simplon");

?>





