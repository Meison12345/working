<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle("Поиск");
$APPLICATION->SetPageProperty("title", "Поиск");
$APPLICATION->SetPageProperty("description", "Страница поиск");
?><?$APPLICATION->IncludeComponent(
	"bitrix:search.page", 
	"search", 
	array(
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "N",
		"COLOR_NEW" => "000000",
		"COLOR_OLD" => "C8C8C8",
		"COLOR_TYPE" => "Y",
		"COMPONENT_TEMPLATE" => "search",
		"DEFAULT_SORT" => "rank",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FILTER_NAME" => "",
		"FONT_MAX" => "50",
		"FONT_MIN" => "10",
		"NAME_TEMPLATE" => "",
		"NO_WORD_LOGIC" => "Y",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Результаты поиска",
		"PAGE_RESULT_COUNT" => "10",
		"PATH_TO_SONET_MESSAGES_CHAT" => "/company/personal/messages/chat/#USER_ID#/",
		"PERIOD_NEW_TAGS" => "",
		"RESTART" => "Y",
		"SHOW_CHAIN" => "N",
		"SHOW_ITEM_DATE_CHANGE" => "N",
		"SHOW_ITEM_TAGS" => "N",
		"SHOW_LOGIN" => "Y",
		"SHOW_ORDER_BY" => "N",
		"SHOW_TAGS_CLOUD" => "N",
		"SHOW_WHEN" => "N",
		"SHOW_WHERE" => "N",
		"STRUCTURE_FILTER" => "structure",
		"TAGS_INHERIT" => "Y",
		"TAGS_PAGE_ELEMENTS" => "150",
		"TAGS_PERIOD" => "",
		"TAGS_SORT" => "NAME",
		"TAGS_URL_SEARCH" => "",
		"USE_LANGUAGE_GUESS" => "Y",
		"USE_SUGGEST" => "N",
		"USE_TITLE_RANK" => "N",
		"WIDTH" => "100%",
		"arrFILTER" => array(
			0 => "no",
		),
		"arrFILTER_blog" => array(
			0 => "all",
		),
		"arrFILTER_iblock_Topics" => array(
			0 => "all",
		),
		"arrFILTER_iblock_rest_entity" => array(
			0 => "all",
		),
		"arrFILTER_main" => "",
		"arrWHERE" => array(
			0 => "iblock_Topics",
			1 => "iblock_rest_entity",
			2 => "blog",
		)
	),
	false
);?> <br><? require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>