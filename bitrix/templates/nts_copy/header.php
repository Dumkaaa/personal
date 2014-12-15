<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!DOCTYPE html>
<html>
	<head>
		<?$APPLICATION->ShowHead();?>
		<title><?$APPLICATION->ShowTitle();?></title>
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
        <script type="text/javascript" src="/media/system/js/jquery.js"></script><style type="text/css"></style>
        <script type="text/javascript" src="/media/system/js/jquery_noconflict.js"></script>
        <script type="text/javascript" src="/media/system/js/mootools.js"></script>
        <script type="text/javascript" src="/media/system/js/caption.js"></script>
        <!-- Режим совместимости Google Frame для пользователей Internet Explorer -->
        <meta http-equiv="X-UA-Compatible" content="chrome=1">
        <!-- Подключение каскадной таблицы стилей для сброса настроек стилей браузеров по умолчанию -->
        <link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/reset.css">
        <!-- Подключение основной каскадной таблицы стилей -->
        <link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/template-syle.css">
        <!-- Если необходимо использовать расширения jQuery, подключаем jQueryTools или jQueryUI -->
        <!--<script type="text/javascript" src="http://yandex.st/jquery-ui/1.8.1/jquery-ui.min.js"></script>-->
        <!--<script type="text/javascript" src="/media/system/js/jquery.tools.js"></script>-->

        <!-- Подключение библиотеки для скругления углов без изображений -->
        <!--<script type="text/javascript" src="/media/system/js/jquery.corner.js"></script>-->

        <!-- Подключение библиотеки для создания теней от блоков -->
        <!--<script type="text/javascript" src="/media/system/js/jquery.boxshadow.js"></script>-->

        <!-- Подключение библиотеки для создания теней от текста -->
        <!--<script type="text/javascript" src="/media/system/js/jquery.textshadow.js"></script>-->

        <!-- Подключаем библиотеку векторной графики raphael.js -->
        <!--<script type="text/javascript" src="http://yandex.st/raphael/1.4.2/raphael.min.js"></script>-->

        <!-- Если необходимо использовать Adobe Flash, то включаем библиотеку swfobject.js -->
        <!--<script type="text/javascript" src="http://yandex.st/swfobject/2.2/swfobject.min.js"></script>-->

        <!-- Корректная вставка flash-ролика на веб-страницу -->
        <!--<script type="text/javascript">
            if (swfobject.hasFlashPlayerVersion("8.0.0"))
            {
                var fn = function() {
                    var att = {
                        data:"/templates/deps_template/flash/flash.swf",
                        width: "960",
                        height: "497"    //Нужно указать размер флеш-ролика
                    };
                    var par = {
                        menu: "true",
                        quality: "high",
                        play: "true",
                        wmode: "opaque"
                    };
                    var id = "flashmovie";
                    var myObject = swfobject.createSWF(att, par, id);
                };
                swfobject.addDomLoadEvent(fn);
            }
            else
                document.write("<div class=\"noflash\">Для этого сайта требуется<br />установить <a class=\"noflash_link\" href=\"http://www.macromedia.com/go/getflashplayer\">Adobe Flash Player</a></div>");
        </script>-->

        <!-- Если используется Internet Explorer ниже версии 7, подключаем дополнительные скрипты для добавления прозрачности PNG -->
        <!--[if lt IE 7]>
        <script type="text/javascript" src="/media/system/js/ie6pngfix.js"></script>
        <script type="text/javascript">
            //Включаем прозрачность PNG для тегов <img> и классов iePNG
            DD_belatedPNG.fix('.iePNG, img');
        </script>
        <![endif]-->
	</head>
	<body>
		<div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>
        <div class="container">
        <div class="header">
            <a href="/" title="Перейти на главную страницу" class="logo"></a>

            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "sect",
                    "AREA_FILE_SUFFIX" => "top_menu",
                    "AREA_FILE_RECURSIVE" => "Y",
                    "EDIT_MODE" => "html",
                    "EDIT_TEMPLATE" => "" //
                ),
                false,
                array('HIDE_ICONS' => 'Y')
            );?>
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "sect",
                    "AREA_FILE_SUFFIX" => "phone",
                    "AREA_FILE_RECURSIVE" => "Y",
                    "EDIT_MODE" => "html",
                    "EDIT_TEMPLATE" => "" //
                ),
                false
            );?>
            <?$APPLICATION->IncludeComponent("bitrix:menu", "left-right", Array(
                    "ROOT_MENU_TYPE" => "left",
                    "MENU_CACHE_TYPE" => "A",
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "MENU_CACHE_GET_VARS" => array(
                    ),
                    "MAX_LEVEL" => "1",
                    "CHILD_MENU_TYPE" => "left",
                    "USE_EXT" => "Y",
                    "DELAY" => "N",
                    "ALLOW_MULTI_SELECT" => "N"
                ),
                false
            );?>
            <div class="main">
                <div class="main_left">
