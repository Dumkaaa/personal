<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="photo-sections-top">
<?foreach($arResult["SECTIONS"] as $arSection):?>
	<?
	$this->AddEditAction('section_'.$arSection['ID'], $arSection['ADD_ELEMENT_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "ELEMENT_ADD"), array('ICON' => 'bx-context-toolbar-create-icon'));
	$this->AddEditAction('section_'.$arSection['ID'], $arSection['EDIT_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_EDIT"));
	$this->AddDeleteAction('section_'.$arSection['ID'], $arSection['DELETE_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_DELETE"), array("CONFIRM" => GetMessage('CT_BPS_SECTION_DELETE_CONFIRM')));
	?>
    <table><tbody><tr><td align="center" valign="middle" style="width:118px;;text-align:center; border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
padding: 3px;
background: #fecc00;">
                <a href="<?=$arSection["SECTION_PAGE_URL"]?>"><?$APPLICATION->IncludeComponent(
                        "bitrix:photo.random",
                        "rand_photo",
                        Array(
                            "IBLOCK_TYPE" => "photo",
                            "IBLOCKS" => array(0=>"4",),
                            "DETAIL_URL" => "/#SECTION_CODE#/#ELEMENT_CODE#/",
                            "CACHE_TYPE" => "A",
                            "CACHE_TIME" => "180",
                            "CACHE_GROUPS" => "Y",
                            "PARENT_SECTION" => "11"
                        )
                    );?></a>
            </td><td>
                <a href="<?=$arSection["SECTION_PAGE_URL"]?>" class="category"><?=$arSection["NAME"]?></span>
            </td></tr></tbody></table>
<?endforeach;?>
</div>
