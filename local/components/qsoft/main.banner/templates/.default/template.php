<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$frame = $this->createFrame()->begin("");?>
<div class="slider">
    <ul class="bxslider">
		<? foreach ($arResult['BANNERS'] as $key => $value) { ?>
		    <li>
		        <div class="banner">
		            <?=$value?>
		        </div>
		    </li>
		<? } ?>
    </ul>
</div>
<?$frame->end();?>