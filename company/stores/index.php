<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Наши салоны");
?><?$APPLICATION->IncludeComponent(
	"qsoft:stores.list",
	"stores_full",
	Array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => ".default",
		"IBLOCK_ID" => "13",
		"IBLOCK_TYPE" => "Salons",
		"NEWS_COUNT" => "20",
		"SORT_PARAM" => "DESC",
		"STORES_URL" => "/company/stores/",
    "MAP" => "Y"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>