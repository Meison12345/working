<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "Портфолио");
$APPLICATION->SetPageProperty("title", "Портфолио");
$APPLICATION->SetTitle("Портфолио");
$APPLICATION->SetPageProperty("description", "Страница с нашими работами");
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
); ?>
<div class="center about">
	<h3 class="block__title">Наши работы</h3>
	<p class="block__detail-text">
		За годы нашей деятельности мы реализовали множество успешных проектов, которые стали ярким примером нашего профессионализма и креативного подхода. Мы гордимся тем, что работали с разнообразными клиентами, от малых предприятий до крупных корпораций, и каждый проект был уникален. Наша команда успешно справилась с задачами в таких областях, как [укажите области, например, веб-разработка, дизайн, консалтинг и т.д.]. Мы стремимся к тому, чтобы каждая работа не только соответствовала ожиданиям клиентов, но и превосходила их. Мы постоянно ищем новые решения и подходы, чтобы обеспечить максимальную эффективность и качество. Ознакомьтесь с нашими кейсами и убедитесь сами в высоком уровне наших услуг!
	</p>
</div>
<br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>