<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

/**
* @var CBitrixComponent $this
*/

if (!isset($arParams['CACHE_TIME'])) {
	$arParams['CACHE_TIME'] = 3600;
}

if ($arParams['NEWS_COUNT'] <= 0) {
	$arParams['NEWS_COUNT'] = 2;
}

if ($arParams['IBLOCK_ID'] <= 0) {
	ShowError(\Bitrix\Main\Localization\Loc::GetMessage('NO_IB'));
	return;
}

if (! \Bitrix\Main\Loader::includeModule('iblock')) {
	ShowError(\Bitrix\Main\Localization\Loc::GetMessage('NO_MODUL_IB'));
	return;
}


if ($this->startResultCache(false, [])) {
	//SELECT

	$arSelect = array(
	'ID',
	'IBLOCK_ID',
	'NAME',
	'PREVIEW_PICTURE',
	'PROPERTY_WORK_HOURS',
	'PROPERTY_ADDRESS',
	'PROPERTY_PHONE',
	);

	if ($arParams['MAP'] == 'Y') {
		$arSelect[] = 'PROPERTY_MAP';
	} 

	($arParams['MAP'] == 'Y') ? $nPageSize = ['nPageSize' => false] : $nPageSize = ['nPageSize' => $arParams['NEWS_COUNT']];
	
	$rsElement = CIBlockElement::GetList(
		[$arParams['SORT_PARAM'] => $arParams['TYPE_SORT_PARAM']],
		['IBLOCK_ID' => $arParams['IBLOCK_ID'],
		'ACTIVE' => 'Y'],
		false,
		$nPageSize,
		$arSelect
	);
	
	$rsElement->SetUrlTemplates();

	
	while ($item = $rsElement->GetNext()) {
	
		$arButtons = CIBlock::GetPanelButtons(
			$item['IBLOCK_ID'],
			$item['ID'],
			0,
			array('SECTION_BUTTONS' => false, 'SESSID' => false)
		);

		$item['EDIT_LINK'] = $arButtons['edit']['edit_element']['ACTION_URL'];
		$item['DELETE_LINK'] = $arButtons['edit']['delete_element']['ACTION_URL'];
	
		Bitrix\Iblock\Component\Tools::getFieldImageData(
			$item,
			array('PREVIEW_PICTURE'),
			Bitrix\Iblock\Component\Tools::IPROPERTY_ENTITY_ELEMENT,
			'IPROPERTY_VALUES'
		);
	
		$arResult['ITEMS'][] = $item;
	}

		

	if ($arParams['MAP'] == 'Y') {
		foreach ($arResult['ITEMS'] as $item) {
			if ($item['PROPERTY_MAP_VALUE']) {

				$value = explode(',', $item['PROPERTY_MAP_VALUE']);

				$arResult['PLACE'][] = [
					'LON'  => $value [1],
					'LAT'  => $value [0],
					'TEXT' => $item['PROPERTY_ADDRESS_VALUE'],
				];
			}
		}
	}

	$this->setResultCacheKeys(['ITEMS', 'PLACE']);
	
	$this->includeComponentTemplate();
}

$arButtons = CIBlock::GetPanelButtons(
	$arParams['IBLOCK_ID'],
	0,
	0,
	array('SECTION_BUTTONS' => false,)
);

if ($APPLICATION->GetShowIncludeAreas()) {
	$this->addIncludeAreaIcons(CIBlock::GetComponentMenu($APPLICATION->GetPublicShowMode(), $arButtons));
}
    