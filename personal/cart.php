<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("personal");
\TAO::frontendCss('basket');
\TAO::frontendJs('basket');
?>
<div class="center">
	<? $APPLICATION->IncludeComponent(
	"bitrix:sale.basket.basket", 
	"cart", 
	array(
		"ACTION_VARIABLE" => "basketAction",
		"ADDITIONAL_PICT_PROP_9" => "-",
		"AUTO_CALCULATION" => "Y",
		"BASKET_IMAGES_SCALING" => "adaptive",
		"COLUMNS_LIST_EXT" => array(
			0 => "PREVIEW_PICTURE",
			1 => "DELETE",
			2 => "SUM",
		),
		"COLUMNS_LIST_MOBILE" => array(
			0 => "PREVIEW_PICTURE",
			1 => "DELETE",
			2 => "SUM",
		),
		"COMPATIBLE_MODE" => "Y",
		"CORRECT_RATIO" => "Y",
		"DEFERRED_REFRESH" => "N",
		"DISCOUNT_PERCENT_POSITION" => "bottom-right",
		"DISPLAY_MODE" => "compact",
		"EMPTY_BASKET_HINT_PATH" => "/",
		"GIFTS_BLOCK_TITLE" => "Выберите один из подарков",
		"GIFTS_CONVERT_CURRENCY" => "N",
		"GIFTS_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_HIDE_NOT_AVAILABLE" => "N",
		"GIFTS_MESS_BTN_BUY" => "Выбрать",
		"GIFTS_MESS_BTN_DETAIL" => "Подробнее",
		"GIFTS_PAGE_ELEMENT_COUNT" => "4",
		"GIFTS_PLACE" => "BOTTOM",
		"GIFTS_PRODUCT_PROPS_VARIABLE" => "prop",
		"GIFTS_PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"GIFTS_SHOW_DISCOUNT_PERCENT" => "Y",
		"GIFTS_SHOW_OLD_PRICE" => "N",
		"GIFTS_TEXT_LABEL_GIFT" => "Подарок",
		"HIDE_COUPON" => "Y",
		"LABEL_PROP" => array(
		),
		"PATH_TO_ORDER" => "/order/",
		"PRICE_DISPLAY_MODE" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"PRODUCT_BLOCKS_ORDER" => "props,sku,columns",
		"QUANTITY_FLOAT" => "Y",
		"SET_TITLE" => "Y",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_FILTER" => "Y",
		"SHOW_RESTORE" => "N",
		"TEMPLATE_THEME" => "blue",
		"TOTAL_BLOCK_DISPLAY" => array(
			0 => "top",
		),
		"USE_DYNAMIC_SCROLL" => "Y",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"USE_GIFTS" => "N",
		"USE_PREPAYMENT" => "N",
		"USE_PRICE_ANIMATION" => "Y",
		"COMPONENT_TEMPLATE" => "cart",
		"LABEL_PROP_MOBILE" => array(
			0 => "GENRE",
			1 => "BINDING",
		),
		"LABEL_PROP_POSITION" => "top-left"
	),
	false
); ?>
</div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>