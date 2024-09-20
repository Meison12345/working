<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "Наши сотрудники");
$APPLICATION->SetTitle("Сотрудники");
$APPLICATION->SetPageProperty("description", "Страница сотрудников");
$APPLICATION->SetPageProperty("title", "Наши сотрудники"); ?><?$APPLICATION->IncludeComponent(
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
);?> <br>
 <br>
<div class="center about">
	<h3 class="block__title">Наши сотрудники</h3>
	<p class="block__detail-text">
		 Наша команда состоит из высококвалифицированных специалистов, каждый из которых вносит свой уникальный вклад в общее дело. Мы гордимся тем, что у нас работают профессионалы с богатым опытом в своих областях, включая маркетинг, продажи, разработку и поддержку клиентов. Каждый сотрудник нашей компании стремится к постоянному развитию и обучению, что позволяет нам оставаться на передовой в быстро меняющемся мире бизнеса. Мы верим, что успех нашей компании напрямую зависит от наших людей, и поэтому создаем условия для их роста и самореализации. Вместе мы достигаем больших результатов и строим будущее, полное возможностей.
	</p>
</div>
 <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>