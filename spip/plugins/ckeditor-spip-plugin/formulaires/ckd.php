<?php
	
include_spip('inc/ckeditor_constantes') ;

function formulaires_ckd_charger_dist() {
        ($cfg = lire_config("ckeditor")) || ($cfg = array()) ;
	$valeurs = array(
		'utilise_upload' => array_key_exists('utilise_upload', $cfg)?$cfg['utilise_upload']:_CKE_USE_DIRECTUPLOAD_DEF,
		'autorise_parcours' => array_key_exists('autorise_parcours', $cfg)?$cfg['autorise_parcours']:_CKE_PARCOURS_DEF,
		'autorise_telechargement' => array_key_exists('autorise_telechargement', $cfg)?$cfg['autorise_telechargement']:_CKE_UPLOAD_DEF,
		'autorise_telechargement_redacteur' => array_key_exists('autorise_telechargement_redacteur', $cfg)?$cfg['autorise_telechargement_redacteur']:_CKE_UPLOAD_REDAC_DEF,
		'autorise_mkdir' => array_key_exists('autorise_mkdir', $cfg)?$cfg['autorise_mkdir']:_CKE_MKDIR_DEF,
		'autorise_mkdir_redacteur' => array_key_exists('autorise_mkdir_redacteur', $cfg)?$cfg['autorise_mkdir_redacteur']:_CKE_MKDIR_REDAC_DEF,
		'base_dir' => array_key_exists('base_dir', $cfg)?$cfg['base_dir']:preg_replace(_CKE_RACINE_REGEX, '', _CKE_DIR_UPLOAD_DEF),
		'images_dir' => array_key_exists('images_dir', $cfg)?$cfg['images_dir']:_CKE_IMAGES_UPLOAD_DEF,
		'images_extensions_autorisees' => array_key_exists('images_extensions_autorisees', $cfg)?$cfg['images_extensions_autorisees']:_CKE_IMAGES_EXT_DEF,
		'flash_dir' => array_key_exists('flash_dir', $cfg)?$cfg['flash_dir']:_CKE_FLASH_UPLOAD_DEF,
		'flash_extensions_autorisees' => array_key_exists('flash_extensions_autorisees', $cfg)?$cfg['flash_extensions_autorisees']:_CKE_FLASH_EXT_DEF,
		'files_dir' => array_key_exists('files_dir', $cfg)?$cfg['files_dir']:_CKE_FILES_UPLOAD_DEF,
		'files_extensions_autorisees' => array_key_exists('files_extensions_autorisees', $cfg)?$cfg['files_extensions_autorisees']:_CKE_FILES_EXT_DEF
	) ;
	return $valeurs ;
}

function formulaires_ckd_verifier_dist() {
	$result = array() ;
	if (preg_match("~^(\.\./|.*/\.\./).*$~", _request("base_dir"))) $result["base_dir"] = _T("ckeditor:err_repertoire_parent_interdit") ;
	if (strpos(_request("images_dir"), "/") || (_request("images_dir")=='..')) $result["images_dir"] = _T("ckeditor:err_imgdir_pas_de_sousrep") ;
	if (strpos(_request("flash_dir"), "/") || (_request("flash_dir")=='..')) $result["flash_dir"] = _T("ckeditor:err_flashdir_pas_de_sousrep") ;
	if (strpos(_request("files_dir"), "/") || (_request("files_dir")=='..')) $result["files_dir"] = _T("ckeditor:err_filesdir_pas_de_sousrep") ;
	if (! preg_match("~^\s*\w+(\s*;\s*\w+)*\s*$~", _request("images_extensions_autorisees"))) $result["images_extensions_autorisees"] = _T("ckeditor:err_images_extensions_autorisees") ;
	if (! preg_match("~^\s*\w+(\s*;\s*\w+)*\s*$~", _request("flash_extensions_autorisees"))) $result["flash_extensions_autorisees"] = _T("ckeditor:err_flash_extensions_autorisees") ;
	if (! preg_match("~^\s*\w+(\s*;\s*\w+)*\s*$~", _request("files_extensions_autorisees"))) $result["files_extensions_autorisees"] = _T("ckeditor:err_files_extensions_autorisees") ;

	if (count($result)) {
		$result['message_erreur'] = _T('ckeditor:ck_ko').
			"<ul>\n".
				(count($result)?'<li>'.join("</li>\n<li>", $result)."</li>\n":'').
			"</ul>\n" ;
	}
		
	return $result ;
}

function formulaires_ckd_traiter_dist() {
	if (_request('_cfg_delete')) {
		$valeurs = formulaires_ckd_charger_dist() ;
		foreach($valeurs as $cle =>$valeur) {
			ecrire_config('ckeditor/'.$cle, $valeur) ;
			$_GET[$cle] = $valeur ;
		}
		 return array('message_ok' => _T('ckeditor:ck_delete')) ;
	} else {
		ecrire_config("ckeditor/utilise_upload", _request("utilise_upload")) ;
		ecrire_config("ckeditor/autorise_parcours", _request("autorise_parcours")) ;
		ecrire_config("ckeditor/autorise_telechargement", _request("autorise_telechargement")) ;
		ecrire_config("ckeditor/autorise_telechargement_redacteur", _request("autorise_telechargement_redacteur")) ;
		ecrire_config("ckeditor/autorise_mkdir", _request("autorise_mkdir")) ;
		ecrire_config("ckeditor/autorise_mkdir_redacteur", _request("autorise_mkdir_redacteur")) ;
		ecrire_config("ckeditor/base_dir", _request("base_dir")) ;
		ecrire_config("ckeditor/images_dir", _request("images_dir")) ;
		ecrire_config("ckeditor/images_extensions_autorisees", _request("images_extensions_autorisees")) ;
		ecrire_config("ckeditor/flash_dir", _request("flash_dir")) ;
		ecrire_config("ckeditor/flash_extensions_autorisees", _request("flash_extensions_autorisees")) ;
		ecrire_config("ckeditor/files_dir", _request("files_dir")) ;
		ecrire_config("ckeditor/files_extensions_autorisees", _request("files_extensions_autorisees")) ;
		return array('message_ok' => _T('ckeditor:ck_ok')) ;
	}
}

 ?>
