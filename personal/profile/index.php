<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Профиль пользователя");
?><?$APPLICATION->IncludeComponent("bitrix:main.profile", "lk", Array(
	"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"COMPONENT_TEMPLATE" => ".default",
		"USER_PROPERTY" => "",	// Показывать доп. свойства
		"SEND_INFO" => "N",	// Генерировать почтовое событие
		"CHECK_RIGHTS" => "N",	// Проверять права доступа
		"USER_PROPERTY_NAME" => "",	// Название закладки с доп. свойствами
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>