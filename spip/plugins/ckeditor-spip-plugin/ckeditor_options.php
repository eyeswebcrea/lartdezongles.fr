<?php
function ck_lang_options($text) {
	$cklangs = array(
'auto'=>'Auto détection',
'af'=>'Afrikaans','ar'=>'Arabic','bg'=>'Bulgarian','bn'=>'Bengali/Bangla','bs'=>'Bosnian','ca'=>'Catalan','cs'=>'Czech','da'=>'Danish','de'=>'German','el'=>'Greek','en'=>'English','en-au'=>'English (Australia)','en-ca'=>'English (Canadian)','en-uk'=>'English (United Kingdom)','eo'=>'Esperanto','es'=>'Spanish','et'=>'Estonian','eu'=>'Basque','fa'=>'Persian','fi'=>'Finnish','fo'=>'Faroese','fr'=>'French','fr-ca'=>'French (Canada)','gl'=>'Galician','gu'=>'Gujarati','he'=>'Hebrew','hi'=>'Hindi','hr'=>'Croatian','hu'=>'Hungarian','is'=>'Icelandic','it'=>'Italian','ja'=>'Japanese','km'=>'Khmer','ko'=>'Korean','lt'=>'Lithuanian','lv'=>'Latvian','mn'=>'Mongolian','ms'=>'Malay','nb'=>'Norwegian Bokmal','nl'=>'Dutch','no'=>'Norwegian','pl'=>'Polish','pt'=>'Portuguese (Portugal)','pt-br'=>'Portuguese (Brazil)','ro'=>'Romanian','ru'=>'Russian','sk'=>'Slovak','sl'=>'Slovenian','sr'=>'Serbian (Cyrillic)','sr-latn'=>'Serbian (Latin)','sv'=>'Swedish','th'=>'Thai','tr'=>'Turkish','uk'=>'Ukrainian','vi'=>'Vietnamese','zh'=>'Chinese Traditional','zh-cn'=>'Chinese Simplified'
	) ;
	$result = '' ;
	foreach($cklangs as $lang => $langname) {
		$result .= "<option value='$lang'" ;
		if ($text == $lang) {
			$result .= " selected" ;
		}
		$result .= ">$langname</option>\n" ;
	}
	return $result ;
}

if (! function_exists("json_encode") ) {
	include_spip("inc/json_encode") ;
}

include_spip('inc/filtres') ;

function ckversion($dum) {
	$v=abs(version_svn_courante(dirname(__FILE__)));
	return ($v?$v:'');
}

function ck_split($item) {
	$result = preg_split("~(\||\\|/)~", $item) ;
	return (is_array($result)?$result:array($item, $item)) ;
}
function ck_enliste($texte, $double = false) {
	$texte = trim($texte) ;
	if (!$texte) return array() ;
	$result = preg_split("~\s*[,;:]\s*~", $texte) ;
	if ($double) {
		$result = array_map('ck_split', $result) ;
	}
	return $result ;
}

function liste_CHAMPS_EXTRAS() {
	if ($iextras = $GLOBALS['meta']['iextras']) { // y'a-t-il des champs extra ?
		$iextras = unserialize($iextras) ;
		foreach($iextras as $id => $iextra) {
			if ($iextra->type == 'bloc') { // de type bloc ?
				$result[] = $iextra->champ ;
			}
		}
	} else {
		$result = array() ;
	}
	return $result ;
}

function balise_CHAMPS_EXTRAS_dist($p) {
	$p->code = "liste_CHAMPS_EXTRAS()" ;
	$p->interdire_scripts = false ;
	return $p ;
}

?>
