<?php

AddEventHandler("main", "OnAfterUserAuthorize", Array("MyClass", "OnAfterUserAuthorizeHandler"));

class MyClass
{
    // создаем обработчик события "OnAfterUserAuthorize"
    function OnAfterUserAuthorizeHandler($arUser)
    {
        // выполняем все действия связанные с авторизацией
        $array = [
            "EMAIL" => $arUser["user_fields"]["EMAIL"],
            "LOGIN" => $arUser["user_fields"]["LOGIN"],
            "DATE" => date("Y-m-d H:i:s"), 
        ];
        CEvent::Send("MAIL_AFTER_AUTH", SITE_ID, $array);      
    }
}
