<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<h2 class="inline-block"><?=GetMessage("NEWS")?></h2>
<span class="dark_grey all_list">&nbsp;/&nbsp;<a href="<?=$arResult["LIST_PAGE_URL"]?>" class="text_decor_none"><b><?=GetMessage("ALL")?></b></a></span>
<div class="news-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem["ID"], $arItem["EDIT_LINK"], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem["ID"], $arItem["DELETE_LINK"], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage("CT_BNL_ELEMENT_DELETE_CONFIRM")));
	?>
	<div>
		<?  is_array($arItem["PREVIEW_PICTURE"]) ? $preveiwPicture = $arItem["PREVIEW_PICTURE"]["SRC"] : $preveiwPicture = NO_IMAGE;
			if(strlen($arItem["PREVIEW_TEXT"]) > $arParams["PREVIEW_TRUNCATE_LEN"]) {
				$arItem["PREVIEW_TEXT"] = substr($arItem["PREVIEW_TEXT"], 0, $arParams["PREVIEW_TRUNCATE_LEN"]) . "...";
			}
		?>
		<figure class="news_item" id="<?=$this->GetEditAreaId($arItem["ID"]);?>">
			
			<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img src="<?= $preveiwPicture?>" /></a>
			<figcaption class="news_item_description">
				<h3><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></h3>
				<div class="news_item_anons">
					<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="text_decor_none">
						<?=$arItem["PREVIEW_TEXT"];?>
					</a>
				</div>
				<div class="news_item_date grey"><?=$arItem["DISPLAY_ACTIVE_FROM"]?></div>
			</figcaption>
		</figure>
	</div>
<?endforeach;?>
</div>

