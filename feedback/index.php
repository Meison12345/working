<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle("Форма обратной связи");
$APPLICATION->SetPageProperty("description", "Свяжитесь с нами");
$APPLICATION->SetPageProperty("title", "Обратная связь");
\TAO::frontendCss('feedback');
\TAO::frontendJs('feedback');
?><br>

<? print \TAO::form('Questions')->render(); ?>
<br>
<? require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>