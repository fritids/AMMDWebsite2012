<?php

/*
 * Squelette : ../prive/echafaudage/contenu/objet_edit.html
 * Date :      Tue, 20 Nov 2012 08:52:40 GMT
 * Compile :   Tue, 16 Apr 2013 09:45:08 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/echafaudage/contenu/objet_edit.html
// Temps de compilation total: 9.981 ms
//

function html_e5b0d4a05c16d9bfd082d4dcbb63c42e($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
((@$Pile[0]['id_objet'])  ?
		(' ' . (	'
	' .
	invalideur_session($Cache, sinon_interdire_acces(((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('modifier', interdire_scripts(invalideur_session($Cache, @$Pile[0]['objet'])), invalideur_session($Cache, @$Pile[0]['id_objet']))?" ":""))) .
	'
')) :
		'') .
(!(@$Pile[0]['id_objet'])  ?
		(' ' . (	'
	' .
	vide($Pile['vars'][(string)'id_rubrique'] = interdire_scripts(trouver_rubrique_creer_objet(entites_html(sinon(table_valeur(@$Pile[0], (string)'id_rubrique', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_parent', null),true))),true),interdire_scripts(@$Pile[0]['objet'])))) .
	sinon_interdire_acces((table_valeur($Pile["vars"], (string)'id_rubrique', null) ? invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser((($t4 = strval(interdire_scripts(invalideur_session($Cache, @$Pile[0]['objet']))))!=='' ?
					('creer' . $t4 . 'dans') :
					''), 'rubrique', invalideur_session($Cache, table_valeur($Pile["vars"], (string)'id_rubrique', null)))?" ":"")):invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('creer', interdire_scripts(invalideur_session($Cache, @$Pile[0]['objet'])))?" ":"")))) .
	'
')) :
		'') .
'
' .
vide($Pile['vars'][(string)'redirect'] = interdire_scripts(((($a = entites_html(table_valeur(@$Pile[0], (string)'redirect', null),true)) OR (is_string($a) AND strlen($a))) ? $a : interdire_scripts((entites_html(sinon(table_valeur(@$Pile[0], (string)'lier_trad', null), @$Pile[0]['id_objet']),true) ? interdire_scripts(generer_url_entite(entites_html(sinon(table_valeur(@$Pile[0], (string)'lier_trad', null), @$Pile[0]['id_objet']),true),interdire_scripts(@$Pile[0]['objet']))):(table_valeur($Pile["vars"], (string)'id_rubrique', null) ? generer_url_entite(table_valeur($Pile["vars"], (string)'id_rubrique', null),'rubrique'):generer_url_ecrire('rubriques'))))))) .
'<div class=\'cadre-formulaire-editer\'>
<div class="entete-formulaire">
	' .
((@$Pile[0]['id_objet'])  ?
		(' ' . (	'
	' .
	filtre_icone_verticale_dist(table_valeur($Pile["vars"], (string)'redirect', null),interdire_scripts(_T(objet_info(@$Pile[0]['objet'],'texte_retour'))),interdire_scripts(objet_info(@$Pile[0]['objet'],'icone_objet')),'',(	'left retour' .
		(($t3 = strval(interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'retourajax', null), ''),true)) ?' ' :''))))!=='' ?
				($t3 . 'ajax preload') :
				''))) .
	'
	')) :
		'') .
'
	' .
(($t1 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'titre', null), interdire_scripts(((($a = generer_info_entite(@$Pile[0]['id_objet'], interdire_scripts(@$Pile[0]['objet']), 'titre')) OR (is_string($a) AND strlen($a))) ? $a : _T('public|spip|ecrire:info_sans_titre')))),true))))!=='' ?
		((	'
		' .
	interdire_scripts(_T(objet_info(@$Pile[0]['objet'],(@$Pile[0]['id_objet'] ? 'texte_modifier':'texte_creer')))) .
	'
		<h1>') . $t1 . '</h1>
	') :
		'') .
'
</div>

' .
vide($Pile['vars'][(string)'redirect'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'redirect', null), generer_url_entite(@$Pile[0]['id_objet'],interdire_scripts(@$Pile[0]['objet']))),true))) .
(($t1 = strval(interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'retourajax', null), ''),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	vide($Pile['vars'][(string)'redirect'] = 'javascript:if (window.jQuery) jQuery(".entete-formulaire .retour a").followLink();') .
	'<div class="ajax">
')) :
		'') .
'
		' .
executer_balise_dynamique('FORMULAIRE_',
	array((($t2 = strval(interdire_scripts(@$Pile[0]['objet'])))!=='' ?
			('editer_' . $t2) :
			''),interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'id_objet', null), 'oui'),true)),table_valeur($Pile["vars"], (string)'id_rubrique', null),table_valeur($Pile["vars"], (string)'redirect', null),interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'lier_trad', null),true))),
	array('../prive/echafaudage/contenu/objet_edit.html','html_e5b0d4a05c16d9bfd082d4dcbb63c42e','',0,$GLOBALS['spip_lang'])) .
'
' .
(($t1 = strval(interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'retourajax', null), ''),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
	</div>
	<script type="text/javascript">/*<![CDATA[*/reloadExecPage(\'' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'exec', null),true)) .
	'\');/*]]>*/</script>
')) :
		'') .
'
</div>
');

	return analyse_resultat_skel('html_e5b0d4a05c16d9bfd082d4dcbb63c42e', $Cache, $page, '../prive/echafaudage/contenu/objet_edit.html');
}
?>