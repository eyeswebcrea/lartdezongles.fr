<?php

include_spip('inc/ckeditor_constantes') ;
include_spip('inc/ckeditor_tools') ;

function array_entity_decode($array, $charset='UTF-8') {
	if (is_array($array)) {
		$result = array() ;
		foreach($array as $k => $v) {
			$result[html_entity_decode($k,ENT_NOQUOTES,$charset)] = array_entity_decode($v,$charset) ;
		}
		return $result ;
	} else {
		return html_entity_decode($array,ENT_NOQUOTES,$charset) ;
	}
}

function formulaires_ckh_charger_dist() {
	($cfg = lire_config("ckeditor")) || ($cfg = array()) ;
	$cke_tags_def = array_entity_decode(unserialize(_CKE_TAGS_DEF),$GLOBALS['meta']['charset']) ;
	if (! is_array($cfg['tags'])) { ecrire_config('ckeditor/tags', $cfg['tags'] = $cke_tags_def) ; }
	$modele = _request('nouveau_modele') ? _request('nom_modele') : _request('modeles') ;
	$modele = preg_replace('~xx$~i', '' , $modele) ;
	$valeurs = array(
		'tags' => $cke_tags_def,
	/* faux champs : utilisés pour la gestion du formulaire (ie: initialisation de #ENV) */
		'intitule' => $cfg['tags'][$modele]['intitule'],
		'info' => $cfg['tags'][$modele]['info'],
		'_cke_nouveau_modele' => _request('_cke_nouveau_modele'),
		'_cke_edite_modele' => _request('_cke_edite_modele'),
		'nouveau_modele' => _request('nouveau_modele'),
		'modeles' => _request('_cke_edite_modele')?_request('modeles'):''
	) ;
	return $valeurs ;
}

function formulaires_ckh_verifier_dist() {
	$result = array() ;
	if (($nom_modele =_request('nom_modele')) && preg_match('~^/~', $nom_modele)) {
		$result['nom_modele'] = _T('ckeditor:modele_commence_pas_par_slash') ;
	}
	if (count($result)) {
		$result['message_erreur'] = _T('ckeditor:ck_ko').
			"<ul>\n".
				(count($result)?'<li>'.join("</li>\n<li>", $result)."</li>\n":'').
			"</ul>\n" ;
	}
	return $result ;
}

function formulaires_ckh_traiter_dist() {
	if (_request('_cfg_delete')) {
		$valeurs = formulaires_ckh_charger_dist() ;
		foreach($valeurs as $cle =>$valeur) {
			ecrire_config('ckeditor/'.$cle, $valeur) ;
			$_GET[$cle] = $valeur ;
		}
		return array('message_ok' => _T('ckeditor:ck_delete')) ;
	} else if (_request('_cke_supprime_modele') && _request('modeles')) {
		$tags = lire_config('ckeditor/tags') ;
		if (is_array($tags)) {
			unset($tags[_request('modeles')]) ;
			ecrire_config('ckeditor/tags', $tags) ;
			ckeditor_ecrire_protectedtags($tags) ;
		}
		return array('message_ok' => _T('ckeditor:modele_supprime', array('modele' => _request('modeles')))) ;
	} else if (_request('_cke_nouveau_modele') && _request('nouveau_modele')) {
		$tags = lire_config('ckeditor/tags') ;
		$modele = _request('nouveau_modele') ;
		$type = '' ; $tag_closed = false ;
		if (preg_match('~^/(.+)$/~', $modele, $m)) {
			$modele = $m[1] ;
			$tag_closed = true ;
		}
		if (preg_match('~(.+)(xx|XX)$~', $modele, $m)) {
			$modele = $m[1] ;
			($m[2] == 'xx') && ($type = 'num-facultatif') ;
			($m[2] == 'XX') && ($type = 'num-obligatoire') ;
		}
		ecrire_config('ckeditor/tags/'.$modele.'/type', $type) ;
		ecrire_config('ckeditor/tags/'.$modele.'/fermante', $tag_closed) ;
		ecrire_config('ckeditor/tags/'.$modele.'/syntaxe', 'spip') ;
		ckeditor_ecrire_protectedtags($tags) ;
	} else if (_request('_cke_valide_modele')) {
		$modele = _request('nom_modele') ;
		// le 'code' suivante sert à renuméroter les tableaux (sinon, suite aux ajouts et suppressions d'items, 
		// la numérotation est aléatoire et la réédition de l'item est susceptible de ne pas fonctionner
		// à cause du var cpt_param = #TOTAL_BOUCLE+1 qui suppose que le tableau est numéroté de 1 en 1 à partir de 0
		
		$val = _request('param_valeurs') ;
		$val = (is_array($val)?array_values($val):array()) ;
		ecrire_config('ckeditor/tags/'.$modele.'/valeurs', $val) ;

		$val = _request('param_noms') ;
		$val = (is_array($val)?array_values($val):array()) ;
		ecrire_config('ckeditor/tags/'.$modele.'/noms', $val) ;

		$val = _request('param_ids') ;
		$val = (is_array($val)?array_values($val):array()) ;
		ecrire_config('ckeditor/tags/'.$modele.'/ids', $val) ;

		ecrire_config('ckeditor/tags/'.$modele.'/type', _request('type_modele') ) ;
		ecrire_config('ckeditor/tags/'.$modele.'/syntaxe', _request('syntaxe_balise') ) ;
		ecrire_config('ckeditor/tags/'.$modele.'/fermante', _request('balise_fermante') ) ;
		ecrire_config('ckeditor/tags/'.$modele.'/echappe_car', _request('echappe_car') ) ;
		ecrire_config('ckeditor/tags/'.$modele.'/nombre', _request('type_num') ) ;
		ecrire_config('ckeditor/tags/'.$modele.'/intitule', _request('intitule') ) ;
		ecrire_config('ckeditor/tags/'.$modele.'/info', _request('info') ) ;
		ckeditor_ecrire_protectedtags($tags) ;

		return array('message_ok' => _T('ckeditor:modification_de_modele')) ;
	}
}

 ?>
