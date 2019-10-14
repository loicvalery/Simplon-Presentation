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
	<li>l’<a href='https://www.insa-rouen.fr/'>INSA</a> ;</li>
	<li>le <a href='https://www.cesi.fr/'>CESI</a> ;</li>
	<li><a href='https://simplonline.co/'>Simplon.co</a>.</p></li>
</ul>
</div>
</section>
<style>
.section_simplon{
	font-family: 'Open Sans', sans-serif;
	width: 35rem;
	display: flex;
	border-top: 1px solid black;
	border-bottom: 1px solid black;
	font-size: 0.75rem;
	padding: 1rem;
}

.panel_simplon, .panel_simplon a{
	justify-content: center;
}

.panel_simplon em{
	color: #c30044;
}

.card-simplon-liste{
	list-style: none;
}
</style>";
return $code_html; 
}
add_shortcode ("simplon","shortcode_simplon");

?>





