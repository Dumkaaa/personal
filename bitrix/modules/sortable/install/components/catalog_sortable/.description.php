<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => "Каталог с сортировкой",
	"DESCRIPTION" => "Стандартный Битрикс.Каталог с функцией сортировки элементов раздела простым перетаскиванием мыши.",
	"ICON" => "/images/catalog.gif",
	"COMPLEX" => "Y",
	"SORT" => 10,
	"PATH" => array(
		"ID" => "Ampersand",
		"CHILD" => array(
			"ID" => "catalog_sortable",
			"NAME" => "Амперсанд",
			"SORT" => 10,
		)
	)
);
?>