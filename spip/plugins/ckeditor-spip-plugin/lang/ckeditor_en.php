<?php

// This is a SPIP module file  --  Ceci est un fichier module de SPIP

$GLOBALS[$GLOBALS['idx_lang']] = array(

// A
	'acceder_repertoire' => 'Access the directory: @repertoire@.',
	'acces_interdit' => 'Access denied.',
	'affiche_les_informations_de_developpement' => '', /* missing (Afficher les informations de d&#233;veloppement) */
	'aide_class_css_formulaire' => '', /* missing (Si vous voulez utilisez CKEditor avec vos formulaires, il faut que vos <code>&lt;textarea&gt;</code>s aient une class CSS sp&#233;cifique que vous devez renseigner ici. Par d&#233;faut, CKEditor utilisera la la class CSS : <code>inserer_barre_edition</code> qui correspond aux <code>&lt;textarea&gt;</code>s auxquels le <code>porteplume</code> se greffe.) */
	'aide_contextes' => 'Indicate here a list of identifiers CSS (<code># identifier</code>) or CSS classes (<code>.class</code>) that can be applied to the &lt; body &gt; of the editor. You can specify a description of the context by entering: <code># contexte|description</code> or <code>. contexte|description</code>.<br/> <strong>Example:</strong> <code># colonne_un|Main column;. colonne_gauche|Left column;. colonne_droite|Right column; # extrait|As extract from text</code>',
	'aide_couleurs' => 'Enter here, a list of colors in the format: RGB or RRGGBB (example: 999 333 939 993 399 339 933 393). <br/>This allows, for example, predefine the colors in the CSS of the site and thus to maintain a certain unity site. <br/>Any invalid entry is ignored.',
	'aide_css_site' => 'Enter here a list (separated by commas) style sheets of site within CKEditor.',
	'aide_echappe_car' => '', /* missing (Lorsque vous entrez du texte dans un mod&#232;les &#224; balise fermantes, lors de la r&#233;&#233;dition, il est interpr&#233;t&#233; par SPIP. Pour &#233;viter cela, il faut prot&#233;ger certains caract&#232;res. A priori, il suffit de prot&#233;ger&nbsp;: <code>{}[]</code>.) */
	'aide_fontkit' => 'Mark this option to use the font kits for <a href="http://www.fontsquirrel.com/">Font Squirrel</a> that you have previously uncompressed directory by kit in _DIR_IMG/FontKits/.',
	'aide_fontsizes' => 'List of sizes for fonts. This list should follow the following syntax: <code>title 1/size 1;title 2/size 2 ...</code>',
	'aide_formats' => 'Sample : <code style="color: green;">div;pre;h3</code>',
	'aide_html2spip_non_trouvee' => 'The library <code>html2spip</code> is not installed. You can benefit from the automatic translation from HTML to SPIP. Please first install <a href="http://ftp.espci.fr/pub/html2spip/html2spip-0.6.zip"> library <code> html2spip </code></a> in the <code>lib/</code>.',
	'aide_identifiant_parametre_1' => '', /* missing (Vous pouvez laisser vide l&#39;identifiant pour que le param&#232;tre soit entr&#233; sous la forme : &lt;modele|valeur&gt; plut&#244;t que : &lt;modele|identifiant=valeur&gt;) */
	'aide_identifiant_parametre_2' => '', /* missing (Ici, vous devez entrer l&#39;identifiant du param&#232;tre, commme par exemple : left, player etc...) */
	'aide_images_modele' => 'If you want to change the proposed images, you can create a directory <code>images/templates/</code> in your directory <code>squelettes</code>.',
	'aide_inserer_la_css' => 'If you check these options, the plugin will take care to insert the HTML CSS loading fonts, otherwise you will need to modify the skeleton of your pages and insert them into the ones you want.',
	'aide_nom_parametre' => 'Here you must enter the parameter name as it will appear in the dialog CKeditor.',
	'aide_plugin' => 'If you want to install plugins for CKEditor, create a folder <code>plugins/ckeditor</code> accessible from the command SPIP <code>#CHEMIN</code> (for example in the folder <code>squelettes</code>)',
	'aide_styles' => 'Any style correctly defined here will appear in the "combo styles" of CKEditor.<br>A style must follow the syntax:<pre style="color: green;">NOM : element.class { css }</pre>In which, <ul><li><strong>NOM</strong> is: 	any string of characters long, it is the name that will appear in CKEditor,</li><li><strong>element</strong> is: an HTML element (strong, em, span, et c...), the selection you apply this style will be in an HTML block of that element type,</li><li><strong>class</strong> (optional) is: a class name to define CSS in your stylesheet,</li><li><strong>css</strong> (optional) is: valid CSS code, such as <code style="color: green;">color: blue;</code> (no testing is done, one error can crash the javascript generated and preventing the editor display).</li></ul><strong>Attention :</strong> you need to know CSS to manipulate\to change the content of this page.',
	'aide_syntaxe_modele' => '', /* missing (Les param&#232;tres des mod&#232;les spip sont normalement pass&#233; avec la syntaxe (spip) : <code>&lt;modele|param1=val1|param2=val2...></code>, si vous voulez que votre mod&#232;le utilise la syntaxe (html) : <code>&lt;modele param1="val1" param2="val2"...></code>, s&#233;lectionnez l&#39;option <code>html</code>.) */
	'aide_vignette' => 'Enter the maximum size of the thumbnails used by CKEditor. If you leave this box blank, the images will be displayed with their normal size by CKEditor.',
	'aide_webfonts' => 'Here, enter a list (separated by commas) of font names <a target="_blank" onclick="window.open(this.href,&#39;_blank&#39;,&#39;height=500,width=500,location=no,scrollbar=yes&#39;);return false;" href="http://code.google.com/webfonts">Google Web Fonts</a>. Names must be exactly those proposed in the google font directory',
	'ajoute_une_valeur' => 'Add a value',
	'ajoute_un_parametre' => 'Add a parameter',
	'apres' => 'after',
	'article' => 'article',
	'aucune_conversion' => '', /* missing (aucune conversion) */
	'aucun_document' => 'No document',
	'aucun_document_descriptif' => 'You have not uploaded any documents.',
	'aucun_parametre' => 'This model has no parameters.',
	'aucun_plugin' => 'SPIP does not detect the plugin in the plugins folder, please unpack the ZIP containing plugins for CKEditor. Each plugin must be in an individual folder as if it were installed in the <code>plugins</code> CKEDITOR folder.',
	'autoriser_autres_couleurs' => 'allow other colors',
	'autoriser_insertion_documents' => '&nbsp;Allow insertion of documents from any article.',
	'autoriser_liens_spip' => '&nbsp;Allow links/anchors in SPIP style.',
	'autoriser_mkdir' => 'Allow to create directories@plus@.',
	'autoriser_parcours_dossier_spip' => 'Allow to browse the folder SPIP to insert images.',
	'autoriser_redacteurs' => 'also authorize the writers@plus@.',
	'autoriser_telechargement_dossier_spip' => 'Allow to upload images to the SPIP folder.',
	'avant' => 'before',
	'avertissement_css' => '', /* missing (<strong>⚠ Attention :</strong> vous devez savoir manipuler le CSS pour pouvoir modifier le contenu de cette page.) */

// B
	'balises_spip_autoriser' => 'SPIP tags to allow in CKEditor:',
	'balises_spip_autoriser_descriptif' => '
Enter tags separated by «&nbsp;;&nbsp;», to specify a tag containing a number, type: <code>baliseXX</code><br/><strong>Example(1): </strong>to allow tags type: &lt;embXX|param1&gt; and &lt;docXX|param1&gt;, specify: <code>docXX ; embXX</code><br/><strong>Example(2): </strong>to allow tags type &lt;multi&gt;...&lt;/multi&gt; specify: <code>multi ; /multi</code>
',
	'balise_fermante' => 'closing tag',
	'bouton' => 'activate the button',

// C
	'changer_de_contexte' => 'Context:',
	'changer_d_image' => 'Change image:',
	'choisir_skin' => 'Choose a skin:',
	'choix_et_telechargement' => 'Choosing and uploading images:',
	'cisf' => '', /* missing (saisie facile (fonctionnalit&#233; exp&#233;rimentale)) */
	'ckeditor' => 'Basic configuration',
	'ckeditor_b' => 'Toolbars configuration',
	'ckeditor_b_light' => '', /* missing (Outils) */
	'ckeditor_c' => 'Advanced configuration',
	'ckeditor_c_light' => '', /* missing (Avanc&#233;e) */
	'ckeditor_d' => 'Uploading images/documents',
	'ckeditor_defaut' => 'CKEditor by default',
	'ckeditor_d_light' => '', /* missing (Documents) */
	'ckeditor_e' => 'Styles configuration',
	'ckeditor_exclu' => 'CKEditor only',
	'ckeditor_e_light' => '', /* missing (Styles) */
	'ckeditor_f' => 'Templates configuration',
	'ckeditor_f_light' => '', /* missing (Mod&#232;les de pages) */
	'ckeditor_g' => 'CKEDITOR Plugins',
	'ckeditor_g_light' => '', /* missing (Plugins) */
	'ckeditor_h' => 'SPIP Models Configuration',
	'ckeditor_h_light' => '', /* missing (Mod&#232;les SPIP) */
	'ckeditor_light' => '', /* missing (Base) */
	'ck_delete' => 'Reset configuration',
	'ck_ko' => 'Error in parameters.',
	'ck_ok' => 'Configuration saved.',
	'ck_reinit' => 'The plugin is totaly reset',
	'class_des_formats' => 'CSS class of items inserted by drop-down menu <em>formats</em>:',
	'class_partie_prive' => '', /* missing (classe CSS :) */
	'class_partie_publique' => '', /* missing (classe CSS :) */
	'configuration_des_couleurs' => 'Color configuration:',
	'configuration_des_modeles_spip' => 'SPIP Models',
	'configuration_des_polices' => 'Fonts configuration:',
	'configuration_modeles' => 'Templates management',
	'configuration_styles' => 'Styles configuration for CKEditor',
	'config_avancee' => 'Advanced Configuration',
	'config_barres_outils' => 'ToolBars Configuration',
	'config_base' => 'Basic Configuration',
	'confirmer_supprimer_modele' => 'Are you sure you want to delete this template?',
	'confirme_reinitialiser_plugin' => 'Are you sure you want to reset the plugin? (This will remove all your preferences)',
	'contenu_du_modele' => 'Template content:',
	'conversion_partielle_vers_spip' => '', /* missing (conversion partielle en typographie SPIP) */
	'copie_impossible' => '<p>Can not copy <code>@fichier@</code></p><blockquote>@errmsg@</blockquote>',
	'copie_reussie' => 'The file: <code>@fichier@</code> has been correctly copied.',
	'css_site' => 'Stylesheets Site (CSSs):',

// D
	'demarrer_correction_ortho' => 'Start spell checking:',
	'desactive_car_zappe_par_html2spip' => 'Disabled because ignored by HTML2SPIP.',
	'description' => 'Description:',
	'documents_article' => 'Show only documents of the article being edited.',
	'documents_rubrique' => 'Only show documents in the section being edited.',

// E
	'echappe_caracteres' => '', /* missing (Caract&#232;res prot&#233;g&#233;s dans le mod&#232;le :) */
	'editer_modele' => 'Edit the template',
	'edite_modele' => 'Edit',
	'edition_du_modele' => 'Editing the template',
	'enregistrer_modele' => 'Save the template',
	'entermode' => 'Enter gives:',
	'enter_br' => 'line break (br)',
	'enter_div' => 'paragraph (div)',
	'enter_p' => 'paragraph (p)',
	'erreur_droits' => 'rights error on the destination directory',
	'erreur_transmission' => 'transmission error',
	'err_conversion' => '<p>Problem of converions. No conversion.</p>',
	'err_filesdir_pas_de_sousrep' => 'Files: Enter the name of a subdirectory without /',
	'err_files_extensions_autorisees' => 'For the allowed extensions for the files, follow the format: <code>ext<sub>1</sub> ; ext<sub>2</sub> ; ... ; ext<sub>n</sub></code>.',
	'err_flashdir_pas_de_sousrep' => 'Flash: Enter the name of a subdirectory without /',
	'err_flash_extensions_autorisees' => 'For the allowed extensions for the Flash docuemnts, follow the format: <code>ext<sub>1</sub> ; ext<sub>2</sub> ; ... ; ext<sub>n</sub></code>.',
	'err_images_extensions_autorisees' => 'For the allowed extensions for the images, follow the format: <code>ext<sub>1</sub> ; ext<sub>2</sub> ; ... ; ext<sub>n</sub></code>.',
	'err_imgdir_pas_de_sousrep' => 'Images: Enter the name of a subdirectory without /',
	'err_la_largeur_ecran_etroit_doit_etre_numerique' => 'The width of the screen (slim) must be a number.',
	'err_la_largeur_ecran_large_doit_etre_numerique' => 'The width of the screen (wide) must be a number.',
	'err_mauvaise_class_pour_formats' => 'You have not entered a valid CSS class name.',
	'err_mauvaise_liste_de_formats' => 'Follow the syntax of the formats.',
	'err_mauvaise_skin' => 'Bad skin.',
	'err_mauvaise_syntaxe_de_tag' => 'Follow the syntax of the SPIP <code>tags</code> to authorize.',
	'err_mauvais_code_de_langue' => 'Bad language code.',
	'err_mauvais_langage' => 'The language should be a 2-letter code.',
	'err_mauvais_mode_d_edition' => 'Bad editing mode.',
	'err_mauvais_mode_entree' => '<code>ENTER</code> mode must follow a specific syntax.',
	'err_mauvais_mode_shiftentree' => '<code>SHIFT + input</code> mode must follow a specific syntax.',
	'err_repertoire_parent_interdit' => 'It is forbidden to go back in the tree to the parent directory.',
	'err_taille_doit_etre_numerique' => 'The height of the editor must be a number.',
	'err_vignette_doit_etre_numerique' => 'Thumbnails must have a digital dimension.',
	'etroit' => 'Narrow screen: ',
	'explique_div' => '<em>div</em> : in this mode pressing the [Enter] causes the insertion of a block html &lt;div&gt;, advantage: it takes account of information layout (alignment, etc ...) of these blocks, disadvantage: it does not follow the standard layout of SPIP, but it is possible to do so by selecting the proper style sheet.',
	'explique_p' => '<em>p</em> : in this mode, pressing the [Enter] causes the insertion of a block html &lt;p&gt;, advantage: that respects the SPIP layout, disadvantage: SPIP does not include information layout (alignment, etc ...) of these blocks.',
	'explorateur_titre' => 'File Explorer for CKeditor-SPIP-plugin',
	'extensions_autorisees_descriptif' => 'Enter the extensions separated by ";".',

// F
	'files_extensions_autorisees' => 'List of allowed extensions:',
	'fin' => 'end',
	'flash_extensions_autorisees' => 'List of allowed extensions:',
	'formats' => '	List of HTML-tags present in the "combo format":',

// G
	'gestion_plugins_ckeditor' => 'Managing CKEditor plugins',

// H
	'hauteur_editeur' => 'Height Editor: ',
	'html2spip_identite' => 'HTML tags that HTML2SPIP must leave untouched',
	'html2spip_limite' => 'Use the options CKEditor only compatible with SPIP',

// I
	'identifiant_du_parametre' => 'Id parameter:',
	'ignore_mauvaise_version' => '', /* missing (Ne pas tenir compte de la version de CKeditor install&#233;e) */
	'images_extensions_autorisees' => 'List of allowed extensions:',
	'image_du_modele' => '', /* missing (Image du mod&#232;le :) */
	'info_bulle' => 'Model description:',
	'inserer_la_css_prive' => 'Insert CSS in the private part.',
	'inserer_la_css_public' => 'Insert CSS in the public part.',
	'intitule_du_modele' => 'Title in the list box:',

// K
	'kcfinder_ignore' => ' (Option ignored by KCFinder)',

// L
	'label_article' => 'Article:',
	'label_auteur' => 'Author:',
	'label_breve' => 'News:',
	'label_du_parametre' => 'Label parameter:',
	'label_groupe_mots' => 'Group of keywords',
	'label_mot' => 'Keyword:',
	'label_section' => 'Section:',
	'langue_ckeditor' => 'CKEditor language:',
	'large' => 'Wide screen:',
	'largeur_barre_outils' => 'Maximum width available for toolbars (pixels) :',
	'les_champs_extras' => 'Extra Fields (experimental feature):',
	'les_crayons' => 'pencils (experimental feature)',
	'les_forums' => '', /* missing (les forums (fonctionnalit&#233; exp&#233;rimentale)) */
	'listes_des_couleurs_presentees' => 'List of colors displayed:',
	'liste_des_parametres' => 'Parameter list:',
	'liste_de_contextes' => 'List of contexts:',
	'liste_google_webfonts' => 'Font List <a href="http://code.google.com/webfonts">Google Web Fonts</a> to include:',
	'liste_telechargements_autorises' => '<p>Allowed file types are: <blockquote>@liste@</blockquote>',
	'loading' => 'Loading',

// M
	'modeles_necessitent_iterateurs' => 'The use and configuration of plugins CKEditor require the plugin <a href="http://www.spip-contrib.net/Les-Iterateurs-pour-spip-2-1"><code>it&#233;rateurs</code></a> and therefore uses at least SPIP 2.1 or SPIP 3.0, but this feature is optional.',
	'modeles_spip_autorisees' => 'SPIP Model',
	'modele_a_droite' => '', /* missing (&#224; droite) */
	'modele_a_gauche' => '', /* missing (&#224; gauche) */
	'modele_centre' => '', /* missing (centr&#233;) */
	'modele_commence_pas_par_slash' => 'A model name must not start with a slash &laquo;/&raquo;',
	'modele_cree' => 'The model <strong>@modele@</strong> is created.',
	'modele_document' => '', /* missing (Document) */
	'modele_enregistre' => 'The model <strong>@modele@</strong> is recorded.',
	'modele_image' => 'Image model:',
	'modele_incorpore' => '', /* missing (Incorpor&#233;) */
	'modele_supprime' => 'Model <strong>@modele@</strong> deleted.',
	'mode_edition_defaut' => 'Edit mode by default: ',
	'modification_de_modele' => 'SPIP Model Editing.',

// N
	'nom_du_bouton' => 'Button name:',
	'nom_du_nouveau_modele' => 'Enter the name of the new model:',
	'nom_du_parametre' => 'Parameter name:',
	'nom_nouveau_modele' => 'Model name:',
	'nom_repertoire_creer' => 'Directory name:',
	'normalement_detectee' => 'Normally this is autodetected value.',
	'nouveau' => 'New',
	'nouveau_label_de_valeur' => 'Enter the label under which the parameter appears in the CKeditor dialog:',
	'nouveau_modele' => 'New model',
	'nouveau_modele_sans_nom' => 'Unnamed new model.',
	'nouvelle_valeur_de_modele' => 'New value for this parameter:',
	'numerique_facultatif' => 'numeric (optional)',
	'numerique_obligatoire' => 'numeric',
	'num_article' => 'an article',
	'num_auteur' => 'an author',
	'num_breve' => 'a news',
	'num_document' => 'a document',
	'num_groupe_mots' => 'a group of words',
	'num_indefini' => 'other',
	'num_mot' => 'a word',
	'num_rubrique' => 'a section',
	'num_site' => 'a site',

// O
	'objet_en_edition' => '', /* missing (l&#39;objet en cours d&#39;&#233;dition) */
	'ok' => 'Ok',
	'options_css' => 'CSS options:',
	'options_html2spip' => 'HTML2SPIP Options:',
	'options_spip' => 'SPIP Options:',
	'ordre_du_bouton' => '', /* missing (ordre du bouton) */

// P
	'page_config_ckeditor' => '
<h4>Configuration of the CKEditor plugin</h4>
<p>Here you can configure settings of CKEditor</p>
<p>In particular, you can:</p>
<ul>
	<li>modifier les barres d&#39;outils (<em>think to do it otherwise you will have no tools in the toolbars)</em>,</li>
	<li>enable spell checking,</li>
	<li>allow the use of certain tags SPIP.</li>
<ul>
',
	'parametre_existe' => 'This parameter exists.',
	'partie_prive' => '', /* missing (les formulaires en partie priv&#233;e) */
	'partie_publique' => '', /* missing (les formulaires en partie publique) */
	'pas_numerique' => 'This is not a number.',
	'pixels' => 'pixels',
	'plugin' => 'plugin: ',
	'plugins_barre_position' => 'Buttons position:',
	'plugins_necessitent_iterateurs' => 'The use and configuration of plugins CKEditor require the plugin <a href="http://www.spip-contrib.net/Les-Iterateurs-pour-spip-2-1"><code>it&#233;rateurs</code></a> and therefore uses at least SPIP 2.1 or SPIP 3.0, but this feature is optional.',
	'plugin_active' => 'Activate the plugin',

// R
	'reinitialiser_le_plugin' => 'Reset plugin',
	'repertoire_des_fichiers' => 'Files directory',
	'repertoire_des_flash' => 'Flash® directory:',
	'repertoire_des_images' => 'Images directory:',
	'repertoire_de_base' => 'Uploads directory',
	'repertoire_parent' => 'Access parent directory.',
	'reset_toolbars' => 'Reset toolbars',
	'retour' => 'Back',
	'rubrique' => 'Section',

// S
	'sans_contexte' => 'without context',
	'selection_aucun' => 'Deselect all',
	'selection_document_spip' => 'Selecting a SPIP document',
	'selection_inverse' => 'Inverse selection',
	'selection_tout' => 'Select all',
	'shiftentermode' => 'Shift + Enter gives:',
	'spipbalise_necessite_iterateurs' => 'The SPIP model configuration required the plugin <a href="http://www.spip-contrib.net/Les-Iterateurs-pour-spip-2-1"><code>it&#233;rateurs</code></a>.',
	'spipification' => 'Copyright &copy; 2009 <a <a style="text-decoration:underline;color:blue;cursor:pointer;" href="http://code.google.com/p/ckeditor-spip-plugin/">Plugin SPIP</a> - Fr&#233;d&#233;ric Bonnaud, Mehdi Cherifi, Emmanuel Dreyfus',
	'spip_defaut' => 'SPIP by default',
	'styles' => 'Styles:',
	'supprimer' => 'Delete',
	'supprimer_cette_valeur' => 'Deleting this value:',
	'supprimer_ce_modele' => 'Deleting this model:',
	'supprimer_ce_parametre' => 'Deleting this parameter:',
	'supprimer_modele' => 'Delete the model',
	'supprime_ce_parametre' => 'Delete this parameter',
	'supprime_modele' => 'Delete',
	'syntaxe' => '', /* missing (Syntaxe des param&#232;tres :) */

// T
	'tailles_de_police' => 'Font size:',
	'taille_maximale_telechargements' => '<p>The maximum allowed size of a file is @taille@Mo.</p>',
	'tb_basic' => '', /* missing (basique) */
	'tb_full' => '', /* missing (compl&#232;te) */
	'telecharger' => 'Upload',
	'telecharger_document' => 'Upload a document',
	'toolbar' => '', /* missing (barre d&#39;outils :) */
	'tool_About' => 'About',
	'tool_Anchor' => 'Anchor',
	'tool_BGColor' => 'Background color',
	'tool_Blockquote' => 'Blockquote',
	'tool_Bold' => 'Bold',
	'tool_BulletedList' => 'Bulleted list',
	'tool_Button' => 'Button',
	'tool_Checkbox' => 'Checkbox',
	'tool_Copy' => 'Copy',
	'tool_Cut' => 'Cut',
	'tool_Find' => 'Find',
	'tool_Flash' => 'Flash',
	'tool_Font' => 'Font',
	'tool_FontSize' => 'FontSize',
	'tool_Form' => 'Form',
	'tool_Format' => 'Format',
	'tool_HiddenField' => 'Hidden field',
	'tool_HorizontalRule' => 'Horizontal rule',
	'tool_Iframe' => 'Iframe',
	'tool_Image' => 'Image',
	'tool_ImageButton' => 'Image button',
	'tool_Indent' => 'Indent',
	'tool_Italic' => 'Italic',
	'tool_JustifyBlock' => 'Justify block',
	'tool_JustifyCenter' => 'Justify center',
	'tool_JustifyLeft' => 'Justify left',
	'tool_JustifyRight' => 'Justify right',
	'tool_Link' => 'Link',
	'tool_Maximize' => 'Maximize',
	'tool_NewPage' => 'New page',
	'tool_NumberedList' => 'Numbered list',
	'tool_Outdent' => 'Outdent',
	'tool_PageBreak' => 'Page break',
	'tool_Paste' => 'Paste',
	'tool_PasteFromWord' => 'Paste from Word',
	'tool_PasteText' => 'Paste text',
	'tool_Print' => 'Print',
	'tool_Radio' => 'Radio',
	'tool_Redo' => 'Redo',
	'tool_RemoveFormat' => 'Remove format',
	'tool_Replace' => 'Replace',
	'tool_Scayt' => 'Correction during the typing',
	'tool_Select' => 'Select',
	'tool_SelectAll' => 'Select all',
	'tool_ShowBlocks' => 'Show blocks',
	'tool_Smiley' => 'Smiley',
	'tool_Source' => 'Source',
	'tool_SpecialChar' => 'Special character',
	'tool_SpellChecker' => 'Spell checker',
	'tool_Spip' => 'Spip link',
	'tool_SpipDoc' => 'Spip document',
	'tool_SpipModeles' => 'SPIP model',
	'tool_SpipSave' => 'Save',
	'tool_Strike' => 'Strike',
	'tool_Styles' => 'Styles',
	'tool_Subscript' => 'Subscript',
	'tool_Superscript' => 'Superscript',
	'tool_Table' => 'Table',
	'tool_Templates' => 'Templates',
	'tool_Textarea' => 'Text area',
	'tool_TextColor' => 'Text color',
	'tool_TextField' => 'Text field',
	'tool_Underline' => 'Underline',
	'tool_Undo' => 'Undo',
	'tool_Unlink' => 'Delete the link',
	'tool_ZpipPreview' => 'Overview',
	'tous' => 'all',
	'tous_documents' => 'Show all documents made available by SPIP.',
	'type_article' => 'Article',
	'type_auteur' => 'Author',
	'type_breve' => 'News',
	'type_de_modele' => 'Model type:',
	'type_fichier_interdit' => 'prohibited file type',
	'type_groupemot' => 'Group of keywords',
	'type_mot' => 'Keyword',
	'type_nombre' => 'The numerical value represents: ',
	'type_section' => 'Section',

// U
	'url_site' => 'Site URL:',
	'use_ckeditor' => 'Use CKEditor',
	'use_spip_editor' => 'Use SPIP editor',
	'utiliser_ckeditor_avec' => 'Use CKeditor with:',
	'utiliser_fichier' => 'Use the file: @fichier@.',
	'utiliser_html2spip' => 'Reconvert HTML into SPIP typo',
	'utiliser_html2spip_descriptif' => 'Use the HTML2SPIP library to reconvert HTML into SPIP typo. Using this option, you can use ckeditor while preserving the SPIP typo in your articles.',
	'utiliser_une_vignette_pour_les_images' => 'Use thumbnails from:',
	'utilise_fontkit' => 'Use the fonts from Font Squirrel kits.',
	'utilise_upload' => 'Allow the download from the CKEDITOR dialogues.',

// V
	'valeurs_du_parametre' => 'Parameter values​​:',
	'valeur_existe' => 'This value already exists.',
	'version_preferee' => 'CKEditor version %1 is installed, this plugin would prefer the version %2. Please first uninstall this version.',
	'visuel' => 'CKEditor',

// Chaines probablement pas utilisée :
/* On les garde au cas où ...
	'adapter_a_la_colonne' => 'Fit width to that column',
	'aide_identifiant_parametre' => 'Here you must enter the ID parameter, such as: left, player etc...',
	'cache_boutons_redimensionnement' => 'hide resize buttons',
	'occuper_toute_la_largeur' => 'Occupy the entire width of the window',
	'utilise_kcfinder' => 'Use <a href="http://kcfinder.sunhater.com/" target="_blank" title="Download, and install the directory in /lib">KCFinder</a> if possible.',
*/
);
?>
