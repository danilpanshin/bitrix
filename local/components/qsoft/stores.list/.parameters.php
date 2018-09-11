<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var array $arCurrentValues */

if(!CModule::IncludeModule("iblock"))
	return;

$arTypesEx = CIBlockParameters::GetIBlockTypes(array("-"=>" "));

$arIBlocks=array();
$db_iblock = CIBlock::GetList(array("SORT"=>"ASC"), array("SITE_ID"=>$_REQUEST["site"], "TYPE" => ($arCurrentValues["IBLOCK_TYPE"]!="-"?$arCurrentValues["IBLOCK_TYPE"]:"")));
while($arRes = $db_iblock->Fetch())
	$arIBlocks[$arRes["ID"]] = "[".$arRes["ID"]."] ".$arRes["NAME"];



$arComponentParameters = array(
	"GROUPS" => array(
	),
	"PARAMETERS" => array(
		"AJAX_MODE" => array(),
		"IBLOCK_TYPE" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("T_IBLOCK_DESC_LIST_TYPE"),
			"TYPE" => "LIST",
			"VALUES" => $arTypesEx,
			"DEFAULT" => "news",
			"REFRESH" => "Y",
		),
		"IBLOCK_ID" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("T_IBLOCK_DESC_LIST_ID"),
			"TYPE" => "LIST",
			"VALUES" => $arIBlocks,
			"DEFAULT" => '={$_REQUEST["ID"]}',
			"ADDITIONAL_VALUES" => "Y",
			"REFRESH" => "Y",
		),
		"NEWS_COUNT" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("T_IBLOCK_DESC_LIST_CONT"),
			"TYPE" => "STRING",
			"DEFAULT" => "2",
		),
		"CACHE_TIME"  =>  array("DEFAULT"=>3600),
		"SORT_PARAM" => array(
			"NAME" => GetMessage("SORT_PARAM"),
			"TYPE" => "STRING",
			"DEFAULT" => "RAND",
		),
		"TYPE_SORT_PARAM" => array(
			"NAME" => GetMessage("TYPE_SORT_PARAM"),
			"TYPE" => "STRING",
			"DEFAULT" => "DESC",
		),
		'PATH' => array(
			'NAME' => GetMessage('PATH'),
			'TYPE' => 'STRING',
			'DEFAULT' => '/company/stores/',
		),
		'MAP' => array(
			"NAME" => GetMessage('MAP'),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N",
		),
	),
);
