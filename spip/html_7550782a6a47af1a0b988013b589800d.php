<?php

/*
 * Squelette : prive/formulaires/login.html
 * Date :      Fri, 23 Nov 2012 17:09:45 GMT
 * Compile :   Fri, 23 Nov 2012 17:10:55 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette prive/formulaires/login.html
// Temps de compilation total: 2.303 ms
//

function html_7550782a6a47af1a0b988013b589800d($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {


	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<'.'?php header("' . 'Cache-Control: no-store, no-cache, must-revalidate' . '"); ?'.'>' .
'<'.'?php header("' . 'Pragma: no-cache' . '"); ?'.'>' .
'<div class=\'formulaire_spip formulaire_login\'>
	' .
(($t1 = strval(interdire_scripts((@$Pile[0]['_deja_loge']))))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_ok">' . $t1 . '</p>') :
		'') .
'
	' .
(($t1 = strval(interdire_scripts((@$Pile[0]['message_ok']))))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_ok">' . $t1 . '</p>') :
		'') .
'
	' .
(($t1 = strval(interdire_scripts((@$Pile[0]['message_erreur']))))!=='' ?
		('<p class=\'reponse_formulaire reponse_formulaire_erreur\'>' . $t1 . '</p>') :
		'') .
'

	' .
(($t1 = strval(interdire_scripts(entites_html((@$Pile[0]['echec_cookie']),true))))!=='' ?
		($t1 . (	'
	<fieldset class=\'reponse_formulaire reponse_formulaire_erreur\'>
		<h2>' .
	_T('public/spip/ecrire:avis_erreur_cookie') .
	'</h2>
		<p class="erreur_message">' .
	_T('public/spip/ecrire:login_cookie_oblige') .
	'<br />' .
	_T('public/spip/ecrire:login_cookie_accepte') .
	'</p>
	</fieldset>')) :
		'') .
'

	' .
(($t1 = strval(interdire_scripts(entites_html((@$Pile[0]['editable']),true))))!=='' ?
		($t1 . (	'
	<form id=\'formulaire_login\' method=\'post\' action=\'' .
	interdire_scripts(entites_html((@$Pile[0]['action']),true)) .
	'\' enctype=\'multipart/form-data\'>
	
	' .
		'<div>' .
	form_hidden(interdire_scripts(entites_html((@$Pile[0]['action']),true))) .
	'<input name=\'formulaire_action\' type=\'hidden\'
		value=\'' . @$Pile[0]['form'] . '\' />' .
	'<input name=\'formulaire_action_args\' type=\'hidden\'
		value=\'' . @$Pile[0]['formulaire_args']. '\' />' .
	(@$Pile[0]['_hidden']?@$Pile[0]['_hidden']:'') .
	'</div><fieldset>
		<legend>' .
	_T('public/spip/ecrire:form_forum_identifiants') .
	'</legend>
		<span id="spip_logo_auteur">' .
	sinon(interdire_scripts(@$Pile[0]['_logo']),'') .
	'</span>
		<ul>
			<li class="editer_login obligatoire' .
	((table_valeur((@$Pile[0]['erreurs']),'var_login'))  ?
			(' ' . 'erreur') :
			'') .
	'">
				<label for="var_login">' .
	_T('public/spip/ecrire:login_login2') .
	'</label>' .
	(($t2 = strval(table_valeur((@$Pile[0]['erreurs']),'var_login')))!=='' ?
			('
				<span class="erreur_message">' . $t2 . '</span>
				') :
			'') .
	'<input type=\'text\' class=\'text\' name=\'var_login\' id=\'var_login\' value="' .
	(@$Pile[0]['var_login']) .
	'" size=\'40\' />
			</li>
			<li class="editer_password obligatoire' .
	((table_valeur((@$Pile[0]['erreurs']),'password'))  ?
			(' ' . 'erreur') :
			'') .
	'">
				<label for="password">' .
	_T('public/spip/ecrire:login_pass2') .
	'</label>' .
	(($t2 = strval(table_valeur((@$Pile[0]['erreurs']),'password')))!=='' ?
			('
				<span class="erreur_message">' . $t2 . '</span>
				') :
			'') .
	'<input type=\'password\' class=\'password\' name=\'password\' id=\'password\' value="" size=\'40\' />
				<span class=\'details\'>&#91;<a href="' .
	interdire_scripts(generer_url_public('spip_pass', '')) .
	'" id=\'spip_pass\'>' .
	_T('public/spip/ecrire:login_motpasseoublie') .
	'</a>&#93;</span>
			</li>
			' .
	(($t2 = strval(interdire_scripts(entites_html((@$Pile[0]['rester_connecte']),true))))!=='' ?
			($t2 . (	'
			<li class="editer_session"><div class=\'choix\'>
				<input type="checkbox" class="checkbox" name="session_remember" id="session_remember" value="oui" ' .
		((@$Pile[0]['cnx'])  ?
				(' ' . 'checked="checked"') :
				'') .
		' onchange="jQuery(this).addClass(\'modifie\');" />
				<label class=\'nofx\' for="session_remember">' .
		_T('public/spip/ecrire:login_rester_identifie') .
		'</label>
			</div></li>')) :
			'') .
	'
		</ul>
	</fieldset>
	<p class="boutons"><input type="submit" class="submit" value="' .
	attribut_html(_T('public/spip/ecrire:bouton_valider')) .
	'" /></p>
	</form>
	')) :
		'') .
'
	
	' .
(($t1 = strval(interdire_scripts(entites_html((@$Pile[0]['auth_http']),true))))!=='' ?
		('<form action="' . $t1 . (	'" method="get">' .
	(($t2 = strval(interdire_scripts(form_hidden(entites_html((@$Pile[0]['auth_http']),true)))))!=='' ?
			('
	' . $t2 . '
	') :
			'') .
	'
	<fieldset>
		<legend>' .
	_T('public/spip/ecrire:login_sans_cookiie') .
	'</legend>
		' .
	_T('public/spip/ecrire:login_preferez_refuser') .
	'
		<input type="hidden" name="essai_auth_http" value="oui"/>
		' .
	(($t2 = strval(interdire_scripts(entites_html((@$Pile[0]['url']),true))))!=='' ?
			('<input type="hidden" name="url" value="' . $t2 . '"/>') :
			'') .
	'
		<p class="boutons"><input type="submit" class="submit" value="' .
	attribut_html(_T('public/spip/ecrire:login_sans_cookiie')) .
	'"/></p>
	</fieldset>
	</form>
	')) :
		'') .
'
</div>
');

	return analyse_resultat_skel('html_7550782a6a47af1a0b988013b589800d', $Cache, $page, 'prive/formulaires/login.html');
}
?>