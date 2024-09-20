<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "Наше местоположение");
$APPLICATION->SetTitle("Наше местоположение");
$APPLICATION->SetPageProperty("description", "Наше местоположение");
$APPLICATION->SetPageProperty("title", "Наше местоположение");
?>

<? $APPLICATION->IncludeComponent(
	"bitrix:menu",
	"about-menu",
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"COMPONENT_TEMPLATE" => "about-menu",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "left",
		"USE_EXT" => "N"
	)
); ?> <br>
<br>
<?= \TAO::frontend()->renderBlock('common/map'); ?>
<br>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>