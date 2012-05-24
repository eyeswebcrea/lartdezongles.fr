<?php

include_spip('inc/ckeditor_constantes') ;
include_spip('inc/ckeditor_tools') ;

function formulaires_ckf_charger_dist() {
	($cfg = lire_config("ckeditor")) || ($cfg = array()) ;
	$valeurs = array(
		'nom_nouveau_modele' => '',
		'editer_modele' => _request('editer_modele'),
		'modele_a_editer' => _request('modele_a_editer'),
		'liste_modeles' => lire_config('ckeditor/modeles')
	) ;
	return $valeurs ;
}

function formulaires_ckf_verifier_dist() {
	$result = array() ;
	if (_request('nouveau_modele') && ! _request('nom_nouveau_modele')) {
		$result['nom_nouveau_modele'] = _T('ckeditor:nouveau_modele_sans_nom') ;
	}
	if (count($result)) {
		$result['message_erreur'] = _T('ckeditor:ck_ko').
			"<ul>\n".
				(count($result)?'<li>'.join("</li>\n<li>", $result)."</li>\n":'').
			"</ul>\n" ;
	}
		
	return $result ;
}

function formulaires_ckf_traiter_dist() {
	if (_request('_cfg_delete')) {
		$valeurs = formulaires_ckf_charger_dist() ;
		foreach($valeurs as $cle =>$valeur) {
			ecrire_config('ckeditor/'.$cle, $valeur) ;
			$_GET[$cle] = $valeur ;
		}
		 return array('message_ok' => _T('ckeditor:ck_delete')) ;
	} else if (_request('nouveau_modele')) {
		ecrire_config('ckeditor/modeles/'._request('nom_nouveau_modele'), array('modele'=>'', 'desc'=>'')) ;
		return array('message_ok' => _T('ckeditor:modele_cree', array('modele'=>_request('nom_nouveau_modele')))) ;
	} else if (_request('supprimer_modele')) {
		effacer_config('ckeditor/modeles/'._request('modele_a_editer')) ;
		return array('message_ok' => _T('ckeditor:modele_supprime', array('modele'=>_request('modele_a_editer')))) ;
	} else if (_request('editer_modele')) {
		ecrire_config('ckeditor/modele_a_editer', _request('modele_a_editer')) ;
		return array() ;
	} else if (_request('enregistrer_modele')) {
		// si on est en mode d'édition 'spip', alors, il faut retraduire vers l'html : vu que ckeditor attend de l'html
		ecrire_config('ckeditor/modeles/'._request('modele_edite').'/modele', (_request('editmode')=='spip'?ckeditor_spip2html(_request('modele')):_request('modele'))) ;
		ecrire_config('ckeditor/modeles/'._request('modele_edite').'/desc', _request('modele_description')) ;
		ecrire_config('ckeditor/modeles/'._request('modele_edite').'/image', _request('modele_image')) ;
		return array('message_ok' => _T('ckeditor:modele_enregistre', array('modele'=>_request('modele_edite')))) ;
	}
}

 ?>
