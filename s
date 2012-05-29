spip/CHANGELOG.txt:r15839 | denisb    | faire en sorte que, comme en 2.0,  pour un document sans vignette specifique, LOGO_DOCUMENT** tout comme LOGO_DOCUMENT|fichier retourne le bon chemin vers prive/vignettes/ (sans ajout d'un IMG/ malvenu).
spip/ecrire/action/copier_local.php:		// On le sort du repertoire IMG/distant/
spip/ecrire/action/copier_local.php:		// $fichier contient IMG/distant/...
spip/ecrire/inc/distant.php:	$d = creer_repertoire_documents('distant'); # IMG/distant/
spip/ecrire/inc/distant.php:	$d = sous_repertoire($d, $extension); # IMG/distant/pdf/
spip/ecrire/inc/documents.php:// ainsi que les fichiers correspondants dans IMG/
spip/ecrire/inc/flock.php:	$path = $base.$subdir; # $path = 'IMG/distant/pdf' ou 'IMG/distant_pdf'
spip/ecrire/inc/getdocument.php:// Creer IMG/pdf/
spip/ecrire/inc/import_1_3.php:	  $dir_img = '@^'. preg_quote (isset($atts['dir_img']) ? $atts['dir_img']:'IMG/') . '@';
spip/ecrire/inc/tourner.php:	// n'est pas distante, qu'elle est bien presente dans IMG/
spip/ecrire/inc_version.php:define('_NOM_PERMANENTS_ACCESSIBLES', "IMG/");
spip/ecrire/lang/ecrire_cpf.php:Oubli pa r&eacute;kup&egrave;r osi tout sak nana dann r&eacute;pertwar <i>IMG/</i>, s&eacute; dir
spip/ecrire/lang/ecrire_da.php: Husk ogs&aring; at medtage hele kataloget <i>IMG/</i>, som rummer de billeder og dokumenter, der bruges i artikler og afsnit.',
spip/ecrire/lang/ecrire_eu.php:'texte_admin_tech_01' => 'Aukera honek basearen edukia ecrire/data direktorioan bilduko den fitxategi batean gordetzen uzten dizu.Halaber ez ahaztu IMG/direktorioaren osotasuna berreskuratzea, artikuluetan eta ataletan erabilitako irudiak eta dokumentuak dituena.',
spip/ecrire/lang/ecrire_ja.php:'texte_admin_tech_01' => '&#12371;&#12398;&#12458;&#12503;&#12471;&#12519;&#12531;&#12399;&#12487;&#12540;&#12479;&#12505;&#12540;&#12473;&#12398;&#20869;&#23481;&#12434;@dossier@&#12487;&#12451;&#12524;&#12463;&#12488;&#12522;&#12395;&#29992;&#24847;&#12375;&#12390;&#12354;&#12427;&#12501;&#12449;&#12452;&#12523;&#12395;&#20445;&#23384;&#12377;&#12427;&#12371;&#12392;&#12364;&#12391;&#12365;&#12414;&#12377;&#12290;&#35352;&#20107;&#12420;&#12475;&#12463;&#12471;&#12519;&#12531;&#12391;&#20351;&#12387;&#12383;&#30011;&#20687;&#12420;&#12489;&#12461;&#12517;&#12513;&#12531;&#12488;&#12434;&#21547;&#12435;&#12384;<i>IMG/</i>&#20840;&#20307;&#12289;&#12487;&#12451;&#12524;&#12463;&#12488;&#12522;&#12434;&#24536;&#12428;&#12378;&#12395;&#20445;&#23384;&#12375;&#12390;&#12362;&#12356;&#12390;&#12367;&#12384;&#12373;&#12356;&#12290;',
spip/ecrire/lang/ecrire_oc_auv.php:Oblidetz pas tanpauc de recuperar l\'integralitat dau repert&ograve;ri <i>IMG/</i>, que conten los imatges e los documents utilizats dins los articles e rubricas.',
spip/ecrire/lang/ecrire_oc_gsc.php:N\'oblidetz pas tanp&ograve;c de recuperar l\'integralitat deu repert&ograve;ri <i>IMG/</i>, qui contien los imatges e los documents utilizats dens los articles e rubricas.',
spip/ecrire/lang/ecrire_oc_lms.php:Oblidetz pas tanpauc de recuperar l\'integralitat dau repert&ograve;ri <i>IMG/</i>, que conten los imatges e los documents utilizats dins los articles e rubricas.',
spip/ecrire/lang/ecrire_oc_ni_la.php:Non oblidetz nimai de recuperar l\'integralitat dau repert&ograve;ri <i>IMG/</i>, que conten lu imatges e lu documents utilizats dins lu articles e rubricas.',
spip/ecrire/lang/ecrire_oc_prv.php:Oblidetz pas tanpauc de recuperar l\'integralitat dau repert&ograve;ri <i>IMG/</i>, que conten leis imatges e lei documents utilizats dins leis articles e rubricas.',
spip/ecrire/lang/ecrire_oc_va.php:Eissublietz pas tanpauc de recuperar l\'integralitat dau repert&ograve;ri <i>IMG/</i>, que conten los imatges e los documents utilizats dins los articles e rubricas.',
spip/ecrire/lang/ecrire_pt.php:'texte_admin_tech_01' => 'Esta op&ccedil;&atilde;o permite-lhe salvaguardar o conte&uacute;do da base num ficheiro que ser&aacute; armazenado no direct&oacute;rio @dossier@.N&atilde;o esquecer tamb&eacute;m recuperar a totalidade do direct&oacute;rio <i>IMG/</i>, que cont&eacute;m as imagens e os documentos utlizados nos artigos e rubricas.', # MODIF
spip/ecrire/lang/ecrire_vi.php:'texte_admin_tech_01' => 'Ch&#7885;n l&#7921;a n&agrave;y cho ph&eacute;p b&#7841;n gi&#7919; l&#7841;i n&#7897;i dung c&#7911;a database v&agrave;o trong m&#7897;t h&#7891; s&#417; &#273;&#7921;ng trong ng&#259;n @dossier@. V&agrave; c&#361;ng &#273;&#7915;ng qu&ecirc;n c&#7845;t gi&#7919; l&#7841;i l&#7841;i to&agrave;n b&#7897; ng&#259;n <i>IMG/</i>, ch&#7913;a &#273;&#7921;ng c&aacute;c h&igrave;nh &#7843;nh d&ugrave;ng trong c&aacute;c b&agrave;i v&#7903; v&agrave; &#273;&#7873; m&#7909;c.', # MODIF
spip/ecrire/lang/ecrire_zh.php:&#35760;&#24471;&#21047;&#26032;&#25972;&#20010; <i>IMG/</i> &#30446;&#24405;, &#23427;&#21253;&#21547;&#25991;&#31456;&#21644;&#21508;&#19987;&#26639;&#20013;&#20351;&#29992;&#30340;&#22270;&#29255;&#21644;&#25991;&#26723;.', # MODIF
spip/ecrire/maj/v019.php:		// attention, en cas de mutualisation _DIR_IMG contient quelque chose comme sites/urldusite/IMG/
spip/ecrire/public/quete.php:				// on retourne une url du type IMG/artonXX?timestamp
spip/ecrire/public/quete.php:				// et placer un expire sur le dossier IMG/
spip/plugins/cfg/cfg/classes/cfg_fichier.php:		// hum stocke dans IMG/$ext ?
spip/plugins/cfg/cfg/classes/cfg_fichier.php: * Creer IMG/config/vue
spip/plugins/cfg/cfg_fonctions.php: * #cfg_chemin retourne l'adresse complete : 'IMG/config/vue/champ.ext'
spip/plugins/cfg/changelog.txt:Celui-ci va stocker le fichier dans IMG/config/{vue}/{champ}.ext,
spip/plugins/ckeditor-spip-plugin/ChangeLog.txt:	  image dans IMG/type/ et insertion dans la DB spip
spip/plugins/ckeditor-spip-plugin/ChangeLog.txt:	  décompresser les polices-kits dans IMG/FontKits/<nom du kit>
spip/plugins/ckeditor-spip-plugin/lang/ckeditor_ar.php:	'aide_fontkit' => '', /* missing (Cochez cette option pour pouvoir utiliser les kits de police de <a href="http://www.fontsquirrel.com/">Font Squirrel</a> que vous aurez pr&#233;alablement d&#233;compress&#233;es dans un r&#233;pertoire par kit dans _DIR_IMG/FontKits/.) */
spip/plugins/ckeditor-spip-plugin/lang/ckeditor_en.php:	'aide_fontkit' => 'Mark this option to use the font kits for <a href="http://www.fontsquirrel.com/">Font Squirrel</a> that you have previously uncompressed directory by kit in _DIR_IMG/FontKits/.',
spip/plugins/ckeditor-spip-plugin/lang/ckeditor_fr.php:	'aide_fontkit' => 'Cochez cette option pour pouvoir utiliser les kits de police de <a href="http://www.fontsquirrel.com/">Font Squirrel</a> que vous aurez pr&#233;alablement d&#233;compress&#233;es dans un r&#233;pertoire par kit dans _DIR_IMG/FontKits/.',
