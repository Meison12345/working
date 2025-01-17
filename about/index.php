<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("О компании \"Галактический вестник\"");
$APPLICATION -> SetTitle('О компании');
$APPLICATION->SetPageProperty("description", "Информационная страница");
$APPLICATION->SetPageProperty("title", "О компании"); ?><?$APPLICATION->IncludeComponent(
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
	<h3 class="block__title">О компании "Галактический вестник"</h3>
	<p class="block__detail-text">
		 Компания "Галактический вестник" была основана в 2023 году с целью создания уникального информационного пространства, посвященного самым актуальным событиям и достижениям в области науки, технологий и культуры. Мы стремимся стать надежным источником информации для всех, кто интересуется последними новостями и открытиями, которые формируют наше будущее. С момента своего основания "Галактический вестник" активно развивает свои направления, включая публикации статей, аналитические обзоры и интервью с ведущими экспертами. Наша команда состоит из профессионалов, обладающих глубокими знаниями и опытом в различных областях, что позволяет нам предоставлять нашим читателям качественный и достоверный контент. Мы верим в силу информации и ее способность вдохновлять и объединять людей. Наша миссия — не только информировать, но и побуждать к размышлениям, обсуждениям и действиям. Мы стремимся создать сообщество единомышленников, которые разделяют нашу страсть к знаниям и открытию нового. "Галактический вестник" активно использует современные технологии для распространения информации, включая социальные сети и мультимедийные форматы. Мы уверены, что доступ к качественной информации должен быть простым и удобным, и поэтому постоянно работаем над улучшением пользовательского опыта на нашем сайте. Присоединяйтесь к нам в этом увлекательном путешествии по миру знаний и открытий. Вместе мы сможем исследовать бескрайние горизонты науки и культуры!
	</p>
</div>
<br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>