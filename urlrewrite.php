<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/online/([\\.\\-0-9a-zA-Z]+)(/?)([^/]*)#",
		"RULE" => "alias=\$1",
		"ID" => "bitrix:im.router",
		"PATH" => "/desktop_app/router.php",
	),
	array(
		"CONDITION" => "#^/examples/my-components/news/#",
		"RULE" => "",
		"ID" => "demo:news",
		"PATH" => "/examples/my-components/news_sef.php",
	),
	array(
		"CONDITION" => "#^/bitrix/services/ymarket/#",
		"RULE" => "",
		"ID" => "",
		"PATH" => "/bitrix/services/ymarket/index.php",
	),
	array(
		"CONDITION" => "#^/e-store/books/reviews/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/e-store/books/reviews/index.php",
	),
	array(
		"CONDITION" => "#^/e-store/xml_catalog/#",
		"RULE" => "",
		"ID" => "bitrix:catalog",
		"PATH" => "/e-store/xml_catalog/index.php",
	),
	array(
		"CONDITION" => "#^/communication/forum/#",
		"RULE" => "",
		"ID" => "bitrix:forum",
		"PATH" => "/communication/forum/index.php",
	),
	array(
		"CONDITION" => "#^/communication/blog/#",
		"RULE" => "",
		"ID" => "bitrix:blog",
		"PATH" => "/communication/blog/index.php",
	),
	array(
		"CONDITION" => "#^/online/(/?)([^/]*)#",
		"RULE" => "",
		"ID" => "bitrix:im.router",
		"PATH" => "/desktop_app/router.php",
	),
	array(
		"CONDITION" => "#^/stssync/calendar/#",
		"RULE" => "",
		"ID" => "bitrix:stssync.server",
		"PATH" => "/bitrix/services/stssync/calendar/index.php",
	),
	array(
		"CONDITION" => "#^/content/articles/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/content/articles/index.php",
	),
	array(
		"CONDITION" => "#^/e-store/books/#",
		"RULE" => "",
		"ID" => "bitrix:catalog",
		"PATH" => "/e-store/books/index.php",
	),
	array(
		"CONDITION" => "#^/content/idea/#",
		"RULE" => "",
		"ID" => "bitrix:idea",
		"PATH" => "/content/idea/index.php",
	),
	array(
		"CONDITION" => "#^/content/news/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/content/news/index.php",
	),
	array(
		"CONDITION" => "#^/company/news/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/company/news/index.php",
	),
	array(
		"CONDITION" => "#^/club/forum/#",
		"RULE" => "",
		"ID" => "bitrix:forum",
		"PATH" => "/club/forum/index.php",
	),
	array(
		"CONDITION" => "#^/club/#",
		"RULE" => "",
		"ID" => "bitrix:socialnetwork",
		"PATH" => "/club/index.php",
	),
);

?>