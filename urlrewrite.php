<?php
$arUrlRewrite=array (
  16 => 
  array (
    'CONDITION' => '#^/news/topic-([0-9]+)/page-([0-9]+)/?$#',
    'RULE' => 'topic=$1&PAGEN_1=$2',
    'ID' => '',
    'PATH' => '/news/main.php',
    'SORT' => 100,
  ),
  2 => 
  array (
    'CONDITION' => '#^/online/([\\.\\-0-9a-zA-Z]+)(/?)([^/]*)#',
    'RULE' => 'alias=$1',
    'ID' => NULL,
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  20 => 
  array (
    'CONDITION' => '#^/video([\\.\\-0-9a-zA-Z]+)(/?)([^/]*)#',
    'RULE' => 'alias=$1&videoconf',
    'ID' => NULL,
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  14 => 
  array (
    'CONDITION' => '#^/news/page-([0-9]+)/([0-9]+)/?$#',
    'RULE' => 'ELEMENT_ID=$2',
    'ID' => '',
    'PATH' => '/news/detail.php',
    'SORT' => 100,
  ),
  4 => 
  array (
    'CONDITION' => '#^\\/?\\/mobileapp/jn\\/(.*)\\/.*#',
    'RULE' => 'componentName=$1',
    'ID' => NULL,
    'PATH' => '/bitrix/services/mobileapp/jn.php',
    'SORT' => 100,
  ),
  6 => 
  array (
    'CONDITION' => '#^/bitrix/services/ymarket/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/bitrix/services/ymarket/index.php',
    'SORT' => 100,
  ),
  13 => 
  array (
    'CONDITION' => '#^/news/page-([0-9]+)/?$#',
    'RULE' => 'PAGEN_1=$1',
    'ID' => '',
    'PATH' => '/news/main.php',
    'SORT' => 100,
  ),
  15 => 
  array (
    'CONDITION' => '#^/news/topic-(\\d+)/$#',
    'RULE' => 'topic=$1',
    'ID' => '',
    'PATH' => '/news/main.php',
    'SORT' => 100,
  ),
  3 => 
  array (
    'CONDITION' => '#^/online/(/?)([^/]*)#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  17 => 
  array (
    'CONDITION' => '#^/about/employees/$#',
    'RULE' => '/about/employees.php',
    'ID' => '',
    'PATH' => '/about/employees.php',
    'SORT' => 100,
  ),
  21 => 
  array (
    'CONDITION' => '#^/about/portfolio/$#',
    'RULE' => '/about/portfolio.php',
    'ID' => '',
    'PATH' => '/about/portfolio.php',
    'SORT' => 100,
  ),
  33 => 
  array (
    'CONDITION' => '#^/about/findus/$#',
    'RULE' => '/about/findus.php',
    'ID' => '',
    'PATH' => '/about/findus.php',
    'SORT' => 100,
  ),
  0 => 
  array (
    'CONDITION' => '#^/stssync/calendar/#',
    'RULE' => '',
    'ID' => 'bitrix:stssync.server',
    'PATH' => '/bitrix/services/stssync/calendar/index.php',
    'SORT' => 100,
  ),
  12 => 
  array (
    'CONDITION' => '#^/news/([0-9]+)/?$#',
    'RULE' => 'ELEMENT_ID=$1',
    'ID' => '',
    'PATH' => '/news/detail.php',
    'SORT' => 100,
  ),
  18 => 
  array (
    'CONDITION' => '#^/about/history/$#',
    'RULE' => '/about/history.php',
    'ID' => '',
    'PATH' => '/about/history.php',
    'SORT' => 100,
  ),
  23 => 
  array (
    'CONDITION' => '#^/about/topics/$#',
    'RULE' => '/about/topics.php',
    'ID' => '',
    'PATH' => '/about/topics.php',
    'SORT' => 100,
  ),
  25 => 
  array (
    'CONDITION' => '#^/news/feedback/#',
    'RULE' => '',
    'ID' => 'bitrix:form',
    'PATH' => '/news/feedback.php',
    'SORT' => 100,
  ),
  24 => 
  array (
    'CONDITION' => '#^/feedback/$#',
    'RULE' => '/feedback/index.php/',
    'ID' => '',
    'PATH' => '/feedback/index.php',
    'SORT' => 100,
  ),
  27 => 
  array (
    'CONDITION' => '#^/catalog/$#',
    'RULE' => '/catalog/index.php',
    'ID' => '',
    'PATH' => '/catalog/catalog.php',
    'SORT' => 100,
  ),
  26 => 
  array (
    'CONDITION' => '#^/search/$#',
    'RULE' => '/search/index.php',
    'ID' => '',
    'PATH' => '/search/index.php',
    'SORT' => 100,
  ),
  19 => 
  array (
    'CONDITION' => '#^/about/$#',
    'RULE' => '/about/index.php',
    'ID' => '',
    'PATH' => '/about/index.php',
    'SORT' => 100,
  ),
  31 => 
  array (
    'CONDITION' => '#^/order/$#',
    'RULE' => '/personal/make.php',
    'ID' => '',
    'PATH' => '/personal/make.php',
    'SORT' => 100,
  ),
  29 => 
  array (
    'CONDITION' => '#^/cart/$#',
    'RULE' => '/personal/cart.php',
    'ID' => '',
    'PATH' => '/personal/cart.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/news/$#',
    'RULE' => '/news/main.php',
    'ID' => '',
    'PATH' => '/news/main.php',
    'SORT' => 100,
  ),
  32 => 
  array (
    'CONDITION' => '#^/books/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/books/index.php',
    'SORT' => 100,
  ),
  5 => 
  array (
    'CONDITION' => '#^/rest/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/bitrix/services/rest/index.php',
    'SORT' => 100,
  ),
  22 => 
  array (
    'CONDITION' => '#^/$#',
    'RULE' => '/news/index.php',
    'ID' => '',
    'PATH' => '/news/index.php',
    'SORT' => 100,
  ),
);
