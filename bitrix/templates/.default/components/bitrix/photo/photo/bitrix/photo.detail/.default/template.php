<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="photo-detail">
<table cellspacing="0" cellpadding="0" border="0" width="100%" class="data-table">
<tr>
	<td colspan="5" align="center" style="background: #999999;border: 1px solid #fecc00;margin: 5px;padding: 5px; ">
		<?if(is_array($arResult["PICTURE"])):?>
			<img border="0" src="<?=$arResult["PICTURE"]["SRC"]?>" width="<?=$arResult["PICTURE"]["WIDTH"]?>" height="<?=$arResult["PICTURE"]["HEIGHT"]?>" alt="<?=$arResult["PICTURE"]["ALT"]?>" /><br />
		<?endif?>
	</td>
</tr>
<?if(count($arParams["FIELD_CODE"])>0 || count($arResult["DISPLAY_PROPERTIES"])>0):?>
<tr>
	<th colspan="5">
		<?foreach($arParams["FIELD_CODE"] as $code):?>
			<?=GetMessage("IBLOCK_FIELD_".$code)?>&nbsp;:&nbsp;<?=$arResult[$code]?><br />
		<?endforeach?>
		<?foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
			<?=$arProperty["NAME"]?>:&nbsp;<?
			if(is_array($arProperty["DISPLAY_VALUE"]))
				echo implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);
			else
				echo $arProperty["DISPLAY_VALUE"];?><br />
		<?endforeach?>
	</th>
</tr>
<?endif?>
<?if($arResult["DETAIL_TEXT"] || $arResult["PREVIEW_TEXT"]):?>
<tr>
	<td colspan="5" valign="center" align="left">
		<?if($arResult["DETAIL_TEXT"]):?>
			<?=$arResult["DETAIL_TEXT"]?>
		<?elseif($arResult["PREVIEW_TEXT"]):?>
			<?=$arResult["PREVIEW_TEXT"]?>
		<?endif;?>
	</td>
</tr>
<?endif?>
<tr style="background: #999999;border: 1px solid #fecc00;margin: 5px;padding: 5px; ">
	<td align="center" width="20%">
		<?if(is_array($arResult["PREV"][1])):?>
			<a href="<?=$arResult["PREV"][1]["DETAIL_PAGE_URL"]?>"><div style="height:105px; width: 140px; background-position: center; background-image: url(<?=$arResult["PREV"][1]["PICTURE"]["SRC"]?>); background-size: cover"></div></a>
        <?else:?>
			<?=GetMessage("NO_PHOTO")?>
		<?endif?>
	</td>
	<td align="center" width="20%">
		<?if(is_array($arResult["PREV"][0])):?>
            <a href="<?=$arResult["PREV"][1]["DETAIL_PAGE_URL"]?>"><div style="height:105px; width: 140px; background-position: center; background-image: url(<?=$arResult["PREV"][0]["PICTURE"]["SRC"]?>); background-size: cover"></div></a>
            <?else:?>
			<?=GetMessage("NO_PHOTO")?>
		<?endif?>
	</td>
	<td align="center" width="20%">
		<div style="height:105px; width: 140px; background-position: center; background-image: url(<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>); background-size: cover"></div>
    </td>
	<td align="center" width="20%">
		<?if(is_array($arResult["NEXT"][0])):?>
            <a href="<?=$arResult["NEXT"][0]["DETAIL_PAGE_URL"]?>"><div style="height:105px; width: 140px; background-position: center; background-image: url(<?=$arResult["NEXT"][0]["PICTURE"]["SRC"]?>); background-size: cover"></div></a>
        <?else:?>
			<?=GetMessage("NO_PHOTO")?>
		<?endif?>
	</td>
	<td align="center" width="20%">
		<?if(is_array($arResult["NEXT"][1])):?>
			<a href="<?=$arResult["NEXT"][1]["DETAIL_PAGE_URL"]?>"><div style="height:105px; width: 140px; background-position: center; background-image: url(<?=$arResult["NEXT"][1]["PICTURE"]["SRC"]?>); background-size: cover"></div></a>
        <?else:?>
			<?=GetMessage("NO_PHOTO")?>
		<?endif?>
	</td>
</tr>
<tr>
	<td align="center" width="20%">
		<?if(is_array($arResult["PREV"][1])):?>
			<a href="<?=$arResult["PREV"][1]["DETAIL_PAGE_URL"]?>">&lt;&lt;</a>
		<?else:?>
			&nbsp;
		<?endif?>
	</td>
	<td align="center" width="20%">
		<?if(is_array($arResult["PREV"][0])):?>
			<a href="<?=$arResult["PREV"][0]["DETAIL_PAGE_URL"]?>">&lt;</a>
		<?else:?>
			&nbsp;
		<?endif?>
	</td>
	<td align="center" width="20%">
		<?=GetMessage("NO_OF_COUNT",array("#NO#"=>$arResult["CURRENT"]["NO"],"#TOTAL#"=>$arResult["CURRENT"]["COUNT"]))?>
	</td>
	<td align="center" width="20%">
		<?if(is_array($arResult["NEXT"][0])):?>
			<a href="<?=$arResult["NEXT"][0]["DETAIL_PAGE_URL"]?>">&gt;</a>
		<?else:?>
			&nbsp;
		<?endif?>
	</td>
	<td align="center" width="20%">
		<?if(is_array($arResult["NEXT"][1])):?>
			<a href="<?=$arResult["NEXT"][1]["DETAIL_PAGE_URL"]?>">&gt;&gt;</a>
		<?else:?>
			&nbsp;
		<?endif?>
	</td>
</tr>
</table>
</div>

