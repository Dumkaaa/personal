<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="catalog">
    <h3>КАТАЛОГ ТОВАРОВ</h3>
<?foreach($arResult["SECTIONS"] as $arSection):?>
    <div class="moduletable">
        <h3 id="<?=$arSection["CODE"]?>"><?=$arSection["NAME"]?>:</h3>
        <ul class="latestnews last">
            <?
            $cell = 0;
            foreach($arSection["ITEMS"] as $arElement):
                ?>
                <?
                $this->AddEditAction($arElement['ID'], $arElement['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arElement['ID'], $arElement['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BCST_ELEMENT_DELETE_CONFIRM')));
                ?>
			<li class="latestnews"><a href="<?=$arElement["DETAIL_PAGE_URL"]?>"><?=$arElement["NAME"]?></a></li>
                <?
                $cell++;
                if($cell>=$arParams["LINE_ELEMENT_COUNT"]):
                    $cell = 0;
                    ?>
                <?
                endif; // if($n%$LINE_ELEMENT_COUNT == 0):
            endforeach; // foreach($arResult["ITEMS"] as $arElement):
            while ($cell<$arParams["LINE_ELEMENT_COUNT"]):
                $cell++;
                ?><?
            endwhile;
            ?></ul>
    </div>
            <?endforeach?>





</div>
