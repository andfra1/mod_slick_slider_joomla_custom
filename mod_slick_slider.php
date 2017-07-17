<?php
// blokowanie bezpoœredniego uruchomienia
defined('_JEXEC') or die;
// w³¹czenie klasy modelu z jej metodami
//require_once dirname(__FILE__) . '/helper.php';
 


//przygotowanie do za³adowania stylów
$doc = JFactory::getDocument();
$js = '
	jQuery(document).on(\'subform-row-add\', function(event, row){
		jQuery(row).find(\'select\').chosen();
	})
';
$doc->addScriptDeclaration($js);

//w³¹czenie domyœlnego layoutu
require JModuleHelper::getLayoutPath('mod_slickSlider');
