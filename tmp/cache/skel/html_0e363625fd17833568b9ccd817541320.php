<?php

/*
 * Squelette : plugins/auto/saisies/v1.27.0/saisies.css.html
 * Date :      Sat, 29 Sep 2012 12:00:04 GMT
 * Compile :   Tue, 16 Apr 2013 11:16:43 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette plugins/auto/saisies/v1.27.0/saisies.css.html
// Temps de compilation total: 2.635 ms
//

function html_0e363625fd17833568b9ccd817541320($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<?php header("X-Spip-Cache: 360000"); ?>'.'<?php header("Cache-Control: max-age=360000"); ?>'.'<?php header("X-Spip-Statique: oui"); ?>' .
'<'.'?php header("' . 'Content-Type: text/css; charset=iso-8859-15' . '"); ?'.'>' .
'<'.'?php header("' . 'Vary: Accept-Encoding' . '"); ?'.'>' .
vide($Pile['vars'][(string)'left'] = choixsiegal(lang_dir(@$Pile[0]['lang'], 'ltr','rtl'),'ltr','left','right')) .
vide($Pile['vars'][(string)'right'] = choixsiegal(lang_dir(@$Pile[0]['lang'], 'ltr','rtl'),'ltr','right','left')) .
vide($Pile['vars'][(string)'fleche'] = choixsiegal(lang_dir(@$Pile[0]['lang'], 'ltr','rtl'),'ltr',interdire_scripts(find_in_path('images/deplierhaut.gif')),interdire_scripts(find_in_path('images/deplierhaut_rtl.gif')))) .
'/* Dans l\'espace privé, afficher les labels des vues de Saisies */
#wysiwyg .afficher .label{ display:block; }

li.fieldset.pliable > fieldset > .legend{
	cursor:pointer;
}

li.fieldset.pliable > fieldset > .legend span{
	padding-' .
table_valeur($Pile["vars"], (string)'left', null) .
':15px;
	background:transparent url(' .
interdire_scripts(find_in_path('images/deplierbas.gif')) .
') ' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'left', null)))!=='' ?
		($t1 . ' ') :
		'') .
'center no-repeat;
}

li.fieldset.plie > fieldset > .legend span{
	background-image:url(' .
table_valeur($Pile["vars"], (string)'fleche', null) .
');
}


.saisie_date_jour_mois_annee .choix {float:left;}
.saisie_date_jour_mois_annee .choix+.choix {margin-left:1em;}
.saisie_date_jour_mois_annee .choix label{display:block; width:auto;}
.saisie_date_jour_mois_annee .choix .text{width:auto;}


' .
(($t1 = strval(interdire_scripts(((find_in_path('prive/style_prive_plugin_bonux.html')) ?' ' :''))))!=='' ?
		($t1 . (	' 
  ' .
	recuperer_fond( 'prive/style_prive_plugin_bonux' , array('ltr' => lang_dir(@$Pile[0]['lang'], 'left','right') ), array('compil'=>array('plugins/auto/saisies/v1.27.0/saisies.css.html','html_0e363625fd17833568b9ccd817541320','',17,$GLOBALS['spip_lang'])), '') .
	'
')) :
		'') .
'


.formulaire_spip li.selecteur_item > label {
	float:none;
}

.formulaire_spip li.selecteur_item div.choix label {
	float:none;
   display:inline;
}
');

	return analyse_resultat_skel('html_0e363625fd17833568b9ccd817541320', $Cache, $page, 'plugins/auto/saisies/v1.27.0/saisies.css.html');
}
?>