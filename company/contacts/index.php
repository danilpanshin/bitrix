<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контактная информация");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback", 
	"feedback", 
	array(
		"COMPONENT_TEMPLATE" => "feedback",
		"USE_CAPTCHA" => "Y",
		"OK_TEXT" => "Ваше сообщение отправлено", 
		"EMAIL_TO" => "danilpanshin@gmail.com",
		"REQUIRED_FIELDS" => array(
			0 => "NAME",
			1 => "EMAIL",
			2 => "MESSAGE",
		),
		"EVENT_MESSAGE_ID" => array(
			0 => "7",
		)
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>