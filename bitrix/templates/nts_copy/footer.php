<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
</div>
<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "sect",
        "AREA_FILE_SUFFIX" => "right",
        "AREA_FILE_RECURSIVE" => "Y",
        "EDIT_MODE" => "html",
        "EDIT_TEMPLATE" => "" //
    ),
    false,
    array('HIDE_ICONS' => 'Y')
);?>
</div>

<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "sect",
        "AREA_FILE_SUFFIX" => "footer",
        "AREA_FILE_RECURSIVE" => "Y",
        "EDIT_MODE" => "html",
        "EDIT_TEMPLATE" => "" //
    ),
    false,
    array('HIDE_ICONS' => 'Y')
);?>
</div>

</body></html>