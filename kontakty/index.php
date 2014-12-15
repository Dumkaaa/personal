<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?><p>&nbsp;</p>
<p><strong>ООО "Новые Технологии в Строительстве"</strong></p>
<p><strong>&nbsp;</strong></p>
<p>г. Тюмень, ул. Холодильная, д. 65, корп. 5</p>
<p>&nbsp;</p>
<p>Тел.: +7 (3452) 900-701; 908-120</p>
<p>Факс: +7 (3452) 49-48-67</p>
<p><br></p><?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	".default",
	Array(
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:57.14458155655679;s:10:\"yandex_lon\";d:65.5667432268448;s:12:\"yandex_scale\";i:14;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:65.56777319510648;s:3:\"LAT\";d:57.14402749675334;s:4:\"TEXT\";s:242:\"ООО \"Новые Технологии в Строительстве\"###RN### ###RN###г. Тюмень, ул. Холодильная, д. 65, корп. 5###RN### ###RN###Тел.: +7 (3452) 900-701; 908-120###RN###Факс: +7 (3452) 49-48-67\";}}}",
		"MAP_WIDTH" => "760",
		"MAP_HEIGHT" => "350",
		"CONTROLS" => array(0=>"ZOOM",1=>"SMALLZOOM",2=>"TYPECONTROL",),
		"OPTIONS" => array(0=>"ENABLE_SCROLL_ZOOM",1=>"ENABLE_DBLCLICK_ZOOM",2=>"ENABLE_RIGHT_MAGNIFIER",3=>"ENABLE_DRAGGING",),
		"MAP_ID" => ""
	)
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>