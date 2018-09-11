<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arTemplateParameters = array(
    'AUTH_INDEX' =>  array(
        'NAME'      =>  'Страница авторизации', 
        'TYPE'      =>  'STRING',
        'SORT'      =>  '10',
        'DEFAULT'    =>  '/auth/index.php'
    ),    
    'PERSONAL'   =>  array(
        'NAME'      =>  'Личный кабинет',
        'TYPE'      =>  'STRING',
        'DEFAULT'   =>  '/personal/',
    ),
    'LOGOUT'   =>  array(
        'NAME'      =>  'Выход',
        'TYPE'      =>  'STRING',
        'DEFAULT'   =>  $APPLICATION->GetCurPage() . '?logout=yes',
    ),
    'AUTH_REGISTER'   =>  array(
        'NAME'      =>  'Страница регистрации',
        'TYPE'      =>  'STRING',
        'DEFAULT'   =>  '/auth/?register=yes',
    ),
);
