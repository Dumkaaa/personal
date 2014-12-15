<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<table width="100%" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td nowrap="nowrap">

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
					<a href="<?=$arItem["LINK"]?>" class="mainlevel menuitem_1" id="active_menu"> <?=$arItem["TEXT"]?> </a>
	<?else:?>
					<a href="<?=$arItem["LINK"]?>" class="mainlevel menuitem_1"> <?=$arItem["TEXT"]?> </a>
	<?endif?>
	
<?endforeach?>

</td></tr></tbody></table>		
            
<?endif?>