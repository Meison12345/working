<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Наша история");
$APPLICATION -> SetTitle('Наша история');
$APPLICATION->SetPageProperty("description", "Страница с историей компании");
$APPLICATION->SetPageProperty("title", "Наша история");?><?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"about-menu",
	Array(
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
);?>
<div class="center about">
	<h3 class="block__title">Наша история</h3>
	<p class="block__detail-text">
		Наша компания была основана в 2023 году с целью предоставления высококачественных услуг в области [ваша сфера деятельности]. С самого начала мы стремились к инновациям и качеству, что позволило нам быстро завоевать доверие клиентов. В первые годы мы сосредоточились на [опишите ключевые направления или услуги], что стало основой нашего успеха. С течением времени мы расширили наш ассортимент и начали предлагать [дополнительные услуги или продукты], что позволило нам выйти на новые рынки. Сегодня мы гордимся тем, что являемся лидерами в нашей отрасли, и продолжаем развиваться, внедряя новые технологии и подходы. Наша история — это история постоянного роста, стремления к совершенству и преданности нашим клиентам.
	</p>
</div><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>