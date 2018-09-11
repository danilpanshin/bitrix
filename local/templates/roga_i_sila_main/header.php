<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
IncludeTemplateLangFile(__FILE__);

use Bitrix\Main\Page\Asset;


Asset::getInstance()->addCss(SCRIPTS_AND_STYLES_PATH . "/css/base.css");
Asset::getInstance()->addCss(SCRIPTS_AND_STYLES_PATH . "/js/bxslider/jquery.bxslider.css");
Asset::getInstance()->addCss(SCRIPTS_AND_STYLES_PATH . "/js/jquery.ui.selectmenu/jquery.ui.core.css");
Asset::getInstance()->addCss(SCRIPTS_AND_STYLES_PATH . "/js/jquery.ui.selectmenu/jquery.ui.theme.css");
Asset::getInstance()->addCss(SCRIPTS_AND_STYLES_PATH . "/js/jquery.ui.selectmenu/jquery.ui.selectmenu.css");

Asset::getInstance()->addJs(SCRIPTS_AND_STYLES_PATH . "/js/jquery-1.9.1.min.js");
Asset::getInstance()->addJs(SCRIPTS_AND_STYLES_PATH . "/js/jquery.placeholder.js");
Asset::getInstance()->addJs(SCRIPTS_AND_STYLES_PATH . "/js/bxslider/jquery.bxslider.js");
Asset::getInstance()->addJs(SCRIPTS_AND_STYLES_PATH . "/js/default_script.js");
Asset::getInstance()->addJs(SCRIPTS_AND_STYLES_PATH . "/js/jquery.ui.selectmenu/jquery.ui.core.js");
Asset::getInstance()->addJs(SCRIPTS_AND_STYLES_PATH . "/js/jquery.ui.selectmenu/jquery.ui.widget.js");
Asset::getInstance()->addJs(SCRIPTS_AND_STYLES_PATH . "/js/jquery.ui.selectmenu/jquery.ui.position.js");
Asset::getInstance()->addJs(SCRIPTS_AND_STYLES_PATH . "/js/jquery.ui.selectmenu/jquery.ui.selectmenu.js");



?>

<!DOCTYPE>
<!--[if IE 7]>    <html class="ie7"> <![endif]-->
<!--[if IE 8]>    <html class="ie8> <![endif]-->
<!--[if IE 9]>    <html class="ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
	<head>
		<?$APPLICATION->ShowHead();?>
		<title><?$APPLICATION->ShowTitle();?></title>
		
		<link href="<?=SCRIPTS_AND_STYLES_PATH . "/favicon.ico"?>" rel="shortcut icon" type="image/x-icon" />		
		<!--[if lt IE 9]>
		<script src="<?=SCRIPTS_AND_STYLES_PATH . "/js/html5shiv.js"?>"></script>
		<![endif]-->
	</head>
	<body>
	<?$APPLICATION->ShowPanel();?>
		<div class="wrapper">
			<div class="base_layer"></div>
			<header class="header">
				<div class="width_960">
					<div class="inline-block">
						<span class="logo inline-block"></span>
					</div>
	
					<?$APPLICATION->IncludeComponent(
							"bitrix:system.auth.form",
							"auth_form_header",
							Array(
								"COMPONENT_TEMPLATE" => "auth_form_header",
								"FORGOT_PASSWORD_URL" => "",
								"PROFILE_URL" => "/personal/profile",
								"REGISTER_URL" => "/auth/",
								"SHOW_ERRORS" => "Y",
								"AUTH_INDEX" => "/auth/",
								"PERSONAL" => "/personal/",
								"LOGOUT" => $APPLICATION->GetCurPage() . "?logout=yes",
								'AUTH_REGISTER' => '/auth/?register=yes',
							)
					);?>
					
					<div class="basket_block inline-block">
						<a href="#" class="basket_product_count inline-block">0</a>
						<a href="#" class="order_button pie">Оформить заказ</a>
					</div>
				</div>
			</header>	
			
			<section class="fixed_block">
			    <div class="width_960">
			        
					<?$APPLICATION->IncludeComponent(
						"bitrix:search.form", 
						"search_form_header", 
						array(
							"PAGE" => "#SITE_DIR#search/index.php",
							"USE_SUGGEST" => "N",
							"COMPONENT_TEMPLATE" => "search_form_header"
						),
						false
					);?>
			        
					<?$APPLICATION->IncludeComponent(
						"bitrix:menu", 
						"catalog_top", 
						array(
								"ALLOW_MULTI_SELECT" => "N",
								"CHILD_MENU_TYPE" => "sub_menu",
								"COMPONENT_TEMPLATE" => "catalog_top",
								"DELAY" => "N",
								"MAX_LEVEL" => "2",
								"MENU_CACHE_GET_VARS" => array(
								),
								"MENU_CACHE_TIME" => "3600",
								"MENU_CACHE_TYPE" => "A",
								"MENU_CACHE_USE_GROUPS" => "Y",
								"MENU_THEME" => "site",
								"ROOT_MENU_TYPE" => "top",
								"USE_EXT" => "Y"
						),
						false
					);?>
					
			    </div>
			</section>
			<section class="content">
			    <div class="work_area width_960">
			
 