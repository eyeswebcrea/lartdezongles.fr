<?php

include_spip('inc/ckeditor_constantes') ;
	
function formulaires_cka_charger_dist() {
        ($cfg = lire_config("ckeditor")) || ($cfg = array()) ;
	$valeurs = array(
		'taille' => array_key_exists('taille', $cfg)?$cfg['taille']:_CKE_HAUTEUR_DEF,
		'vignette' => array_key_exists('vignette', $cfg)?$cfg['vignette']:_CKE_VIGNETTE_DEF,
		'startspellcheck' => array_key_exists('startspellcheck', $cfg)?$cfg['startspellcheck']:_CKE_SCAYT_START_DEF,
		'editmode' => array_key_exists('editmode', $cfg)?$cfg['editmode']:_CKE_EDITMODE_DEF,
		'skin' => array_key_exists('skin', $cfg)?$cfg['skin']:_CKE_SKIN_DEF,
		'spellchecklang' => array_key_exists('spellchecklang', $cfg)?$cfg['spellchecklang']:_CKE_SCAYT_LANG_DEF,
		'ignoreversion' =>  array_key_exists('ignoreversion', $cfg)?$cfg['ignoreversion']:_CKE_IGNOREVERSION_DEF,
		'devtools' => array_key_exists('devtools', $cfg)?$cfg['devtools']:_CKE_DEVTOOLS_DEF
	) ;
	ecrire_config("ckeditor/ignoreversion",$cfg['ignoreversion']);
	return $valeurs ;
}

function formulaires_cka_verifier_dist() {
	$result = array() ;
	if (! ctype_digit(_request('taille'))) $result['taille'] = _T('ckeditor:err_taille_doit_etre_numerique') ;
	if (_request('vignette') && ! ctype_digit(_request('vignette'))) $result['vignette'] = _T('ckeditor:err_vignette_doit_etre_numerique') ;
	$langs = array("en_US","en_GB","en_CA","da_DK","nl_NL","fi_FI","fr_FR","fr_CA","de_DE","el_GR","it_IT","nb_NO","pt_PT","pt_BR","es_ES","sv_SE") ;
 	if (! in_array(_request('spellchecklang'), $langs)) $result['spellchecklang'] = _T('ckeditor:err_mauvais_code_de_langue') ;
	$skins = array("kama", "office2003", "v2") ;
	if (! in_array(_request('skin'), $skins)) $result['skin'] = _T('ckeditor:err_mauvaise_skin') ;
	$editmodes = array("spip", "ckeditor", "ckeditor-exclu") ;
	if (! in_array(_request('editmode'), $editmodes)) $result['editmode'] = _T('ckeditor:err_mauvais_mode_d_edition') ;
	if (count($result)) {
		$result['message_erreur'] = _T('ckeditor:ck_ko').
			"<ul>\n".
				(count($result)?'<li>'.join("</li>\n<li>", $result)."</li>\n":'').
			"</ul>\n" ;
	}
		
	return $result ;
}

function formulaires_cka_traiter_dist() {
	if (_request('_cfg_delete')) {
		$valeurs = formulaires_cka_charger_dist() ;
		foreach($valeurs as $cle =>$valeur) {
			ecrire_config('ckeditor/'.$cle, $valeur) ;
			$_GET[$cle] = $valeur ;
		}
		 return array('message_ok' => _T('ckeditor:ck_delete')) ;
	} else {
		ecrire_config('ckeditor/taille', _request('taille')) ;
		ecrire_config('ckeditor/vignette', _request('vignette')) ;
		ecrire_config('ckeditor/startspellcheck', (bool)_request('startspellcheck')) ;
		ecrire_config('ckeditor/editmode', _request('editmode')) ;
		ecrire_config('ckeditor/skin', _request('skin')) ;
		ecrire_config('ckeditor/spellchecklang', _request('spellchecklang')) ;
		ecrire_config('ckeditor/ignoreversion', _request('ignoreversion')) ;
		ecrire_config('ckeditor/devtools', _request('devtools')) ;

		return array('message_ok' => _T('ckeditor:ck_ok')) ;
	}
}

 ?>
