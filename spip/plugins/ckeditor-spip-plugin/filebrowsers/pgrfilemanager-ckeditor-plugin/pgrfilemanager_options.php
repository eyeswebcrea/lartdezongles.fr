<?php
if (session_id() == null) {
	session_start();
}
if (!function_exists('ckeditor_setfilebrowser')) { // au cas ou un autre filebrowser est actif ...
	function ckeditor_setfilebrowser($cfg) {
		$_SESSION['PGRFILEMANAGER'] = array('enabled'=>false,'canedit'=>false) ;
		if ($cfg['peut_parcourir']) {
			$_SESSION['PGRFILEMANAGER']['enabled'] = $cfg['peut_parcourir'] ;
			$_SESSION['PGRFILEMANAGER']['canedit'] = $cfg['peut_telecharger'] ;
			$_SESSION['PGRFILEMANAGER']['path'] = $cfg['upload_dir'] ;
			$_SESSION['PGRFILEMANAGER']['url']  = $cfg['upload_url'] ;
			$_SESSION['PGRFILEMANAGER']['dirs'] = array(
				'Link' => $cfg['filesdir'],
				'Image' => $cfg['imgdir'],
				'Flash' => $cfg['flashdir']
			);
			$_SESSION['PGRFILEMANAGER']['exts'] = array(
				'Link' => preg_replace("~\s*;\s*~","|",ckeditor_lire_config('files_extensions_autorisees',_CKE_FILES_EXT_DEF)),
				'Flash' => preg_replace("~\s*;\s*~","|",ckeditor_lire_config('flash_extensions_autorisees',_CKE_FLASH_EXT_DEF)),
				'Image' => preg_replace("~\s*;\s*~","|",ckeditor_lire_config('images_extensions_autorisees',_CKE_IMAGES_EXT_DEF))
			) ;
		}
		$pgrfilemanager_plugin = url_absolue(dirname(find_in_path('lib/pgrfilemanager/plugin.js')).'/') ;
		$pgrfilemanager = url_absolue(find_in_path('lib/pgrfilemanager/PGRFileManager.php')) ;
		$cke_cfg['extraPlugin'] = 'pgrfilemanager' ;
		$cke_cfg['loadExtraPlugin'] = $pgrfilemanager_plugin ;
		// overwrite pgrfilemanger ckeditor plugin default to match real path of pgrfilemanager
		$cke_cfg['filebrowserImageBrowseLinkUrl'] = $pgrfilemanager.'?type=Link' ; 
		$cke_cfg['filebrowserBrowseUrl'] = $pgrfilemanager.'?type=Link' ;
		$cke_cfg['filebrowserImageBrowseUrl'] = $pgrfilemanager.'?type=Image' ;
		$cke_cfg['filebrowserFlashBrowseUrl'] = $pgrfilemanager.'?type=Flash' ;
		$cke_cfg['filebrowserUploadUrl'] = $pgrfilemanager.'?type=Link' ;
		$cke_cfg['filebrowserImageUploadUrl'] = $pgrfilemanager.'?type=Image' ;
		$cke_cfg['filebrowserFlashUploadUrl'] = $pgrfilemanager.'?type=Flash' ;
		return $cke_cfg ;
	}
}
?>
