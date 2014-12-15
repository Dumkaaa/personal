<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="photo-random" style="max-height: 105px;overflow: hidden;display: block;">
	<?if(is_array($arResult["PICTURE"])):?>
		<a href="/fotogalereya/objects/"><img
				border="0"
				src="<?=$arResult["PICTURE"]["SRC"]?>"
				width="<?=$arResult["PICTURE"]["WIDTH"]?>"
				height="<?=$arResult["PICTURE"]["HEIGHT"]?>"
				/></a><br />
	<?endif?>
</div>
