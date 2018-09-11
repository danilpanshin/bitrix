<?php

use Bitrix\Main;
use Bitrix\Main\Localization\Loc;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

if (!\Bitrix\Main\Loader::includeModule('advertising'))
	return;

CBitrixComponent::includeComponentClass("bitrix:advertising.banner");

Loc::loadMessages(__FILE__);

class myBanner extends AdvertisingBanner
{
		public function onPrepareComponentParams($params)
		{
				$params = parent::onPrepareComponentParams($params);
				global $USER;
				if (!$USER->IsAuthorized()) {
					$params['QUANTITY'] = 1;
				}
				return $params;
		}
}
