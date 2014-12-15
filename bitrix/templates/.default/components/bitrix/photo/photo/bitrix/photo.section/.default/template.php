<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="photo-section">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<table cellpadding="0" cellspacing="0" border="0" class="data-table">
	<?foreach($arResult["ROWS"] as $arItems):?>
		<tr class="head-row" valign="top">
		<?foreach($arItems as $arItem):?>
			<?if(is_array($arItem)):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BPS_ELEMENT_DELETE_CONFIRM')));
				?>
				<td width="<?=$arResult["TD_WIDTH"]?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					<?if($arResult["USER_HAVE_ACCESS"]):?>
						<?if(is_array($arItem["PICTURE"])):?>
							<div style="background: #999999;border: 1px solid #fecc00;margin: 5px;padding: 5px; width:145px;"><center><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><div style="border: 7px solid #fff; height:105px; width: 105px;background-position: center; background-image: url(<?=$arItem["PICTURE"]["SRC"]?>); background-size: cover"></div></a></center></div>
						<?endif?>
					<?else:?>
						<?if(is_array($arItem["PICTURE"])):?>
                    <div style="background: #999999;border: 1px solid #fecc00;margin: 5px;padding: 5px; width:145px;"><center><div style="border: 7px solid #fff; height:105px; width: 105px; background-position: center; background-image: url(<?=$arItem["PICTURE"]["SRC"]?>); background-size: cover"></div></center></div><?endif?>
					<?endif?>
				</td>
			<?else:?>
			<?endif;?>
		<?endforeach?>
		</tr>
	<?endforeach?>
</table>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
