<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/fotogalereya/#",
		"RULE" => "",
		"ID" => "bitrix:photo",
		"PATH" => "/fotogalereya/index.php",
	),
	array(
		"CONDITION" => "#^/novosti/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/novosti/index.php",
	),
	array(
		"CONDITION" => "#^/#",
		"RULE" => "",
		"ID" => "bitrix:catalog",
		"PATH" => "/index.php",
	),
);

?>