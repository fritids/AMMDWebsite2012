<?php

/*
 * Squelette : plugins-dist/porte_plume/barre_outils_icones.css.html
 * Date :      Tue, 20 Nov 2012 08:52:49 GMT
 * Compile :   Wed, 11 Sep 2013 21:07:46 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins-dist/porte_plume/barre_outils_icones.css.html
// Temps de compilation total: 1.404 ms
//

function html_b00b6d4852220bd8a5f1394744a664d2($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<?php header("X-Spip-Cache: 604800"); ?>' .
'<'.'?php header("' . 'Content-Type: text/css; charset=utf-8' . '"); ?'.'>' .
'<'.'?php header("' . 'Vary: Accept-Encoding' . '"); ?'.'>' .
barre_outils_css_icones('') .
'

/* roue ajax */
.ajaxLoad{background:white url(\'' .
interdire_scripts(protocole_implicite(url_absolue(find_in_path('images/searching.gif')))) .
'\') top left no-repeat;}
');

	return analyse_resultat_skel('html_b00b6d4852220bd8a5f1394744a664d2', $Cache, $page, 'plugins-dist/porte_plume/barre_outils_icones.css.html');
}
?>