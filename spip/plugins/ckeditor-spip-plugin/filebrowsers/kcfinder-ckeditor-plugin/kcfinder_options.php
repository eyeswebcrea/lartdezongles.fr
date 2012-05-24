<?php
if (session_id() == null) {
	session_start();
}
if (!function_exists('ckeditor_setfilebrowser')) { // au cas ou un autre filebrowser est actif ...
		function ckeditor_setfilebrowser($cfg) {
			$_SESSION['KCFINDER'] = array(
				'disabled'=> !$cfg['peut_parcourir'],
				'readonly'=> !$cfg['peut_telecharger'],
				'uploadURL'=> $cfg['upload_url'],
				'uploadDir'=> $cfg['upload_dir'],
				'types'=>array( 
					$cfg['filesdir']=>
	preg_replace("~\s*;\s*~"," ",ckeditor_lire_config('files_extensions_autorisees',_CKE_FILES_EXT_DEF)),
					$cfg['imgdir']=>
	preg_replace("~\s*;\s*~"," ",ckeditor_lire_config('images_extensions_autorisees',_CKE_IMAGES_EXT_DEF)),
					$cfg['flashdir']=>
	preg_replace("~\s*;\s*~"," ",ckeditor_lire_config('flash_extensions_autorisees',_CKE_FLASH_EXT_DEF))
				)
			);
			$kcfinder = url_absolue(find_in_path('lib/kcfinder-2.21/browse.php')) ;
			$kcupload = url_absolue(find_in_path('lib/kcfinder-2.21/upload.php')) ;
			$cke_cfg['filebrowserImageBrowseLinkUrl'] = $cke_cfg['filebrowserBrowseUrl'] = "${kcfinder}?type=".$cfg['filesdir'] ;
			$cke_cfg['filebrowserImageBrowseUrl'] = "${kcfinder}?type=".$cfg['imgdir'] ;
			$cke_cfg['filebrowserFlashBrowseUrl'] = "${kcfinder}?type=".$cfg['flashdir'] ;
			if (ckeditor_lire_config('utilise_upload',_CKE_USE_DIRECT_UPLOAD_DEF)) {
				$cke_cfg['filebrowserUploadUrl'] = "${kcupload}?type=".$cfg['filesdir'] ;
				$cke_cfg['filebrowserImageUploadUrl'] = "${kcupload}?type=".$cfg['imgdir'] ;
				$cke_cfg['filebrowserFlashUploadUrl'] = "${kcupload}?type=".$cfg['flashdir'] ;
			}
			return $cke_cfg ;
		}
}
?>
