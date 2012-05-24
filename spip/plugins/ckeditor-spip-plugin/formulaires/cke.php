<?php

include_spip('inc/ckeditor_constantes') ;

function formulaires_cke_charger_dist() {
	($cfg = lire_config("ckeditor")) || ($cfg = array()) ;
	$valeurs = array(
		"formats" => array_key_exists('formats', $cfg)?$cfg['formats']:_CKE_FORMATS_DEF,
		"formatsclass" => array_key_exists('formatsclass', $cfg)?$cfg['formatsclass']:_CKE_FORMATS_CLASS_DEF,
		"webfonts" => array_key_exists('webfonts', $cfg)?$cfg['webfonts']:_CKE_WEBFONTS_DEF,
		"fontkit" => array_key_exists('fontkit', $cfg)?$cfg['fontkit']:_CKE_FONTKIT_DEF,
		"insertcsspublic" => array_key_exists('insertcsspublic', $cfg)?$cfg['insertcsspublic']:_CKE_INSERT_CSSPUBLIC_DEF,
		"insertcssprive" => array_key_exists('insertcssprive', $cfg)?$cfg['insertcssprive']:_CKE_INSERT_CSSPRIVEE_DEF,
		"styles" => array_key_exists('styles', $cfg)?$cfg['styles']:_CKE_STYLES_DEF,
		"fontsizes" => array_key_exists('fontsizes', $cfg)?$cfg['fontsizes']:_CKE_FONTSIZES_DEF,
		"liste_couleurs" => array_key_exists('liste_couleurs', $cfg)?$cfg['liste_couleurs']:null,
		"autres_couleurs" => array_key_exists('autres_couleurs', $cfg)?$cfg['autres_couleurs']:''
	) ;
	return $valeurs ;
}

function formulaires_cke_verifier_dist() {
	$result = array() ;
	if (_request("formats") && ! preg_match("~^\s*\w+(\s*;\s*\w+)*\s*$~", _request("formats"))) $result["formats"] = _T("ckeditor:err_mauvaise_liste_de_formats") ;
	if (_request("formatsclass") && ! preg_match("~^\s*\w+\s*$~", _request("formatsclass"))) $result["formatsclass"] = _T("ckeditor:err_mauvaise_class_pour_formats") ;
	if (count($result)) {
		$result['message_erreur'] = _T('ckeditor:ck_ko').
			"<ul>\n".
				(count($result)?'<li>'.join("</li>\n<li>", $result)."</li>\n":'').
			"</ul>\n" ;
	}
		
	return $result ;
}

function formulaires_cke_traiter_dist() {
	if (_request('_cfg_delete')) {
		$valeurs = formulaires_cke_charger_dist() ;
		foreach($valeurs as $cle =>$valeur) {
			ecrire_config('ckeditor/'.$cle, $valeur) ;
			$_GET[$cle] = $valeur ;
		}
		 return array('message_ok' => _T('ckeditor:ck_delete')) ;
	} else {
		ecrire_config("ckeditor/formats", _request("formats")) ;
		ecrire_config("ckeditor/formatsclass", _request("formatsclass")) ;
		ecrire_config("ckeditor/webfonts", _request("webfonts")) ;
		ecrire_config("ckeditor/fontkit", _request("fontkit")) ;
		ecrire_config("ckeditor/insertcsspublic", _request("insertcsspublic")) ;
		ecrire_config("ckeditor/insertcssprive", _request("insertcssprive")) ;
		ecrire_config("ckeditor/styles", _request("styles")) ;
		ecrire_config("ckeditor/fontsizes", _request("fontsizes")) ;
		ecrire_config("ckeditor/liste_couleurs", _request("liste_couleurs")) ;
		ecrire_config("ckeditor/autres_couleurs", _request("autres_couleurs")) ;
		return array('message_ok' => _T('ckeditor:ck_ok')) ;
	}
}

 ?>
