<?php

/**
 * @var CIBitrixComponent $this
 */

if ($arParams['NEWS_COUNT'] <= 0) {
    $arParams['NEWS_COUNT'] = 20;  
}

if ($arParams['IBLOCK_ID'] <= 0) {
    ShowError(\Bitrix\Main\Localization\Loc::getMessage('ERROR_IB_NOT_FOUND'));
    return;
}

if (! \Bitrix\Main\Loader::includeModule('iblock')) {
    ShowError(\Bitrix\Main\Localization\Loc::getMessage('ERROR_IB_MODULE_NOT_FOUND'));
}

if ($this->startResultCache()) {
    $select = [
    'NAME',
    'DETAIL_PAGE_URL',
    'PREVIEW_PICTURE',
    'PROPERTY_ADDRESS',
    'PROPERTY_PHONE',
    'PROPERTY_WORK_HOURS',
    ]; 

    $navigation = ['nPageSize' => $arParams['NEWS_COUNT']];

    $dbItem = \CIBlockElement::GetList(
        ['RAND' => $arParams['SORT_PARAM']], 
        [
        'IBLOCK_ID' => $arParams['IBLOCK_ID'],
        'ACTIVE' => 'Y',
        ], 
        false, 
        $navigation, 
        $select
    );
    $dbItem->SetUrlTemplates(); 

    $items = [];
    while ($item = $dbItem->GetNext()) {

        $arButtons = CIBlock::GetPanelButtons(
            $item["IBLOCK_ID"],
            $item["ID"],
            0,
            array("SECTION_BUTTONS"=>false, "SESSID"=>false)
        );
        $item["EDIT_LINK"] = $arButtons["edit"]["edit_element"]["ACTION_URL"];
        $item["DELETE_LINK"] = $arButtons["edit"]["delete_element"]["ACTION_URL"];
        
        Bitrix\Iblock\Component\Tools::getFieldImageData(
            $item,
            array('PREVIEW_PICTURE', 'DETAIL_PICTURE'),
            Bitrix\Iblock\Component\Tools::IPROPERTY_ENTITY_ELEMENT,
            'IPROPERTY_VALUES'
        );

        $items[] = $item;
    }

    $arResult['ITEMS'] = $items;

    $this->setResultCacheKeys(array(
        "NAV_CACHED_DATA",
        "ELEMENTS",
        "ITEMS"
    ));

    $this->includeComponentTemplate();
}

$arButtons = CIBlock::GetPanelButtons(
    $arParams["IBLOCK_ID"],
    0,
    0,
    array("SECTION_BUTTONS"=>false)
);

if ($APPLICATION->GetShowIncludeAreas()) {
    $this->addIncludeAreaIcons(CIBlock::GetComponentMenu($APPLICATION->GetPublicShowMode(), $arButtons));
}    