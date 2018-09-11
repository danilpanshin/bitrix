<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

CJSCore::Init();
?>

<?if($arResult["FORM_TYPE"] == "login"):?>

<nav class="top_menu grey inline-block">
        <a href="<?=$arParams["AUTH_REGISTER"]?>" class="register"><?=GetMessage("AUTH_REGISTER")?></a>
        <a href="<?=$arParams["AUTH_INDEX"]?>?backurl=<?=$arResult['BACKURL']?>" class="auth"><?=GetMessage("auth_form_comp_auth")?></a>
</nav>

<?
else:
?>

<nav class="top_menu grey inline-block authorize">
        <span>Здравствуйте,</span>
        <a href="<?=$arResult["PROFILE_URL"]?>"><b class="user_name"><?=$arResult["USER_NAME"]?></b></a>
        <a href="<?=$arParams["PERSONAL"]?>"><?=GetMessage("personal")?></a>
        <a class="logout" href="<?=$arParams["LOGOUT"]?>"><?=GetMessage("AUTH_LOGOUT_BUTTON")?></a>
</nav>    

<?endif?>
