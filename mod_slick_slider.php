<?php
// blokowanie bezpoœredniego uruchomienia
defined('_JEXEC') or die ('Restricted access');
// w³¹czenie klasy modelu z jej metodami
//require_once dirname(__FILE__) . '/helper.php';

//przygotowanie do za³adowania stylów
$doc = JFactory::getDocument();
$doc->addStyleSheet('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
$doc->addStyleSheet('modules/mod_slick_slider/slick/slick.css');
$doc->addStyleSheet('modules/mod_slick_slider/slick/slick-theme.css');
$doc->addStyleSheet('modules/mod_slick_slider/css/slick-custom.css');

//w³¹czenie domyœlnego layoutu
require JModuleHelper::getLayoutPath('mod_slick_slider');
?>