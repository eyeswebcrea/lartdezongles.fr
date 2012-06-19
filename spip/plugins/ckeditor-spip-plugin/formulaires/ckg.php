<?php

include_spip('inc/ckeditor_constantes') ;

function formulaires_ckg_charger_dist() {
	($cfg = lire_config("ckeditor")) || ($cfg = array()) ;
	$valeurs = array(
		'plugins' => $cfg['plugins'],
		'plugin_position_reference' => $cfg['plugin_position_reference'],
		'pluginbarreposition' => $cfg['pluginbarreposition']
	) ;
	return $valeurs ;
}

function formulaires_ckg_verifier_dist() {
	$result = array() ;
	if (count($result)) {
		$result['message_erreur'] = _T('ckeditor:ck_ko').
			"<ul>\n".
				(count($result)?'<li>'.join("</li>\n<li>", $result)."</li>\n":'').
			"</ul>\n" ;
	}	
	return $result ;
}

function formulaires_ckg_traiter_dist() {
	ecrire_config("ckeditor/plugins", _request("plugins")) ;
	ecrire_config("ckeditor/plugin_position_reference", _request("plugin_position_reference")) ;
	ecrire_config("ckeditor/pluginbarreposition", _request("pluginbarreposition")) ;
	return array() ;
}

 ?>
