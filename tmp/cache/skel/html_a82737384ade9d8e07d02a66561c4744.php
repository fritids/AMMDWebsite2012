<?php

/*
 * Squelette : ../prive/formulaires/dater.html
 * Date :      Tue, 20 Nov 2012 08:52:40 GMT
 * Compile :   Tue, 16 Apr 2013 09:48:38 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/formulaires/dater.html
// Temps de compilation total: 9.198 ms
//

function html_a82737384ade9d8e07d02a66561c4744($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="formulaire_spip formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
' formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
'-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'objet', null),true)) .
'-' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'id', null), 'nouveau'),true)) .
'">
	' .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'message_ok', null))))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_ok">' . $t1 . '</p>') :
		'') .
'
	' .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'message_erreur', null))))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_erreur">' . $t1 . '</p>') :
		'') .
'
	' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'editable', null),true))))!=='' ?
		($t1 . (	'
	<form method=\'post\' action=\'' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true)) .
	'\'><div>
		
		' .
		'<div>' .
	form_hidden(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true))) .
	'<input name=\'formulaire_action\' type=\'hidden\'
		value=\'' . @$Pile[0]['form'] . '\' />' .
	'<input name=\'formulaire_action_args\' type=\'hidden\'
		value=\'' . @$Pile[0]['formulaire_args']. '\' />' .
	(@$Pile[0]['_hidden']?@$Pile[0]['_hidden']:'') .
	'</div>')) :
		'') .
'
		<ul>
			' .
vide($Pile['vars'][(string)'name'] = 'date') .
vide($Pile['vars'][(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
'<li class="editer long_label editer_' .
table_valeur($Pile["vars"], (string)'name', null) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
		(' ' . $t1) :
		'') .
((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
				<label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'">' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'_label_date', null),true)) .
' ' .
interdire_scripts((($aider=charger_fonction('aider','inc'))?$aider('artdate','../prive/formulaires/dater.html', $Pile[0]):'')) .
'</label>' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('
				<span class=\'erreur_message\'>' . $t1 . '</span>
				') :
		'') .
'
				<span class="affiche"' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'_saisie_en_cours', null),true)) ?' ' :''))))!=='' ?
		($t1 . 'style="display:none;"') :
		'') .
'>' .
interdire_scripts(affdate(table_valeur(@$Pile[0], (string)(	'afficher_' .
	table_valeur($Pile["vars"], (string)'name', null)), null))) .
'</span>
	' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'editable', null),true))))!=='' ?
		($t1 . (	'
				<span class="toggle_box_link"' .
	(($t2 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'_saisie_en_cours', null),true)) ?' ' :''))))!=='' ?
			($t2 . 'style="display:none;"') :
			'') .
	'>&#91;<a href="#"
						onclick="var f=jQuery(this).parents(\'form\').eq(0);f.find(\'li .input\').show(\'fast\').siblings(\'span\').hide(\'fast\');f.find(\'.boutons\').show(\'fast\');f.find(\'input.date\').eq(0).focus();return false;"
						>' .
	_T('public|spip|ecrire:bouton_changer') .
	'</a>&#93;</span>
				<span class="input"' .
	(($t2 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'_saisie_en_cours', null),true)) ?'' :' '))))!=='' ?
			($t2 . 'style="display:none;"') :
			'') .
	'>
					<input type="text" class="text date" name="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'_jour" id="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'_jour" value="' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)(	table_valeur($Pile["vars"], (string)'name', null) .
		'_jour'), null),true)) .
	'" size="10"/>
					<input type="text" class="text heure time" name="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'_heure" id="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'_heure" value="' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)(	table_valeur($Pile["vars"], (string)'name', null) .
		'_heure'), null),true)) .
	'" size="5"/>
				</span>
	')) :
		'') .
'
			</li>
			' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'_editer_date_anterieure', null),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
				' .
	vide($Pile['vars'][(string)'name'] = 'date_redac') .
	vide($Pile['vars'][(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
	'<li class="editer long_label editer_' .
	table_valeur($Pile["vars"], (string)'name', null) .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
			(' ' . $t2) :
			'') .
	((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'">
					<label for="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'">' .
	_T('public|spip|ecrire:texte_date_publication_anterieure') .
	' ' .
	interdire_scripts((($aider=charger_fonction('aider','inc'))?$aider('artdate_redac','../prive/formulaires/dater.html', $Pile[0]):'')) .
	'</label>' .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
			('
					<span class=\'erreur_message\'>' . $t2 . '</span>
					') :
			'') .
	'
					<span class="affiche"' .
	(($t2 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'_saisie_en_cours', null),true)) ?' ' :''))))!=='' ?
			($t2 . 'style="display:none;"') :
			'') .
	'>' .
	interdire_scripts(((($a = affdate(table_valeur(@$Pile[0], (string)(	'afficher_' .
		table_valeur($Pile["vars"], (string)'name', null)), null))) OR (is_string($a) AND strlen($a))) ? $a : _T('public|spip|ecrire:jour_non_connu_nc'))) .
	'</span>
	' .
	(($t2 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'editable', null),true))))!=='' ?
			($t2 . (	'
					<span class="input"' .
		(($t3 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'_saisie_en_cours', null),true)) ?'' :' '))))!=='' ?
				($t3 . 'style="display:none;"') :
				'') .
		'>
						<span class="saisie_redac"' .
		(($t3 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'sans_redac', null),true)) ?' ' :''))))!=='' ?
				($t3 . 'style="display:none;"') :
				'') .
		'>
							<input type="text" class="text date" name="' .
		table_valeur($Pile["vars"], (string)'name', null) .
		'_jour" id="' .
		table_valeur($Pile["vars"], (string)'name', null) .
		'_jour" value="' .
		interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)(	table_valeur($Pile["vars"], (string)'name', null) .
			'_jour'), null),true)) .
		'" size="10"/>
							<input type="text" class="text heure time" name="' .
		table_valeur($Pile["vars"], (string)'name', null) .
		'_heure" id="' .
		table_valeur($Pile["vars"], (string)'name', null) .
		'_heure" value="' .
		interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)(	table_valeur($Pile["vars"], (string)'name', null) .
			'_heure'), null),true)) .
		'" size="5"/>
							<br />
						</span>
						<span class="choix">
							<input type="checkbox" name="sans_redac" value="1"' .
		(($t3 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'sans_redac', null),true)) ?' ' :''))))!=='' ?
				($t3 . 'checked="checked"') :
				'') .
		' id="sans_redac"
							onchange="if (jQuery(this).prop(\'checked\')) jQuery(this).parent().siblings().hide(\'fast\'); else jQuery(this).parent().siblings().show(\'fast\');"
							/><label for="sans_redac">' .
		_T('public|spip|ecrire:texte_date_publication_anterieure_nonaffichee') .
		'</label>
						</span>
	')) :
			'') .
	'
					</span>
				</li>
			')) :
		'') .
'
		</ul>
	' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'editable', null),true))))!=='' ?
		($t1 . (	'
	  ' .
	'
	  <!--extra-->
	  <p class=\'boutons\'' .
	(($t2 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'_saisie_en_cours', null),true)) ?'' :' '))))!=='' ?
			($t2 . 'style="display:none;"') :
			'') .
	'>
			<span class=\'image_loading\'>&nbsp;</span>
			<input type=\'submit\' class=\'over\' name=\'changer\' value=\'' .
	_T('public|spip|ecrire:bouton_changer') .
	'\' />
			<input type=\'submit\' class=\'submit\' name=\'annuler\' value=\'' .
	_T('public|spip|ecrire:bouton_annuler') .
	'\' />
			<input type=\'submit\' class=\'submit\' name=\'changer\' value=\'' .
	_T('public|spip|ecrire:bouton_changer') .
	'\' />
		</p>
	</div></form>
	')) :
		'') .
'
</div>
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/dateur/inc-dateur') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../prive/formulaires/dater.html\',\'html_a82737384ade9d8e07d02a66561c4744\',\'\',16,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
');

	return analyse_resultat_skel('html_a82737384ade9d8e07d02a66561c4744', $Cache, $page, '../prive/formulaires/dater.html');
}
?>