<pre>
<?
if($arParams['MAP'] == 'Y'){

	foreach ($arResult['ITEMS'] as $item) {
		if($item['PROPERTY_MAP_VALUE']) {

				$value = explode(',', $item['PROPERTY_MAP_VALUE']);

				$arResult['PLACE'][] = [
						'LON'  => $value [1],
						'LAT'  => $value [0],
						'TEXT' => $item['PROPERTY_ADDRESS_VALUE'],
				];
		}
	}
	
	$place = [
			'yLat'   => '55.7383',
    	'yLon'   => '37.5946',
    	'yScale' => 10,
    	'PLACEMARKS'   => $arResult['PLACE'],
	];


	$APPLICATION->IncludeComponent(
		"bitrix:map.yandex.view",
		".default",
		Array(
			"CONTROLS" => array(0=>"ZOOM",1=>"TYPECONTROL",),
			"INIT_MAP_TYPE" => "MAP",
			"MAP_DATA" => serialize($place),
			"MAP_HEIGHT" => "500",
			"MAP_ID" => "salon",
			"MAP_WIDTH" => "500",
			"OPTIONS" => array(0=>"ENABLE_SCROLL_ZOOM",)
		)
	);
}?>
</pre>