<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>



<div>
	<? foreach($arResult["ITEMS"] as $item):
		$this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_EDIT"))	;
		$this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));?>
			<figure id="<?=$this->GetEditAreaId($item['ID']);?>" class="shops_block_item">
				<?if(is_array($item['PREVIEW_PICTURE'])) { 
					$preveiwPicture = $item['PREVIEW_PICTURE']['SRC'];
				} else { 
					$preveiwPicture = NO_IMAGE;
				}?>
				<img src="<?=$preveiwPicture?>">
				<figcaption class="shops_block_item_description">	
					<h3 class="shops_block_item_name"><?=$item['NAME']?></h3>
					<p class="dark_grey"><?=$item['PROPERTY_ADDRESS_VALUE']?></p>
					<p class="black"><?=$item['PROPERTY_PHONE_VALUE']?></p>
					<p><?=GetMessage('WORK_HOURS')?><br/><?=$item['PROPERTY_WORK_HOURS_VALUE']?></p>
				</figcaption>
			</figure>
	<?endforeach;?>
</div>


