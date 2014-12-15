<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
<div class="top">
    <div class="moduletable_left">
    <ul class="menu"><?
foreach($arResult as $key => $arItem):
{
    if ($key < (count($arResult)/2) )
    {
?><?if($arItem["SELECTED"]):?>
        <li class="selected"><a href="<?=$arItem["LINK"]?>"><span><?=$arItem["TEXT"]?></span></a></li>
    <?else:?>
        <li><a href="<?=$arItem["LINK"]?>"><span><?=$arItem["TEXT"]?></span></a></li>
    <?endif?><?
    }
    else
    {

    }
}?>
<?endforeach?>
    </ul></div>
    <div class="moduletable_right">
    <ul class="menu">
    <?
    foreach($arResult as $key => $arItem):
    {
        if ($key < (count($arResult)/2) )
        {

        }
        else
        {
            ?><?if($arItem["SELECTED"]):?>
                    <li class="selected"><a href="<?=$arItem["LINK"]?>"><span><?=$arItem["TEXT"]?></span></a></li>
                <?else:?>
                    <li><a href="<?=$arItem["LINK"]?>"><span><?=$arItem["TEXT"]?></span></a></li>
                <?endif?><?
        }
    }?>
    <?endforeach?>
    </ul></div>
</div>
<?endif?>
