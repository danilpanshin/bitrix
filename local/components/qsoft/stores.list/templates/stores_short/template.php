<section class="shops_block">
	<h2 class="inline-block">Наши салоны</h2>
	<span class="dark_grey all_list">&nbsp;/&nbsp;<a href="<?=$arParams["STORES_URL"]?>" class="text_decor_none"><b>Все</b></a></span>
	<div>
					
		<?php foreach ($arResult['ITEMS'] as $item) { ?>
          
          <?
	      		$this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_EDIT"));
	      		$this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
          ?>
          
						<figure class="shops_block_item" id="<?=$this->GetEditAreaId($item['ID']);?>">
							<a href="<?=$arParams["STORES_URL"]?>"><img src="<?=$item['PREVIEW_PICTURE']['SRC']?>" alt="" title="" /></a>
							<figcaption class="shops_block_item_description">
								<h3 class="shops_block_item_name"><?=$item['NAME']?></h3>
								<p class="dark_grey"><?=$item['PROPERTY_ADDRESS_VALUE']?></p>
								<p class="black"><?=$item['PROPERTY_PHONE_VALUE']?></p>
								<p>Часы работы:<br/><?=$item['PROPERTY_WORK_HOURS_VALUE']?></p>
							</figcaption>
            </figure>
             
		<?php } ?> 
  
  </div>
</section>

